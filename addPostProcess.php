<?php
session_start();
include("config.php");

if (isset($_REQUEST['sub'])) {
    $a = $_REQUEST['title'];
    $b = $_REQUEST['description'];
    $c = $_REQUEST['image'];
    $d = $_REQUEST['price'];
    $e = $_REQUEST['phone'];
    $f = date('Y/m/d');
    $g = $_SESSION['username'];

    mysqli_query($mysqli, "INSERT INTO `posts` (`title`, `picture_link`, `description`, `date`, `price`, `author`, `phone`) VALUES ('$a', '$c', '$b', '$f', '$d', '$g', '$e')");
    header("location:addpost.php?msg=1");
}
?>