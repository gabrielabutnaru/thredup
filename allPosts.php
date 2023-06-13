<?php

session_start();

include("config.php");

if (!isset($_SESSION["login"]))
    header("location:login.php");

echo '<html>
          <header>
              <title>All Posts</title>
              <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="stylesheet" href="allPosts.css">
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
          <div class="post-container">';

$result = mysqli_query($mysqli, "SELECT id, title, picture_link, description, date, price, author, phone FROM posts");

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='post'>
                <div class='name'>
                    <p>" . "#" . $row["id"] . " - " . $row["title"] . "</p>
                </div>
                <div class='content'>"
            . '<div class="imagew"><img class="image" id="' . $row["id"] . '" onclick="moveElement(' . $row["id"] . ')" src="' . $row["picture_link"] . '"/></div> ' . "
              <table>
                <tr>
                    <td>Descriere produs: </td>
                    <td>" . $row["description"] . "</td>
                </tr>
                <tr>
                    <td>Postat de:</td>
                    <td>" . $row["author"] . "</td>
                </tr>
                <tr>
                    <td>Nr. de telefon:</td>
                    <td>" . $row["phone"] . "</td>
                </tr>
                <tr>
                    <td>Preț:</td>
                    <td>" . $row["price"] . "</td>
                </tr>
                <tr>
                    <td>Data anunțului:</td>
                    <td>" . $row["date"] . "</td>
                </tr>
              </table>
            </div>
       </div>";
    }
} else {
    echo "0 results";
}
echo '
</div>
</body>
<script>
function moveElement(id) {
const element = document.getElementById(id);
if(element.style.position === "fixed") {
    element.style.position = "static";
    element.style.width = "13rem";
    element.style.height = "13rem";
    return;
}
element.style.position = "fixed";
element.style.width = "26rem";
element.style.height = "26rem";
element.style.left = (window.innerWidth / 2 - element.getBoundingClientRect().width / 2) + "px"; 
element.style.top = (window.innerHeight / 2 - element.getBoundingClientRect().height / 2) + "px"; 
}
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
</html>';
?>

