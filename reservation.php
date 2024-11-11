<?php
    require_once "connection.php";
    session_start();
    $user = $_SESSION['user'];
    $login = $user['login'];
    $query = "select * from reservation where login = '$login'";
    $res = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>My Reservations</title>
</head>
<body>
    <header></header>
    <div class="my-reservation">
        <table>
            <tr>
                <th>id</th>
                <th>location</th>
                <th>car</th>
                <th>pick-up date</th>
                <th>pick-up time</th>
                <th>drop-off date</th>
                <th>drop-off time</th>
                <th colspan = "2">cancel</th>
            </tr>
        <?php
            while ($tab = mysqli_fetch_assoc($res)){
        ?>
                <tr>
                    <td><?php echo $tab['id'] ?></td>
                    <td><?php echo $tab['location'] ?></td>
                    <td><?php echo $tab['car'] ?></td>
                    <td><?php echo $tab['pudate'] ?></td>
                    <td><?php echo $tab['putime'] ?></td>
                    <td><?php echo $tab['dodate'] ?></td>
                    <td><?php echo $tab['dotime'] ?></td>
                    <td align = "center"><a href = "cancel.php?id=<?php echo $tab['id'] ?>"><img src="img/delete.png" alt=""></a></td>
                </tr>
        <?php
            }
        ?>
        </table>
        <div class="back-home"><a href="dashboard.php">Back Home</a></div>
    </div>
</body>
</html>