<?php

session_start();
$idUser = $_SESSION['user']['id'];
echo 'ID: ' . $idUser;


$logout = $_POST["exit"];
echo $logout;
if ($logout != '') {
    session_destroy();
    header('Location: ../Main/Main.php');
}


?>