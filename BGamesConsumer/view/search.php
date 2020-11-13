
<!DOCTYPE html>
<html>
<head>
  <title>Search</title>
  <meta charset="UTF-8">
  <meta name="author" content="Damien Lobegeiger">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="js/request.js"></script>
  <script src="js/theme.js"></script>
</head>
<body onload="loadTheme();">
  <?php
    require("../model/security.php");
    session_start();
    require("header.php");
  ?>
  <!--This form is used to search for games-->
  <form onsubmit="return false">
    <input id="gametitle" type="text" name="game_title" placeholder="Search" oninput="findgame(game_title.value)" autofocus><br><br>
		<input id="search" type="button" value="Search" onclick="findgame(game_title.value)">
  </form>
  <div id="spinner"></div>
  <div id="overlay">
    <div id="searchresults"></div>
    <div id="searchresults1"></div>
  </div>
    <?php
      require("footer.html");
    ?>
</body>
</html>

 