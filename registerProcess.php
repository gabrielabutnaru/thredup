<?php

session_start ();
include("config.php");

if(isset($_REQUEST['sub']))
{
    $a = $_REQUEST['uname'];
    $b = $_REQUEST['upassword'];
    try {
        mysqli_query($mysqli,"INSERT INTO `users` (`username`, `password`) VALUES ('$a', '$b')");
        $_SESSION["login"]="1";
        $_SESSION['username'] = $a;
        header("location:index.php");
    }
    catch (Exception $e)
    {
        header("location:register.php?err=1");

    }
}
?>