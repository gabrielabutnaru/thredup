<html>
<header>
    <title>ThredUp HomePage</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexStyle.css">
</header>
<body>
<div class="header">
    <div class="title">
        <p><a href="index.php">ThredUp</a></p>
    </div>
    <div class="menu">
        <p><a href="addpost.php">(A)dd a Post</a></p>
        <div class="submenu">
            <p>View posts</p>
            <div class="submenu-content">
                <p><a href="allPosts.php">All (P)osts</a></p>
                <p><a href="myPosts.php">(M)y posts</a></p>
            </div>
        </div>
        <p class="lg"><a href="logout.php"><img src="logout.png" /></a></p>
    </div>
</div>
<div class="spacer"></div>
<div class="welcome">
    <p>Welcome to <span>ThredUp</span> !</p>
</div>
</body>
<script>
    document.addEventListener("keyup", (e) => {
        console.log(e.code);
        if(e.code === "KeyA") {
            location.href = "addpost.php";
        }
        if(e.code === "KeyP") {
            location.href = "allPosts.php";
        }
        if(e.code === "KeyM") {
            location.href = "myPosts.php";
        }
    });
</script>
</html>
<?php

session_start();

include("config.php");

if (!isset($_SESSION["login"]))
    header("location:login.php");

?>