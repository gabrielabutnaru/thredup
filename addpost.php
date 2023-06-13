<html>
<header>
    <title>Add Post</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addpost.css">
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
        <p class="lg"><a href="logout.php"><img src="logout.png"/></a></p>
    </div>
</div>
<div class="spacer"></div>
<section>
    <div class="form-box">
        <form onsubmit="return validareDate()" action="addPostProcess.php" method="POST">
            <div class="tabela">
                <div class="name">
                    <h2>Create a sale announcement</h2>
                </div>
                <table>
                    <tr>
                        <td><label for="title">Title: </label></td>
                        <td><input onfocus="removeKeyListener()" onblur="addKeyListener()" type="text" placeholder="Title" id="title" name="title"></td>
                    </tr>
                    <tr>
                        <td><label for="description">Description: </label></td>
                        <td><textarea onfocus="removeKeyListener()" onblur="addKeyListener()" placeholder="Description" id="description" name="description" cols="15" olorows="4"></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="image">Image: </label></td>
                        <td><input onfocus="removeKeyListener()" onblur="addKeyListener()" type="text" placeholder="Link" id="image" name="image"></td>
                    </tr>
                    <tr>
                        <td><label for="price">Price: </label></td>
                        <td><input onfocus="removeKeyListener()" onblur="addKeyListener()" type="text" placeholder="eg: 10000 EURO" id="price" name="price"></td>
                    </tr>
                    <tr>
                        <td><label for="phone">Phone: </label></td>
                        <td><input onfocus="removeKeyListener()" onblur="addKeyListener()" type="text" placeholder="eg: 07xxxxxxxx" id="phone" name="phone"></td>
                    </tr>
                </table>
                <input type="submit" value="Post" name="sub" class="button">
                <p style="color:red;">
                    <?php if (isset($_GET["msg"])) {
                        echo "Post created successfully!";
                    }
                    ?>

                </p>
            </div>
        </form>

    </div>
</section>
</body>
<script>
    function validareDate() {
        let title = document.getElementById('title').value,
            description = document.getElementById('description').value,
            image = document.getElementById('image').value,
            price = document.getElementById('price').value,
            phone = document.getElementById('phone').value,
            imageRegex = /https:\/\/i\.imgur\.com\/.*\.(jpeg|png|jpg)/;
        if (title === '') {
            alert('Please enter a title');
            return false;
        } else if (description === '') {
            alert('Please enter a description');
            return false;
        } else if (image === '') {
            alert('Please enter a link to an image');
            return false;
        } else if (!imageRegex.exec(image)) {
            alert('Please enter a valid JPG or PNG image link from imgur.com');
            return false;
        } else if (price === '') {
            alert('Please enter a price');
            return false;
        } else if (phone.length < 10) {
            alert('Please enter a valid phone number');
            return false;
        } else
            return true;
    }
    const menuNavigation = (e) => {
        if(e.code === "KeyA") {
            location.href = "addpost.php";
        }
        if(e.code === "KeyP") {
            location.href = "allPosts.php";
        }
        if(e.code === "KeyM") {
            location.href = "myPosts.php";
        }
    }
    document.addEventListener("keyup", menuNavigation);
    function removeKeyListener() {
        document.removeEventListener("keyup", menuNavigation);
    }
    function addKeyListener() {
        document.addEventListener("keyup", menuNavigation);
    }
</script>

</html>

