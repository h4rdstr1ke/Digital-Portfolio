<?php
include('../../db.php');
$login = $_POST["login"];
$pass = $_POST["pass"];
$repeatpass = $_POST["repeatpass"];
$email = $_POST["email"];

if (empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
    echo "Заполните все поля!!!";
} else {
    if ($pass != $repeatpass) {
        echo "Пароли не совпадают";
    } else {
        $sql = "INSERT INTO users (login,password,email) VALUES('$login', '$pass', '$email')";
        if ($connect->query($sql) === TRUE) {
            echo "Успешная регистрация";
            header("Location: ../Authorization.html");
        } else {
            echo "Ошибка" . $connect->error;
        }
    }
}
?>