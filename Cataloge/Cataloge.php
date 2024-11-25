<?php
include_once("../session.php");
include_once('../db.php');
$sql = "SELECT COUNT(`id`) AS `id` FROM personal_account";
$result = $connect->query($sql);                    //Запрос на получение всех id из бд
$row = mysqli_fetch_assoc($result);
$id = $row['id'];


/*$sql = "SELECT * FROM personal_account WHERE id = 2"; //Получаем данные из базы и вносим их в переменные
$result = $connect->query($sql);
print_r($result);
while ($row = mysqli_fetch_array($result)) {
    $age = $row['age'];
    $specialization = $row['specialization'];
    $experience = $row['experience'];
}
echo $age;*/


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Cataloge1.css">
    <link rel="stylesheet" href="../Fonts.css">
</head>

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
<div class="container_full">
    <div class='search'><input /><button>Найти</button></div>
    <div class="container_card">
        <?php
        while ($id > 0) {
            $sql = "SELECT * FROM personal_account WHERE id = $id"; //Получаем данные из базы и вносим их в переменные
            $result = $connect->query($sql);
            while (
                $row = mysqli_fetch_array(
                    $result
                )
            ) {
                $age = $row['age'];
                $specialization = $row['specialization'];
                $experience = $row['experience'];
            }
            ?>
            <div class="card">
                <div class="card_information">
                    <div class="card_information_img">
                        <img src="" width="100%" height="100%">
                    </div>
                    <div class="card_information_text_container">
                        <div class="card_information_text">
                            <p id="card_information_text">Специальность:</p>
                            <p id="card_information_text"><?= $specialization; ?></p>
                        </div>
                        <div class="card_information_text">
                            <p id="card_information_text">Возраст:</p>
                            <p id="card_information_text"><?= $age; ?></p>
                        </div>
                        <div class="card_information_text">
                            <p id="card_information_text">Опыт:</p>
                            <p id="card_information_text"><?= $experience; ?></p>
                        </div>
                    </div>
                </div>

                <div class="card_button">
                    <form action="../Personal_Account/personal_account.php" method="post"><button name="but" method="submit"
                            id="card_button" value=<?= $id; ?>>Открыть</button>
                    </form>
                </div>
            </div>
            <?php
            $id--;
        }

        ?>
    </div>
</div>

</body>

</html>