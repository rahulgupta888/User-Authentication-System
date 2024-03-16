<?php
session_start();

include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        .logout {
            font-size: 25px;
            font-weight: bold;
            color: rgb(125, 125, 235);
            text-decoration: none;
        }

        .logout:hover {
            color: blue;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div style="text-align: center; padding: 20%;">
        <p style="font-size: 50px; font-weight: bold;">
            Hello 
            <?php
            if(isset($_SESSION['email'])) { 
                $email = $_SESSION['email'];
                $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email = '$email'");
                while ($row=mysqli_fetch_array($query)) {
                    echo $row['firstname'].' '.$row['lastname']; 
                }
            }
            ?>
            :)
        </p>
        <a class="logout" href="logout.php">Logout</a>
    </div>
</body>
</html>