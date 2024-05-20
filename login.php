<?php
    require_once "includes/config_session.inc.php";
    require_once "includes/signup_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <section class="wrapper-main">
        <form action="includes/login.inc.php" method="POST">
            <h1>Signup</h1>
            
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="username">

            <label for="password">Password</label>'
            <input type="password" name="pwd" placeholder="password">'
            
            <button type="submit" class="button">Login</button><br>
            <a href="index.php" class="signup">Signup</a>
        </form>  

        <?php
        check_signup_errors();
        ?>

    </section>  
    
</body>
</html>