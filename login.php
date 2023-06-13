<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="loginAndRegister.css">
</head>
<body>
<section>
    <div class="form-box">
        <form action="loginprocess.php" method="POST">
            <h2>Login</h2>
            <div class="inputbox">
                <input type="text" placeholder="Username" required="" name="uname">
            </div>
            <div class="inputbox">
                <input type="password" placeholder="Password" required="" name="upassword">
            </div>
            <input type="submit" value="Login" name="sub" class="button">
            <br>
            <?php
            if (isset($_REQUEST["err"]))
                $msg = "Invalid username or Password";
            ?>
            <p style="color:red;">
                <?php if (isset($msg)) {

                    echo $msg;
                }
                ?>

            </p>
            <div class="register">
                <p>You don't have an account yet? <a href="register.php">Create a new account</a></p>
            </div>

        </form>

    </div>
</section>
</body>

</html>