<?php

include "database.php";

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
    <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
</head>
<body>
    <div class="admin-window">
        <div class="admin-wrapper">
            <div class="give-ticket">
                <div class="get">
                    <p>Записать</p>
                </div>
                <div class="cab-1">
                    <p>Кабинет 101: Юрист</p>
                </div>
                <div class="cab-2">
                    <p>Кабинет 102: Врач</p>
                </div>
                <div class="cab-3">
                    <p>Кабинет 103: Экономист</p>
                </div>
                <div class="cab-4">
                    <p>Кабинет 104: Бухгалтер</p>
                </div>
                <div class="cab-5">
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
                <div class="person-5">
                    <p class="number-one"> document.querySelector('.number-one').innerHTML = `A${('00' + numberblock1).slice(-2)}`;
                    ?>">-</p>
                </div>
                
               
            </div>
            <div class="inqueue">
                <div class="queue-one">
                    <p>Людей в очереди<span class="in-q-1"></span></p>
                </div>
                <div class="queue-two">
                    <p>Людей в очереди<span class="in-q-2"></span></p>
                </div>
                <div class="queue-three">
                    <p>Людей в очереди<span class="in-q-3"></span></p>
                </div>
                <div class="queue-four">
                    <p>Людей в очереди<span class="in-q-4"></span></p>
                </div>
                <div class="queue-five">
                    <p>Людей в очереди<span class="in-q-5"></span></p>
                </div>                
            </div>
        </div>
    </div>

    <!-- <script>
        $(document).ready(function(){
            $(document.querySelector('.cab-1 p')).on('click', function() {
                var numberblock11 = document.querySelector('.number-one').getAttribute('data-attr');
                console.log(document.querySelector('.number-one').innerHTML = `A${('00' + numberblock11).slice(-2)}`);
                    var index = $(document.querySelector('.cab-1 p')).val();
                    console.log(index)
            })
        })
        $.ajax({
            method: "POST",
            url: "some.php",
            data: { name: "John", location: "Boston" }
            })
            .done(function( msg ) {
                alert( "Data Saved: " + msg );
            });   
    </script> -->
    <script src="index.js"></script>
</body>
</html> 