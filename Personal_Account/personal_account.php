<?php

include_once("../session.php");
if ($idUser == '') {
    header('Location: /../Main/Main.html');
}
include_once('../db.php');
$sql = "SELECT * FROM personal_account WHERE id = $idUser"; //Получаем данные из базы и вносим их в переменные
$result = $connect->query($sql);
while ($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $surname = $row['surname'];
    $patronymic = $row['patronymic'];
    $specialization = $row['specialization'];
    $experience = $row['experience'];
    $age = $row['age'];
    $project = $row['project'];
    $information = $row['information'];
}

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
        <a href=" ..\Main\Main.php">Главная</a>
        <form class="container" action="personal_account_func.php" method="post">
            <div class="block_left">
                <div class="information_one">
                    <div class="information_one_photo">

                    </div>
                    <div class="information_one_name">
                        <input type="text" placeholder="Имя:" name="name" value="<?= $name ?>" />
                        <input placeholder="Фамилия:" name="surname" value="<?= $surname ?>" />
                        <input placeholder="Отчество:" name="patronymic" value="<?= $patronymic ?>" />
                    </div>
                </div>
                <div class="information_two">
                    <div class="information_two_proffesion">
                        <p>Специальность:</p>
                        <input name="specialization" value="<?= $specialization ?>">
                    </div>
                    <div class="information_two_experience">
                        <p>Опыт разработки:</p>
                        <input name="experience" value="<?= $experience ?>">
                    </div>
                    <div class="information_two_age">
                        <p>Возраст:</p>
                        <input name="age" value="<?= $age ?>">
                    </div>
                </div>
                <div class="information_three">
                    <p>Проекты:</p>
                    <div class="information_three_project">
                        <input id="information_three_project_text" name="project" value="<?= $project ?>">
                    </div>
                </div>
            </div>
            <div class="block_right">
                <p>Обо мне:</p>
                <div class="block_right_text">
                    <input id="block_right_text" placeholder="Укажите информацию" name="information"
                        value="<?= $information ?>">
                </div>
                <button type="submit">Сохранить</button>
            </div>
        </form>
        <form action="../session.php" method="post"><button type="submit" name="exit" value='exit'>
                <p>Выйти</p>
            </button></form>
    </body>

    </html>