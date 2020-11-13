<!DOCTYPE html>
<html>
<head>
  <title>Game Details</title>
  <meta charset="UTF-8">
  <meta name="author" content="Damien Lobegeiger">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="js/request.js"></script>
  <script src="js/theme.js"></script>
  <script src="js/font.js"></script>
</head>
<body onload="loadTheme();  loadFont();">
  <?php
    require("../model/security.php");
    session_start();
    require("header.php");
  ?>
  <?php
    echo "<img id='gameDetailsImage' src='$_GET[image]' alt='$_GET[game_title]'>";
  ?>
  <div id="gameDetails">
    <?php
      echo "<h1>$_GET[game_title]</h1>";
      echo "<p><b>Game Description:</b> $_GET[game_desc]</p>";
      echo "<p><b>Developer:</b> $_GET[developer_name]</p>";
      echo "<p><b>Genre:</b> $_GET[genre_name]</p>";
      echo "<p><b>Publisher:</b> $_GET[publisher_name]</p>";
    ?>
  </div>
    <p>Price paid:</p>
    <input id="price" type="number" min="0" step="any" placeholder="0">
    <p>Item condition</p>
    <select id="condition">
      <option value="Digital">Digital</option>
      <option value="Excellent">Excellent</option>
      <option value="Great">Great</option>
      <option value="Poor">Poor</option>
    </select><br>
    <input id="userid" type="hidden" value="<?php echo $_SESSION['user_id'] ?>">
    <input id="gameid" type="hidden" value="<?php echo  $_GET['gameid']  ?>"><br>
    <input type="button" onclick="addCollection(price.value, condition.value, userid.value, gameid.value)" value="Add to collection">
  <div id="addWishlist">
    <input type="button" onclick="addWishlist(userid.value, gameid.value)" value="Add to Wishlist">
  </div>
  <?php
    require("footer.html");
  ?>
</body>
</html>