<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Zoole";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Ошибка подключения". mysqli_connect_error());
} else {
    "Подключение есть ";
} ?>