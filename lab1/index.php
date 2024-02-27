<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            display: flex;
        }
        .title {
            margin-left: 10.5rem;
        }  
        main {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <header>
        <img src="logo.jpg" alt="logo" width='250px' height='70px'>
        <h1 class="title">Домашняя работа: Hello, World!</h1>
    </header>
    <main>
        <h2>
            <?php
            echo "<h1>Hello world</h1>";
            ?>
        </h2>
    </main>
    <footer>
        <h2>Задание для самостоятельной работы</h2>
    </footer>
</body>
</html>