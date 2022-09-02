<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>analize</title>
    <link rel="stylesheet" href="./sitesFor">
</head>
<body>
<div class="conteiner">
    <div class="conteiner-time">
        <div class="rows"><p>9:00-10:00</p><p id="1"></p></div>
        <div class="rows"><p>10:00-11:00</p><p id="2"></p></div>
        <div class="rows"><p>11:00-12:00</p><p id="3"></p></div>
        <div class="rows"><p>12:00-13:00</p><p id="4"></p></div>
        <div class="rows"><p>14:00-15:00</p><p id="5"></p></div>
        <div class="rows"><p>15:00-16:00</p><p id="6"></p></div>
        <div class="rows"><p>16:00-17:00</p><p id="7"></p></div>
        <div class="rows"><p>17:00-18:00</p><p id="8"></p></div>
    </div>
    <div class="conteiner-tablo">
        <div class="columns">
            <div>
                <p>Бакалавр-1 - </p><p id="bakalavr1"></p>
                <p>Бакалавр-2 - </p><p id="bakalavr2"></p>
                <p>Бакалавр-3 - </p><p id="bakalavr3"></p>
                <p>Бакалавр-4 - </p><p id="bakalavr4"></p>
                <p>Бакалавр-5 - </p><p id="bakalavr5"></p>
            </div>
        </div>
        <div class="columns">
            <div>
                <p>Бакалавр-6 - </p><p id="bakalavr6"></p>
                <p>Бакалавр-7 - </p><p id="bakalavr7"></p>
                <p>Бакалавр-8 - </p><p id="bakalavr8"></p>
                <p>Бакалавр-9 - </p><p id="bakalavr9"></p>
                <p>Бакалавр-10 - </p><p id="bakalavr10"></p>
            </div>
        </div>
        <div class="columns">
            <div>
                <p>Бакалавр-11 - </p><p id="bakalavr11"></p>
                <p>Бакалавр-12 - </p><p id="bakalavr12"></p>
                <p>Magphd-13 - </p><p id="magphd13"></p>
                <p>Magphd-14 - </p><p id="magphd14"></p>
                <p>Колледж-15 - </p><p id="colluge15"></p>
            </div>
        </div>
        <div class="columns">
            <div>
                <input class="inputforanaliz" type="text" id="date" name="date" placeholder="Укажите дату в формате YYYY-MM-DD">
                <button type="button" class="buttonstyleforanalize" id="bdinfo" name="bdinfo">Take info</button>
            </div>
        </div>
    </div>
</div>
<script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="../js/analizejs.js"></script>
<canvas id="myChart" width="600" height="100"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
