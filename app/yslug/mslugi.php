<?php
session_start();
require_once '../include/database.php';
require_once '../functions.php';
date_default_timezone_set('Europe/Moscow');

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$tip = $_POST['tip'];
$stoim = $_POST['stoim'];
$nam = $_POST['nam'];
$idi = $_POST['idi'];

$dat = date('Y-m-d');
$nextyear = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);
$nextyear = date("Y-m-d", $nextyear);


$idd=$_SESSION['user_fiz']['id'];
$id=$_SESSION['user_ur']['id'];

if ($idd>0)
{
    //Services
    $ss = "INSERT INTO мои_услуги (Services, стоимость, Ind, leg) VALUES ('$idi', '$stoim', '$idd', NULL)";
    mysqli_query($link, $ss);
    $sql = "SELECT * FROM мои_услуги WHERE Ind = '$idd'";
    $check = mysqli_query($link, $sql);
    if (mysqli_num_rows($check) > 0)
    {
        $sqq = "SELECT * FROM усг_страхов WHERE individual = '$idd'";
        $chec = mysqli_query($link, $sqq);
        if (mysqli_num_rows($chec) == 0)
        {
            $sql = "INSERT INTO усг_страхов (strax_ID, individual, lega, итог, дата_начала, дата_конца) VALUES (NULL, '$idd', NULL, NULL, NULL, NULL)";
            mysqli_query($link, $sql);
            
        }
        $sq = "SELECT * FROM мои_услуги WHERE Ind = $idd";
        $che = mysqli_query($link, $sq);
            $summa = "SELECT SUM(стоимость) from мои_услуги where Ind = '$idd'";
            $upp = "UPDATE усг_страхов SET итог='$summa', дата_начала = '$dat', дата_конца = '$nextyear' WHERE individual = '$idd'";
            $response = [
            "status" => true,
            "message" => "Заполнение выполнено!",
            ];
        
    }
    else
    {
        $response = [
            "status" => false,
            "message" => "Заполнение провалилось",
        ];
    }



    
}

else if ($id > 0)
{
    $ss = "INSERT INTO мои_услуги (Services, стоимость, Ind, leg) VALUES ('$idi', '$stoim',NULL,'$id')";
    $sql = "SELECT * FROM мои_услуги WHERE leg = '$id'";
    $check = mysqli_query($link, $sql);
    if (mysqli_num_rows($check) > 0)
    {

        $sqq = "SELECT * FROM усг_страхов WHERE lega = '$id'";
        $chec = mysqli_query($link, $sqq);
        if (mysqli_num_rows($chec) == 0)
        {
            $sqd = "INSERT INTO усг_страхов (strax_ID, individual, lega, итог, дата_начала, дата_конца) VALUES (NULL, NULL,'$id', NULL, NULL, NULL)";
            mysqli_query($link, $sqd);
            
        }
        $sq = "SELECT * FROM мои_услуги WHERE leg = '$id'";
        $che = mysqli_query($link, $sq);
        if (mysqli_num_rows($che) > 0){
            $summa = "SELECT SUM(стоимость) from мои_услуги where leg = '$id'";
            $upp = "UPDATE усг_страхов SET итог='$summa', дата_начала = $dat, дата_конца = $nextyear WHERE lega = '$id'";
            $response = [
            "status" => true,
            "message" => "Заполнение выполнено!",
        ];
        }
    }
    else
    {
        $response = [
            "status" => false,
            "message" => "Заполнение провалилось",
        ];
    }
}


echo json_encode($response);
?>