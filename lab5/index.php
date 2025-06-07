<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Домашняя работа: Calculator.</title>
    <style>
        body {
            max-width: 18.75rem; 
            margin: auto; 
        }
        input[type="text"] { 
            width: 11.8rem; 
            height: 2.5rem; 
            font-size: 1.25rem; 
            margin-bottom: 0.625rem; 
        }
        button { 
            width: 3.75rem; 
            height: 2.5rem; 
            font-size: 1.125rem; 
            margin: 0.125rem; 
        }
    </style>
</head>
<body>
    <h2>Калькулятор</h2>

    <input type="text" id="display" readonly>
    <div id="buttons">
        <button onclick="add('1')">1</button>
        <button onclick="add('2')">2</button>
        <button onclick="add('3')">3</button><br>
        <button onclick="add('4')">4</button>
        <button onclick="add('5')">5</button>
        <button onclick="add('6')">6</button><br>
        <button onclick="add('7')">7</button>
        <button onclick="add('8')">8</button>
        <button onclick="add('9')">9</button><br>
        <button onclick="add('0')">0</button>
        <button onclick="clearDisplay()">C</button>
        <button onclick="calculate()">=</button><br>

        <button onclick="add('+')">+</button>
        <button onclick="add('-')">-</button>
        <button onclick="add('*')">*</button><br>
        <button onclick="add('/')">/</button>

        <button onclick="add('(')">(</button>
        <button onclick="add(')')">)</button><br>
    </div>

    <script>
        function add(char) {
            document.getElementById("display").value += char;
        }

        function clearDisplay() {
            document.getElementById("display").value = "";
        }

        function calculate() {
            const expression = document.getElementById("display").value;

            fetch('bd.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                body: 'expression=' + encodeURIComponent(expression)
            })
            .then(response => response.text())
            .then(result => {
                document.getElementById("display").value = result;
            });
        }
    </script>
</body>
</html>