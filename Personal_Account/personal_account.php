<?php
$id = $_POST['but'];
$editor = $_POST['editor'];
echo $editor;
echo $id;

include_once("../session.php");
include_once('../db.php');
if ($idUser != '' && $id == '') {
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
} elseif ($id != '') {
    $sql = "SELECT * FROM personal_account WHERE id = $id"; //Получаем данные из базы и вносим их в переменные
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
}


?>



<!DOCTYPE html>
<lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="Personal_Account.css">
    </head>

    <body>
        <div class="container_head">
            <div class="head_block">
                <div class="head">
                    <div class="head_text">
                        <div class="logo">
                            <img id="logo" width="165" height="58" src="Img/logo.svg" />
                        </div>
                        <div class="head_func">
                            <a href="../Main/Main.php" id="Glavnaya">Главная</a>
                            <a href="Main_PC.html" id="O_nas">О нас</a>
                            <a href="../Cataloge/Cataloge.php" id="Katalog">Каталог<br>портфолио</a>
                            <div class="personal_account">

                                <a href="<?php if ($idUser == '') {
                                    echo '../Registration_Authorization/Authorization.html';
                                } else {
                                    echo '../Registration_Authorization/Script/login.php';
                                } ?>"><img id="personal_account" width="40px" height="40px"
                                        src="Img/personal_account.svg" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($id != '' && $id != $idUser) { ?>
            <form class="container">
                <div class="block_left">
                    <div class="information_one">
                        <div class="information_one_photo">
                        </div>
                        <div class="information_one_name">
                            <p><?= $name ?></p>
                            <p><?= $surname ?></p>
                            <p><?= $patronymic ?></p>
                        </div>
                    </div>
                    <div class="information_two">
                        <div class="information_two_proffesion">
                            <p>Специальность:</p>
                            <?= $specialization ?>
                        </div>
                        <div class="information_two_experience">
                            <p>Опыт разработки:</p>
                            <?= $experience ?>
                        </div>
                        <div class="information_two_age">
                            <p>Возраст:</p>
                            <?= $age ?>
                        </div>
                    </div>
                    <div class="information_three">
                        <p>Проекты:</p>
                        <div class="information_three_project">
                            <?= $project ?>
                        </div>
                    </div>
                </div>
                <div class="block_right">
                    <p>Обо мне:</p>
                    <div class="block_right_text">
                        <?= $information ?>
                    </div>

                    <?php
        } elseif ($idUser != '' || $id == $idUser) {

            ?>
                    <?php if ($editor == '') { ?>
                        <div class="container">
                            <div class="block_left">
                                <div class="information_one">
                                    <div class="information_one_photo">
                                    </div>
                                    <div class="information_one_name">
                                        <p><?= $name ?></p>
                                        <p><?= $surname ?></p>
                                        <p><?= $patronymic ?></p>
                                    </div>
                                </div>
                                <div class="information_two">
                                    <div class="information_two_proffesion">
                                        <p>Специальность:</p>
                                        <?= $specialization ?>
                                    </div>
                                    <div class="information_two_experience">
                                        <p>Опыт разработки:</p>
                                        <?= $experience ?>
                                    </div>
                                    <div class="information_two_age">
                                        <p>Возраст:</p>
                                        <?= $age ?>
                                    </div>
                                </div>
                                <div class="information_three">
                                    <p>Проекты:</p>
                                    <div class="information_three_project">
                                        <?= $project ?>
                                    </div>
                                </div>
                            </div>
                            <div class="block_right">
                                <p>Обо мне:</p>
                                <div class="block_right_text">
                                    <textarea id="block_right_text" readonly><?= $information ?></textarea>
                                </div>
                                <div class="block_right_func">
                                    <form action="../Personal_Account/personal_account.php" method="post"><button type="submit"
                                            name="editor" value='editor'>
                                            <p>Редактировать</p>
                                        </button>
                                    </form>
                                    <form action="../session.php" method="post"><button type="submit" name="exit" value='exit'>
                                            <p>Выйти</p>
                                        </button></form>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>

                        <form class="container" action="Script/personal_account_func.php" method="post">
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
                                    <textarea id="block_right_text" placeholder="Укажите информацию"
                                        name="information"><?= $information ?></textarea>
                                </div>
                                <button type="submit">Сохранить</button>
                            </div>
                        </form>
                        <form action="../session.php" method="post"><button type="submit" name="exit" value='exit'>
                                <p>Выйти</p>
                            </button></form>

                    <?php } ?>
                    <?php
        }
        ?>
    </body>

    </html>