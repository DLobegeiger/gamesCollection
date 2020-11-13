
<!DOCTYPE html>
<html>
<head>
  <title>Collection</title>
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
?>
<body onload="userCollection(<?php echo $_SESSION['user_id'] ?>); loadTheme();  loadFont();" >
  <h1>Your Collection</h1>
  <div id="spinner"></div>
  <div id="overlay">
    <div id="usercollection"></div>
    <div id="usercollection1" onchange="loadTheme();  loadFont();"></div>
    <script src="js/fetch_get.js"></script>
  </div">
  <?php
    require("footer.html");
  ?>
</body>
</html>

 