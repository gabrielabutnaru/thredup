<?php

session_start ();
include("config.php");

if(isset($_REQUEST['sub']))
{
    $a = $_REQUEST['uname'];
    $b = $_REQUEST['upassword'];

    $res = mysqli_query($mysqli,"select* from users where username='$a'and password='$b'");
    $result=mysqli_fetch_array($res);
    if($result)
    {

        $_SESSION["login"]="1";
        $_SESSION["username"] = $a;
        header("location:index.php");
    }
    else
    {
        header("location:login.php?err=1");

    }
}
?>