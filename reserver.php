<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href = "style/reserver.css">
        <title>Successful Reservation</title>
    </head>
<body>
    
</body>
</html>

<?php
    require_once "connection.php";
    session_start();
    extract($_POST);
    $login = $_SESSION['user']['login'];
    $query = "insert into reservation (login, location, car, pudate, putime, dodate, dotime)
    values('$login', '$location', '$car', '$pudate', '$putime', '$dodate', '$dotime')";
    if (mysqli_query($conn, $query)){
?>

<header>
    <div class="status">
        <p>&#9989; La reservation a été effectuée avec succés</p>
    </div>
    <a href="dashboard.php">Back Home</a>
</header>

<?php
    }   
    else{
?>

<header>
    <div class="status">
        <p>&#9888; Les informations entrées sont érronés, Veuillez entrez des informations correctes</p>
    </div>
    <a href="dashboard.php">Back Home</a>
</header>

<?php
    }
    mysqli_close($connection);
?>