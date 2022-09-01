<?php
$buttonvalue = $_POST['parent'];
$today = date("Y-m-d H:i:s");
$mysql = new mysqli('localhost', 'root', '', 'queueforprakrik');
$mysql->query("INSERT INTO queue(degree, manager, service_status, timereg) VALUES('$buttonvalue', NULL, 0, '$today')");
$result = $mysql->query("SELECT id FROM queue ORDER BY id DESC LIMIT 1");
$row = mysqli_fetch_array($result);
echo $row['id'];
$mysql->close();
?>