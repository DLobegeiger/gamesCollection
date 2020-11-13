
<!DOCTYPE html>
<html>
<head>
  <title>Wishlist</title>
  <meta charset="UTF-8">
  <meta name="author" content="Damien Lobegeiger">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="js/theme.js"></script>
  <script src="js/font.js"></script>
  <script src="js/request.js"></script>
</head>

<?php
  require("../model/security.php");
  session_start();
  require("header.php");
  include("../model/user.php");
  include("../model/connection.php");
  echo "<h1>Your Wishlist</h1>";
?>

<body onload="userWishlist(<?php echo $_SESSION['user_id'] ?>); loadTheme(); loadFont();">
  <div id="spinner"></div>
  <div id="overlay">
    <div id="userwishlist"></div>
    <div id="userwishlist1"></div>
    <script src="js/fetch_get.js"></script>
  </div>
  <?php
    require("footer.html");
  ?>
</body>
</html>

 