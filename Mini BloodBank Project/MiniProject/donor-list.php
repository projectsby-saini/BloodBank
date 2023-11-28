<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor</title>
    <link rel="stylesheet" href="style.css">
    <style>
        td{
            width:200px;
            height:40px;
        }
    </style>
</head>

<body>
    <div id="full">
        <div id="inner_full">
            <div id= "header">
                <h2 align="center"><a href="admin-home.php" style="text-decoration: none; color: white; font-weight: 20px">Lifeline Blood Bank System</a></h2>
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
                <h1 align="center" style="text-decoration: none; color: white;">Donors List </h1>
                <br>
                <center>
                    <div id="form">
                        <table>
                            <tr>
                                <td><center><b><font color="blue">Name</font></b></center></td>
                                <td><center><b><font color="blue">Father's Name</font></b></center></td>
                                <td><center><b><font color="blue">Address</font></b></center></td>
                                <td><center><b><font color="blue">City</font></b></center></td>
                                <td><center><b><font color="blue">Age</font></b></center></td>
                                <td><center><b><font color="blue">Blood Group</font></b></center></td>
                                <td><center><b><font color="blue">Mobile No</font></b></center></td>
                                <td><center><b><font color="blue">E-mail</font></b></center></td>
                            </tr>
                            <?php
                            $q=$db->query("SELECT * FROM donor_registration");
                            while($r1=$q->fetch(PDO::FETCH_OBJ))
                            {
                                ?>
                                <tr>
                                <td><center><?= $r1->name; ?></center></td>
                                <td><center><?= $r1->fname; ?></center></td>
                                <td><center><?= $r1->address; ?></center></td>
                                <td><center><?= $r1->city; ?></center></td>
                                <td><center><?= $r1->age; ?></center></td>
                                <td><center><?= $r1->bgroup; ?></center></td>
                                <td><center><?= $r1->mno; ?></center></td>
                                <td><center><?= $r1->email; ?></center></td>
                                </tr>
                                    <?php
                            }
                            ?>
                        </table>
                    </div></center>
                    </div>
                <br><br><br><br><br><br><br><br>
            <div id="footer"><h4 align="center">© Copyright 2023 Blood Bank System by Divyansh Saini. All Rights Reserved.</h4>
        <p align="center" ><a href="logout.php"><font color="white">Logout</font></a></p></div>
        </div>
    </div>
</body>

</html>

