<?php 

$username = $_POST["name"];
$password = $_POST["psw"];

if (strlen($password) < 9  ){
    header('Location: http://' . $_SERVER['SERVER_NAME']  ."/MyWeb" ."/sheet/" . '?page=login');
};




?>