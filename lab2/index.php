<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>
    <style>
        header, footer {
            padding: 0.625rem;
            text-align: center;
        }
        .title {
            margin-right: 20rem;
        }  
        main {
            padding: 1.25rem;
            max-width: 37.5rem;
            margin: auto;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            width: 15.625rem; 
            height: 4.375rem;
        }
        .table {
            margin-bottom: 0.94rem;
        }
    </style>
</head>
<body>
    <header>
        <img src="logo.png" alt="logo" class="logo">
        <h1 class="title">Домашняя работа: Feedback Form.</h1>
    </header>
    <main>
        <form action="https://httpbin.org/post" method="post">
            <div class="table">
                <label for="name">Имя пользователя:</label><br>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="table">
                <label for="email">E-mail:</label><br>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="table">
                <label for="type">Тип обращения:</label><br>
                <select name="type" id="type" required>
                    <option value="Жалоба">Жалоба</option>
                    <option value="Предложение">Предложение</option>
                    <option value="Благодарность">Благодарность</option>
                </select>
            </div>
            <div class="table">
                <label for="message">Текст обращения:</label><br>
                <textarea name="message" id="message" rows="5" required></textarea>
            </div>
            <div class="table">
                <label>Вариант ответа:</label><br>
                <input type="checkbox" name="response_sms" value="sms">СМС<br>
                <input type="checkbox" name="response_email" value="email">E-mail
            </div>
            <div class="table">
                <button type="submit">Отправить</button>
            </div>
            <div>
                <a href="get.php">Перейти на 2 страницу</a>
            </div>
        </form>
    </main>
    <footer>
        Задание для самостоятельной работы
    </footer>
</body>
</html>