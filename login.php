<?php
    session_start();
    if (isset($_SESSION['info'])){
        $info = $_SESSION['info'];
    }
    unset($_SESSION['info']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>
<body>
    <header>

    </header>
    <div class="log">
        <fieldset>
            <legend>Login</legend>
            <form method="post" action="verif-login.php" class="login-form">
                <label class="label-class">Username</label>
                <input type="text" placeholder="username" name="login">
                <br>
                <label class="label-class">Mot de passe</label>
                <input type="password" placeholder="password" name="password">
                <br>
                <input type="submit" name="" id="" value="login">
                <?php
                    if (!empty($info)){
                        echo "<span>$info</span>";
                    }
                ?>
            </form>
        </fieldset>
    </div>
</body>
</html>