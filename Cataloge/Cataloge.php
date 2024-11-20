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
    <link rel="stylesheet" href="Cataloge.css">
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
    <div class="container">
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
                        <img src="../Avatars/avatar.png" width="100%" height="">
                    </div>
                    <div class="card_information_text">
                        <p>Специальность: <?= $specialization; ?></p>
                        <p>Возраст: <?= $age; ?></p>
                        <p>Опыт: <?= $experience; ?></p>
                    </div>
                </div>
                <div card="card_button">
                    <form action="../Personal_Account/personal_account.php" method="post"><button name="but" method="submit"
                            id="card_button" value=<?= $id ?>>Открыть</button>
                    </form>
                </div>
            </div>
            <?php
            $id--;
        }

        ?>
    </div>

</body>

</html>