<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заголовки с сайта</title>
    <style>
        body {
            padding: 1.25rem;
        }
        textarea {
            width: 100%;
            height: 18.75rem;
        }
        header, footer {
            padding: 0.625rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Результаты работы функции get_headers</h1>
    </header>
    <main>
        <a href="http://localhost/php/lab2/index.php">Назад на первую страницу</a>
        <textarea readonly>
            <?php 
                print_r(get_headers("http://localhost/php/lab2/index.php"));
            ?>
        </textarea>
    </main>
    <footer>
        Задание для самостоятельной работы
    </footer>

</body>
</html>
