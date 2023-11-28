<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="full">
        <div id="inner_full">
            <div id="header">
                <h2 align="center"><a href="admin-home.php" style="text-decoration: none; color: white;">Lifeline Blood Bank System</a></h2>
            </div>
            <div id="body">
                <br>
                <?php
                $un=$_SESSION['un'];
                if(!$un)
                {
                    header("Location:admin-home.php");
                }
                ?>
                <h1 align="center" style="text-decoration: none; color: white; margin-left: 130px">Hello , Blood Bank Administrator...</h1><br><br>
                <ul>
                    <li><a href="donor-red.php">Donor Information </a></li>
                    <li><a href="donor-list.php">Blood Donor Samples </a></li>
                </ul><br><br><br><br><br>

                <ul>
                    <li><a href="stock-blood-list.php">Stocked Blood Types</a></li>
                    <li><a href="out-stock-blood-list.php">Outgoing Blood Records </a></li>
                </ul><br><br><br><br><br>
                <ul>
                    <li><a href="exchange-blood-list.php">Blood Exchange Records </a></li>
                    <li><a href="ngo-list.php">Collaborating Organizations</a></li>
                </ul>


                <form action="" method="post">
                
                    
                <!-- Close the form tag here -->
            </div>
            <br><br><br><br><br><br><br><br>
            <div id="footer"><h4 align="center">© Copyright 2023 Blood Bank System by Divyansh Saini . All Rights Reserved.</h4>
        <p align="center" ><a href="logout.php"><font color="white">Logout</font></a></p></div>
        </div>
    </div>
</body>

</html>
