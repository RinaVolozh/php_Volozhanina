<?php
    function getDb() {
        static $pdo;
        $host = 'localhost';          // Сервер базы данных
        $dbname = 'contacts_db';      // Имя базы данных
        $username = 'root';           // Имя пользователя
        $password = '';               // Пароль
        
        try {
            $pdo = new PDO("mysql:host=$host;charset=utf8", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            $pdo->exec("CREATE DATABASE IF NOT EXISTS $dbname CHARACTER SET utf8 COLLATE utf8_general_ci");
            
        } catch(PDOException $e) {
            die("Ошибка подключения или создания базы данных: " . $e->getMessage());
        }
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch(PDOException $e) {
            die("Ошибка подключения к базе данных '$dbname': " . $e->getMessage());
        }

        $sql = "CREATE TABLE IF NOT EXISTS contacts (
            id INT AUTO_INCREMENT PRIMARY KEY,          -- Уникальный ID
            surname VARCHAR(50) NOT NULL,               -- Фамилия
            name VARCHAR(50) NOT NULL,                  -- Имя
            lastname VARCHAR(50),                       -- Отчество
            gender ENUM('мужской', 'женский') NOT NULL, -- Пол
            birth_date DATE NOT NULL,                   -- Дата рождения
            phone VARCHAR(20),                          -- Телефон
            address TEXT,                               -- Адрес
            email VARCHAR(100),                         -- Email
            comment TEXT                                -- Комментарий
        )";

        try {
            $pdo->exec($sql);
            
        } catch(PDOException $e) {
            die("Ошибка создания таблицы: " . $e->getMessage());
        }
        return $pdo;
    }
?>