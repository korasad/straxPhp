<?php
session_start();
require_once '../include/database.php';
require_once '../functions.php';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$doki = $_POST['doki'];
$gos_n = $_POST['gos_n'];
$idd=$_SESSION['user_fiz']['id'];
$id=$_SESSION['user_ur']['id'];
$check_doki=0;
if ($idd>0)
{
    $sql = "SELECT * FROM доки WHERE individuals = $idd";
    $check_doki = mysqli_query($link,$sql);
    settype($idd, 'integer');
    if (mysqli_num_rows($check_doki) > 0) {
        $check_dok=$check_doki;
        $check_doki = mysqli_query($link, "SELECT * FROM доки WHERE individuals = $idd and '$doki' = 'паспорт'");
        if(mysqli_num_rows($check_dok)===mysqli_num_rows($check_doki))
        {
            $check_doki = 0;
        }
    }
    else
    {
        $check_doki = 0;
    }
}
if (mysqli_num_rows($check_doki)) {
    $response = [
        "status" => false,
        "type" => 1,
        "id" => $_SESSION['user_fiz']['id'],
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
    $response = [
        "status" => true,
        "message" => "Регистрация прошла успешно!",
    ];
    echo json_encode($response);
}
if ($_SESSION['user_ur']['id']){
    mysqli_query($link, "INSERT INTO `доки`(`id_dok`, `тип_документа`, `номер_документа`, `legal`, `individuals`) VALUES (NULL,'$doki','$gos_n','$id',NULL)");
$response = [
    "status" => true,
    "message" => "Регистрация прошла успешно!",
];
echo json_encode($response);
}
?>