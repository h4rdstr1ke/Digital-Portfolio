<?php

session_start();
include_once("db.php");
$idUser = $_SESSION['user']['id'];  //Проверка на сессию
if ($idUser == '') {
    header('Location: /index.php');
}
echo $idUser;
$sql = "INSERT INTO `personal_account` VALUES($idUser)";

?>


<!DOCTYPE html>
<lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="Styles\Personal_Account.css">
    </head>

    <body>
        <a href=" ..\Main\Main.html">Главная</a>
        <form class="container" action="personal_account_func.php" method="post">
            <div class="block_left">
                <div class="information_one">
                    <div class="information_one_photo">

                    </div>
                    <div class="information_one_name">
                        <input type="text" placeholder="Имя:" name="name" />
                        <input placeholder="Фамилия:" />
                        <input placeholder="Отчество:" />
                    </div>
                </div>
                <div class="information_two">
                    <div class="information_two_proffesion">
                        <p>Специальность:</p>
                        <input>
                    </div>
                    <div class="information_two_experience">
                        <p>Опыт разработки:</p>
                        <input>
                    </div>
                    <div class="information_two_age">
                        <p>Возраст:</p>
                        <input>
                    </div>
                </div>
                <div class="information_three">
                    <p>Проекты:</p>
                    <div class="information_three_project">
                        <input id="information_three_project_text">
                    </div>
                </div>
            </div>
            <div class="block_right">
                <p>Обо мне:</p>
                <div class="block_right_text">
                    <input id="block_right_text" placeholder="Укажите информацию">
                </div>
                <button type="submit">Сохранить</button>
            </div>
        </form>
    </body>

    </html>