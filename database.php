<?php

$server = "localhost";
$login = "f0840168_queue-db";
$pass = "CWARYTJ9";
$name_db = "f0840168_queue-db";

// $link = mysqli_connect($server, $login, $pass, $name_db);
$db = new PDO("mysql:host={$server};dbname={$name_db};charset=utf8", $login, $pass);

if($db == false)
{ 
    echo "Ошибка подключения"; 
}

?>