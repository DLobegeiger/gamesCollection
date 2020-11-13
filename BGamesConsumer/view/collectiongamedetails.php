<!DOCTYPE html>
<html>
<head>
  <title>User Game Details</title>
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
  <div id="userGameDetails">
    <?php
      echo "<h1>$_GET[game_title]</h1>";
      echo "<p><b>Game ID:</b> $_GET[gameid]</p>";
      echo "<p><b>Game Description:</b> $_GET[game_desc]</p>";
      echo "<p><b>Developer:</b> $_GET[developer_name]</p>";
      echo "<p><b>Genre:</b> $_GET[genre_name]</p>";
      echo "<p><b>Publisher:</b> $_GET[publisher_name]</p>";
      echo "<p><b>Price Paid:</b> $_GET[price_paid]</p>";
      echo "<p><b>Item Condition:</b> $_GET[item_condition]</p>";
    ?>
  </div>
  <div id="removeGame">
    <input id="userid" type="hidden" value="<?php echo $_SESSION['user_id'] ?>">
    <input id="gameid" type="hidden" value="<?php echo  $_GET['gameid']  ?>">
    <input type="button" onclick="removeCollection(userid.value, gameid.value)" value="Remove from collection">
  </div>
  <?php
    require("footer.html");
  ?>
</body>
</html>