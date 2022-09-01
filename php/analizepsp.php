<?php
$day = $_POST['date'];
$time1 = 9;
$time2 = 10;
$mysql = new mysqli('localhost', 'root', '', 'queueforprakrik');
$arr = [];
for ($i = 0; $i < 9; $i++){
    $result1 = $mysql->query("SELECT COUNT(id) as 'id' FROM queue WHERE timereg >= '$day $time1:00:00' and timereg < '$day $time2:00:00'");
    $row = mysqli_fetch_array($result1);
    array_push( $arr, $row['id']);
    $time1++;
    $time2++;
}

for ($i = 1; $i < 13; $i++){
    $result1 = $mysql->query("SELECT COUNT(id) AS 'id' FROM queue WHERE manager = 'Бакалавр-$i' AND timereg >= '$day 00:00:00' and timereg < '$day 23:59:00'");
    $row = mysqli_fetch_array($result1);
    array_push( $arr, $row['id']);
}

for ($i = 13; $i < 15; $i++){
    $result1 = $mysql->query("SELECT COUNT(id) AS 'id' FROM queue WHERE manager = 'Магистрант/PhD-$i' AND timereg >= '$day 00:00:00' and timereg < '$day 23:59:00'");
    $row = mysqli_fetch_array($result1);
    array_push( $arr, $row['id']);
}
$result1 = $mysql->query("SELECT COUNT(id) AS 'id' FROM queue WHERE manager = 'Колледж-15' AND timereg >= '$day 00:00:00' and timereg < '$day 23:59:00'");
$row = mysqli_fetch_array($result1);
array_push( $arr, $row['id']);

$result = $arr[0] . '|' . $arr[1] . '|' . $arr[2] . '|' . $arr[3] . '|' . $arr[5] . '|' . $arr[6] . '|' . $arr[7] . '|' . $arr[8] . '|' . $arr[9] . '|' . $arr[10] . '|' . $arr[11] . '|' . $arr[12] . '|' . $arr[13] . '|' . $arr[14] . '|' . $arr[15] . '|' . $arr[16] . '|' . $arr[17] . '|' . $arr[18] . '|' . $arr[19] . '|' . $arr[20] . '|' . $arr[21] . '|' . $arr[22] . '|' . $arr[23];
echo $result;
$mysql->close();
?>