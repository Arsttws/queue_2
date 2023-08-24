<?php

include "database.php";
var_dump($db->query("SELECT max(`id`) AS `id` FROM `cab1` WHERE 1")->fetch());

// "INSERT INTO cab1 (id) VALUES (NULL)";


// $result = mysqli_query($link, "SELECT MAX(`number`) FROM `cab1`");
// $number = mysqli_fetch_assoc($result);
// echo $number['[MAX(`number`)'];
// print_r($number);
// echo "br";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    @media print {
        body * {
            display: none;
        }
        .added, .added * {
            display: block !important;
            position: absolute;
            font-size: 60px;
        }
    }
</style>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="queue">
                <div class="table">
                    <div class="cabinet">
                        <div class="headline">
                            <p>Кабинет</p>
                        </div>
                        <div class="cabinet-number">
                            <p>101</p>
                            <p>102</p>
                            <p>103</p>
                            <p>104</p>
                            <p>105</p>    
                        </div>
                    </div>
                    <div class="ticket">
                        <div class="ticket-headline">
                            <p>Талон</p>
                        </div>
                        <div class="ticket-number">
                            <p class="number-one" data-attr="<?php $result = mysqli_query($link, "SELECT * FROM cab1 ORDER BY id DESC LIMIT 0,1;");
$id = mysqli_fetch_assoc($result);
echo $id['id']; ?>">-</p>
                            <p class="number-two">-</p>
                            <p class="number-three">-</p>
                            <p class="number-four">-</p>
                            <p class="number-five">-</p>
                        </div>
                    </div>
                </div>
                <div class="client-message">
                    <p>Клиент <span class="client-ticket-number"></span> в кабинет <span class="client-cabinet-number"></span></p>
                </div>

            </div>
            <div class="video">
                <video autoplay muted loop src="./source/The Breathtaking Beauty of Nature - HD.mp4" width="640px" height="510px"></video>
            </div>
        </div>
    </div>
    <div class="admin-window">
        <div class="admin-wrapper">
            <div class="give-ticket">
                <div class="get">  
                    <p>Записать</p>
                </div>
                <div class="cab" data-cab="1">
                    <p>Кабинет 101: Юрист</p>
                </div>
                <div class="cab" data-cab="2">
                    <p>Кабинет 102: Врач</p>
                </div>
                <div class="cab">
                    <p>Кабинет 103: Экономист</p>
                </div>
                <div class="cab">
                    <p>Кабинет 104: Бухгалтер</p>
                </div>
                <div class="cab">
                    <p>Кабинет 105: Другое</p>
                </div>
            </div>
            <div class="next-person">
                <div class="send">
                    <p>Отправить</p>
                </div>
                <div class="person-1">
                    <p>Отправить в кабинет 101</p>
                </div>
                <div class="person-2">
                    <p>Отправить в кабинет 102</p>
                </div>
                <div class="person-3">
                    <p>Отправить в кабинет 103</p>
                </div>
                <div class="person-4">
                    <p>Отправить в кабинет 104</p>
                </div>
                <div class="person-5">
                    <p>Отправить в кабинет 105</p>
                </div>
            </div>
            <div class="added">
                <p>Клиент <span class="added-A" data-attr="
                    <?php $result = mysqli_query($link, "SELECT * FROM cab1 ORDER BY id DESC LIMIT 0,1;");
                        $id = mysqli_fetch_assoc($result);
                        echo $id['id']; ?>">
                    </span> добавлен в очередь</p>
                    <p>Клиент <span class="added-B">-</span> добавлен в очередь</p>
            </div>
            <div class="inqueue">
                <div class="queue-one">
                    <p>Людей в очереди 1 - <span class="in-q-1"></span></p>
                    
                </div>
                <div class="queue-two">
                    <p>Людей в очереди 2 - <span class="in-q-2"></span></p>
                </div>
                <div class="queue-three">
                    <p>Людей в очереди 3 - <span class="in-q-3"></span></p>
                </div>
                <div class="queue-four">
                    <p>Людей в очереди 4 - <span class="in-q-4"></span></p>
                </div>
                <div class="queue-five">
                    <p>Людей в очереди 5 - <span class="in-q-5"></span></p>
                </div>                
            </div>
        </div>
    </div>
        <a href="admin.php">admin</a>
    <script src="index.js"></script>
</body>
</html>