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
                
                <h2 align="center" > Lifeline Blood Bank System </h2>
            </div>
            <div id="body">
                <br><br><br><br><br>

                <form action="" method="post">
                
                    <table align="center">
                        <tr>
                            <td width="200px" height="70px"><b>Enter Username</b></td>
                            <td width="100px" height="70px"><input type="text" name="un" placeholder="Enter Username"
                                style="width: 180px; height: 30px; border-radius: 10px;"></td>
                        </tr>

                        <tr>
                            <td width="200px" height="70px"><b>Enter Password</b></td>
                            <td width="200px" height="70px"><input type="password" name="ps" placeholder="Enter Password" style="width: 180px;
                                    height: 30px; border-radius: 10px; "></td>
                            <!-- Use type="password" for password input for security reasons -->
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" name="sub" value="Login" style="width: 70px; height: 30px; border-radius: 5px;"></td>
                        </tr>
                    </table>
                </form>
                <?php
                if(isset($_POST['sub']))
                {
                    $un=$_POST['un'];
                    $ps=$_POST['ps'];
                    $q=$db->prepare("SELECT * FROM admin WHERE uname='$un' && pass='$ps'");
                    $q->execute();
                    $res=$q->fetchALL(PDO::FETCH_OBJ);
                    if($res)
                    {
                        $_SESSION['un']=$un;
                        header("Location:admin-home.php");
                    }
                    else
                    {
                        echo "<script>alert('Wrong User')</script>";
                    }
                }
                ?>
                <!-- Close the form tag here -->
            </div>
            <br><br><br><br><br><br><br>
            <div id="footer"><h4 align="center">© Copyright 2023 Blood Bank System by Divyansh Saini. All Rights Reserved.</h4></div>
        </div>
    </div>
</body>

</html>


