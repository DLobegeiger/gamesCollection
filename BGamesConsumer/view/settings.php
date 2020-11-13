<!DOCTYPE html>
<html>
    <head>
        <title>Settings</title>
        <meta charset="UTF-8">
        <meta name="author" content="Damien Lobegeiger">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="js/theme.js"></script>
        <script src="js/font.js"></script>
    </head>
    <body onload="loadTheme(); loadFont();">
        <?php
            session_start();
            require("header.php");
        ?>
        <h1 id="center_text">Theme</h1>
        <input type="button" value="Light mode" onclick="localStorage.setItem('theme', 'light'); window.location.reload(true)">
        <input type="button" value="Dark mode" onclick="localStorage.setItem('theme', 'dark'); window.location.reload(true)">
        <h1 id="center_text">Font Size</h1>
        <input type="button" value="16px" onclick="localStorage.setItem('fontsize', '16px'); window.location.reload(true)">
        <input type="button" value="20px" onclick="localStorage.setItem('fontsize', '20px'); window.location.reload(true)">
        <?php
            require("footer.html");
        ?>
    </body>
</html>