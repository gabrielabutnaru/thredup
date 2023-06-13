<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="loginAndRegister.css">
</head>
<body>
<section>
    <div class="form-box">
        <form action="registerProcess.php" method="POST">
            <h2>Create an account</h2>
            <div class="inputbox">
                <input type="text"  placeholder="Username" required="" name="uname">
            </div>
            <div class="inputbox">
                <input type="text" placeholder="Password" required="" name="upassword">
            </div>
            <input type="submit" value="Register" name="sub" class="button">
            <br>
            <?php
            if (isset($_REQUEST["err"]))
                $msg = "Username already exists";
            ?>
            <p style="color:red;">
                <?php if (isset($msg)) {

                    echo $msg;
                }
                ?>

            </p>
            <div class="login">
                <p>You already have an account? <a href="login.php">Connect to your account</a></p>
            </div>

        </form>

    </div>
</section>
</body>

