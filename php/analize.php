<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>analize</title>
    <link rel="stylesheet" href="/maincss.css">
</head>
<body>
<div class="conteiner">
    <div class="columns">
        <div class="canvass">
            <canvas id="bar-chart1" width="500" height="250"></canvas>
            <canvas id="bar-chart2" width="500" height="250"></canvas>
        </div>
        <div class="input-button">
            <input class="inputforanaliz" type="text" id="date" name="date" placeholder="Укажите дату в формате YYYY-MM-DD">
            <button type="button" class="buttonstyleforanalize" id="bdinfo" name="bdinfo">Take info</button>
        </div>
    </div>
</div>
<script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="../js/analizejs.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
