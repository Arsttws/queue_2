<?php
include 'database.php';
$cab = $_GET['cab'];
$res = $db->query("SELECT max(`id`) AS `id` FROM `cab{$cab}` WHERE 1")->fetch();
$number = $res['id'] + 1;
$db->query("INSERT INTO `cab{$cab}` SET `id` = '{$number}'");
// $db->query("DELETE `cab{$cab}` WHERE `id` = '{$number}'");
echo $number;