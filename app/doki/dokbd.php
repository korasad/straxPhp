<?php

session_start();
require_once '../include/database.php';

$doki = $_POST['doki'];
$gos_n = $_POST['gos_n'];

$idd=$_SESSION['user_fiz']['id'];
$id=$_SESSION['user_ur']['id'];

print_r($id);
if ($_SESSION['user_fiz']['id']){
    $check_doki = mysqli_query($link, "SELECT `тип_документа` FROM `доки` WHERE `individuals` = '$idd'");
    if (mysqli_num_rows($check_doki) > 0) {
        $check_doki = mysqli_query($link, "SELECT `тип_документа` FROM `доки` WHERE `individuals` = '$idd' and `тип_документа` = '$doki'");
    }
    else
    {
        $check_doki = 0;
    }
}
    
elseif($_SESSION['user_ur']['id']!=''){
    $check_doki = mysqli_query($link, "SELECT `тип_документа` FROM `доки` WHERE `individuals` = '$id'");
    if (mysqli_num_rows($check_doki) > 0) {
        $check_doki = mysqli_query($link, "SELECT `тип_документа` FROM `доки` WHERE `legal` = '$id' and `тип_документа` = '$doki'");
    }
    else
    {
        $check_doki = 0;
    }
}
    


if (mysqli_num_rows($check_doki) > 0) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "У вас уже есть этот документ",
        "fields" => ['dok']
    ];

    echo json_encode($response);
    die();
}

$error_fields = [];


if ($gos_n === '') {
    $error_fields[] = 'gos_n';
}


if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Проверьте правильность полей",
        "fields" => $error_fields
    ];

    echo json_encode($response);
    die();
}

if ($_SESSION['user_fiz']['id']){
    mysqli_query($link, "INSERT INTO `доки`(`id_dok`, `тип_документа`, `номер_документа`, `legal`, `individuals`) VALUES (NULL,'$doki','$gos_n',NULL,'$idd')");
}
if ($_SESSION['user_ur']['id']){
    mysqli_query($link, "INSERT INTO `доки`(`id_dok`, `тип_документа`, `номер_документа`, `legal`, `individuals`) VALUES (NULL,'$doki','$gos_n','$id',NULL)");
}
    $response = [
        "status" => true,
        "message" => "Регистрация прошла успешно!",
    ];
    echo json_encode($response);



?>