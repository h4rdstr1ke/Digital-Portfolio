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
        <link rel="stylesheet" href="Personal_Account12.css">
        <link rel="stylesheet" href="Fonts.css">
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
            <div class="container">
                <div class="block_left">
                    <div class="information_container">
                        <div class="information_one">
                            <div class="information_one_photo">
                                <img height=200px width=150px>
                            </div>
                            <div class="information_one_name">
                                <p id="text_user"><?= $name ?></p>
                                <p id="text_user"><?= $surname ?></p>
                                <p id="text_user"><?= $patronymic ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="information_container">
                        <div class="information_two">
                            <div class="information_two_text">
                                <p>Специальность:</p>
                                <p id="text_user"><?= $specialization ?></p>
                            </div>
                            <div class="information_two_text">
                                <p>Опыт разработки:</p>
                                <p id="text_user"><?= $experience ?></p>
                            </div>
                            <div class="information_two_text">
                                <p>Возраст:</p>
                                <p id="text_user"><?= $age ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="information_container">
                        <div class="information_three">
                            <p>Проекты:</p>
                            <div class="information_three_project">
                                <p id="text_user"><?= $project ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block_right">
                    <div class="block_right_header">
                        <p id="block_right_header">Обо мне:</p>
                    </div>
                    <div class="block_right_text">
                        <p id="text_user"><?= $information ?></е>
                    </div>

                </div>
            </div>

            <?php
        } elseif ($idUser != '' || $id == $idUser) {

            ?>
            <?php if ($editor == '') { ?>
                <div class="container">
                    <div class="block_left">
                        <div class="information_container">
                            <div class="information_one">
                                <div class="information_one_photo">
                                    <img height=200px width=150px>
                                </div>
                                <div class="information_one_name">
                                    <p id="text_user"><?= $name ?></p>
                                    <p id="text_user"><?= $surname ?></p>
                                    <p id="text_user"><?= $patronymic ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="information_container">
                            <div class="information_two">
                                <div class="information_two_text">
                                    <p>Специальность:</p>
                                    <p id="text_user"><?= $specialization ?></p>
                                </div>
                                <div class="information_two_text">
                                    <p>Опыт разработки:</p>
                                    <p id="text_user"><?= $experience ?></p>
                                </div>
                                <div class="information_two_text">
                                    <p>Возраст:</p>
                                    <p id="text_user"><?= $age ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="information_container">
                            <div class="information_three">
                                <p>Проекты:</p>
                                <div class="information_three_project">
                                    <p id="text_user"><?= $project ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block_right">
                        <div class="block_right_header">
                            <p id="block_right_header">Обо мне:</p>
                        </div>
                        <div class="block_right_text">
                            <p id="text_user"><?= $information ?></е>
                        </div>
                        <div class="block_right_func">
                            <form id="form_button" action="../Personal_Account/personal_account.php" method="post">
                                <button type="submit" name="editor" value='editor'>
                                    <p id="button_text">Редактировать</p>
                                </button>
                            </form>
                            <form action="../session.php" method="post"><button type="submit" name="exit" value='exit'>
                                    <p id="button_text">Выйти</p>
                                </button></form>
                        </div>
                    </div>
                </div>

            <?php } else { ?>

                <form class="container" action="Script/personal_account_func.php" method="post">
                    <div class="block_left">
                        <div class="information_container">
                            <div class="information_one">
                                <div class="information_one_photo">
                                    <img height=200px width=150px>
                                </div>
                                <div class="information_one_name">
                                    <input id="text_user" type="text" placeholder="Имя:" name="name" value="<?= $name ?>" />
                                    <input id="text_user" type="text" placeholder="Фамилия:" name="surname"
                                        value="<?= $surname ?>" />
                                    <input id="text_user" type="text" placeholder="Отчество:" name="patronymic"
                                        value="<?= $patronymic ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="information_container">
                            <div class="information_two">
                                <div class="information_two_text">
                                    <p>Специальность:</p>
                                    <input id="text_user" name="specialization" value="<?= $specialization ?>">
                                </div>
                                <div class="information_two_text">
                                    <p>Опыт разработки:</p>
                                    <input id="text_user" name="experience" value="<?= $experience ?>">
                                </div>
                                <div class="information_two_text">
                                    <p>Возраст:</p>
                                    <input id="text_user" name="age" value="<?= $age ?>">
                                </div>
                            </div>
                        </div>
                        <div class="information_container">
                            <div class="information_three">
                                <p>Проекты:</p>
                                <div class="information_three_project">
                                    <textarea id="text_user" placeholder="Добавьте ссылки на ваши проекты"
                                        name="project"><?= $project ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block_right">
                        <div class="block_right_header">
                            <p id="block_right_header">Обо мне:</p>
                        </div>
                        <div class="block_right_text">
                            <textarea id="text_user" placeholder="Укажите информацию"
                                name="information"><?= $information ?></textarea>
                        </div>
                        <div class="block_right_func">
                            <button type="submit">
                                <p id="button_text">Сохранить</p>
                            </button>
                        </div>
                    </div>
                </form>
            <?php } ?>
            <?php
        }
        ?>
    </body>

    </html>