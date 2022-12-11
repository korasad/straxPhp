<?php
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//Услуги
function get_yslugi(){
    global $link;
    $sql = "SELECT * FROM все_услуги";
    $result = mysqli_query($link,$sql);

    $yslugi = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $yslugi;
}
//Документы
function get_doki(){
    $idd=$_SESSION['user_fiz']['id'];
    $id=$_SESSION['user_ur']['id'];
    

    global $link;
    if ($idd>0)
    {
        settype($idd, 'integer');
        $sql = "SELECT * FROM доки WHERE individuals = $idd";
        $result = mysqli_query($link,$sql);
        $doki = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $doki;
    }
    if ($id>0)
    {
        //settype($id, 'int');
        $sql = "SELECT * FROM доки WHERE legal = $id";
        $result = mysqli_query($link,$sql);
        $doki = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $doki;
    }
    else 
    {
        return 0;
    }
    
}

//Услуги
function get_ysluga(){
    global $link;
    $idd=$_SESSION['user_fiz']['id'];
    $id=$_SESSION['user_ur']['id'];
    if ($idd>0)
    {
        $sql = "SELECT * FROM усг_страхов WHERE individual = $idd";

        $result = mysqli_query($link,$sql);
        $ysluga = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $ysluga;
    }
    if ($id>0)
    {
        $sql = "SELECT * FROM усг_страхов WHERE lega = $id";
        $result = mysqli_query($link,$sql);
        $ysluga = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $ysluga;
    }
    else 
    {
        return 0;
    }
}