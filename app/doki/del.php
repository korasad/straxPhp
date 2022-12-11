<?php
session_start();
require_once '../include/database.php';
require_once '../functions.php';

// formData.append('tip', tip);
// formData.append('nom', nom);
// formData.append('idi', idi);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$tip = $_POST['tip'];
$nom = $_POST['nom'];


$idd=$_SESSION['user_fiz']['id'];
$id=$_SESSION['user_ur']['id'];
$del_doki=0;

if ($idd>0)
{
    $sql = "DELETE FROM доки WHERE individuals = $idd and номер_документа = '$nom' and тип_документа = '$tip'";
    mysqli_query($link, $sql);
    $response = [
    "status" => true,
    "message" => "Удаление прошло успешно!",
    ];
}

else if ($id > 0)
{
    $sql = "DELETE FROM доки WHERE legal = $idd and номер_документа = '$nom' and тип_документа = '$tip'";
    mysqli_query($link, $sql);
    $response = [
        "status" => true,
        "message" => "Удаление прошло успешно!",
    ];
}








echo json_encode($response);
?>