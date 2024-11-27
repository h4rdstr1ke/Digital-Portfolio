<?php
session_start();
$idUser = $_SESSION['user']['id'];
//Проверка на сессию
if ($idUser != '') {
    header('Location: ../../Personal_Account/personal_account.php');
}



session_start();
include('../../db.php');

$login = $_POST["login"];
$pass = $_POST["pass"];

if (empty($login) || empty($pass)) {
    echo "Заполните все поля";

} else {
    $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$pass'";
    $result = $connect->query($sql);



    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            //echo "Добро Пожаловать" . $row["login"];
            //setcookie("login", $login, time() + 3600 * 24 * 30, "/");
            //header("Location: /personal_account.php");
            //session_start();

            $_SESSION['user']['id'] = $row['id'];
            header('Location: ../../Personal_Account/personal_account.php');
        }
    } else {
        echo "Вы ввели некоректные данные!";

    }
}

?>