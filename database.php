<?php

$server = "localhost";
$login = "root";
$pass = "Sfhc_510";
$name_db = "queuedb";

// $link = mysqli_connect($server, $login, $pass, $name_db);
$db = new PDO("mysql:host={$server};dbname={$name_db};charset=utf8", $login, $pass);

if($db == false)
{ 
    echo "Ошибка подключения"; 
}

?>