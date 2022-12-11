<?php
session_start();
if (!$_SESSION['user_ur']) {
    unset($_SESSION['user_fiz']);
}
else{
    unset($_SESSION['user_ur']);
}

header('Location: ../../../index.php');