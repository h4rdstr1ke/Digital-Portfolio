<?php

include_once('../db.php');
include_once('../session.php');

/*if (!$connect) {
    die("Connection Failed" . mysqli_connect_error()); #Проверка на подключение к бд
} else {
    echo "Успешно";
}*/

/*$sql = "SELECT * FROM personal_account";
$result = $connect->query($sql);
while ($row = $result->fetch_assoc()) {       #Проверка на получение данных из бд
    $data[] = $row;
}
print_r($data);*/



//Отправка новых данных
$name = $_POST['name'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$specialization = $_POST['specialization'];
$experience = $_POST['experience'];
$age = $_POST['age'];
$project = $_POST['project'];
$information = $_POST['information'];

$sql = "UPDATE personal_account SET name = '$name', surname = '$surname', patronymic = '$patronymic',specialization = '$specialization'
,experience = '$experience', age = '$age', project = '$project', information = '$information' WHERE id = $idUser";
if ($connect->query($sql) === TRUE) {
    echo "Успешная отправка";
}



?>