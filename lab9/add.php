<?php
    require_once 'db.php';
    function addContact($pdo, $sort = 'added', $page = 1) {
        $msg = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button'])) {
    
            $stmt = $pdo->prepare("INSERT INTO contacts (surname, name, lastname, gender, birth_date, phone, address, email, comment)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) ");
            $success = $stmt->execute([
                $_POST['surname'], $_POST['name'], $_POST['lastname'], $_POST['gender'],
                $_POST['birth_date'], $_POST['phone'], $_POST['address'], $_POST['email'], $_POST['comment']
            ]);
    
            $msg = $success ? "<div class='success'>Запись добавлена</div>" : "<div class='error'>Ошибка: запись не добавлена</div>";
        }
    
        $row = [
            'surname' => '', 'name' => '', 'lastname' => '', 'gender' => '',
            'birth_date' => '', 'phone' => '', 'address' => '', 'email' => '', 'comment' => ''
        ];
        $button = 'Добавить';

        ob_start();
        include 'form.php';
        return $msg . ob_get_clean();
    }
?>