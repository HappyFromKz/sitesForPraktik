<?php
session_start();
$userid = $_SESSION['userid'];
$managerinfo = $_SESSION['managerinfo'];
$string = $managerinfo . '|' . $userid;
echo $string
?>