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
        $sql2 = "INSERT INTO personal_account (name,surname,patronymic,specialization,experience,age,project,information) VALUES('-','-','-','-','-','-','-','-')";

        if ($connect->query($sql) && ($connect->query($sql2)) === TRUE) {
            echo "Успешная регистрация";
            header("Location: ../Authorization.html");
        } else {
            echo "Ошибка" . $connect->error;
        }
    }
}
?>