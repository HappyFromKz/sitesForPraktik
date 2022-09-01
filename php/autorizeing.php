<?php
session_start();
$login = trim($_POST['login']);
$password = trim($_POST['password']);
$password = md5($password);

$_SESSION['login'] = $login;

$mysql = new mysqli('localhost', 'root', '', 'queueforprakrik');
$result = $mysql->query("SELECT * FROM managersinfo WHERE login='$login' AND password='$password'");
$user = mysqli_fetch_array($result);
if(count($user) === 0){
    echo 'false';
    setcookie('degree', $user['degree'], time() === 0, "/");
} else{
    echo 'true';
    setcookie('degree', $user['degree'], time() + 3600, "/");
}
$mysql->close();
?>