<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="author" content="Damien Lobegeiger">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/fetch_get.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
        <div id="spinner"></div>
        <div id="overlay">
            <h1 id="app_title">Games <br> Collection</h1>
            <form action="../controller/checkCredentials.php" method="POST">
                <input type=text id="uname" name="uname" placeholder="Username" autofocus><br>
                <br>
                <input type="password" id="password" name="password" placeholder="Password"><br>
                <br><br>
                <input id="login" type="submit" value="Login">
                <?php
                    if (isset($_GET['mesg'])){
                        echo "<label>".$_GET['mesg']."</label>";
                    }
                ?>
            </form><br>
            <p id="center_text">Don't have an account? <a href="signup.html"><b>Sign up</b></a></p>
        </div>
    </body>
</html>