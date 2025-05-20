<!DOCTYPE html>
<html>
<head>
    <title>Галерея приколов</title>
    <script src="jquery-3.7.1.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
<center>
    <style>


        body {
            background: linear-gradient(mediumslateblue, indigo) fixed;
        }
        h1 {
            color: white;
            font: bold 3em Arial, sans-serif;
        }
        button{
            padding: 0.5em 1em; /* Поля по вертикали и горизонтали */
            font-size: 1em; /* Размер текста */
            color: #fff; /* Белый цвет текста */
            background-color:darkslateblue; /* Цвет фона кнопки */
            border-width: 0; /* Убираем рамку */
            border-bottom: 3px solid blueviolet; /* Линия снизу */
            border-radius: 0.4em; /* Радиус скругления */
            width: 250px;
        }

    </style>
<h1>Хихих, галерея...</h1>

<div id="categories">
    <button class="category-button" data-category="1">Котики</button>
    <button class="category-button" data-category="2">Щеночки</button>
    <button class="category-button" data-category="3">Лучший мужчина</button>
</div>

    <pre></pre>

<div id="gallery"></div>

    <pre></pre>

<button id="back-btn">Назад</button>
<button id="next-btn">Вперед</button>
</center>
</body>
</html>