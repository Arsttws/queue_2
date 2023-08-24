<?php
    include 'database.php';
    $person = $_GET['person'];
    $reslt = $db->query("SELECT MIN(`id`) AS `id` FROM `cab{$person}` WHERE 1")->fetch();
    $number = $reslt['id'];
    echo $number;
    // $db->query("INSERT INTO `cab{$cab}` SET `id` = '{$number}'");
    // $db->query("DELETE FROM `cab{$person}` WHERE `cab{$person}`.`id` = '{$reslt}'");
    $db->query("DELETE FROM `cab{$person}` WHERE `cab{$person}`.`id` = '{$number}'");
// echo $number;