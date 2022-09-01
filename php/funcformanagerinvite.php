<?php
session_start();
$degree = $_COOKIE['degree'];
$login = $_SESSION['login'];
$mysql = new mysqli('localhost', 'root', '', 'queueforprakrik');
$result = $mysql->query("SELECT id FROM queue WHERE manager is NULL AND service_status = '0' AND degree = '$degree' ORDER BY timereg ASC LIMIT 1");
$resultmanagerdid = $mysql->query("SELECT id FROM managersinfo WHERE login = '$login'");
$user = mysqli_fetch_array($result);
$manager = mysqli_fetch_array($resultmanagerdid);
$managerid = $manager['id'];
$string =  $degree . '-' . $managerid;
$userid = $user['id'];
$mysql->query("UPDATE queue SET manager = '$string', `service_status` = b'1' WHERE queue.id = $userid");
echo $userid;
$mysql->close();
$_SESSION['userid'] = $userid;
$_SESSION['managerinfo'] = $string;
?>