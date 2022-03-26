<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin login | Med-On </title>
</head>

<body>
    <center>
        <table border="0" align="center">
            
            <tr height="200px">
                <td width="90px" align="center"> <img src="images/Msymbol1.jpeg" width="300px" height="150px" alt=""> </td>
                <td width="1050px" align="right">
                    <a href="home.php">Home </a><br> 
                    <a href="about_us.php"> About </a><br>
                    <a href="emergency.php"> Emergency </a><br> 
                    <a href="login.php">Login/Sign Up</a>
            </tr>
            
            <tr height="200px">
                <td colspan="2" align="center">
                    <form action="../Controller/loginCheck.php" method="POST">
                    <table border="0" align="center">
                        <tr>
                            <th colspan="2"><h1>Login</h1></th>
                        </tr>
                        <tr>
                            <td>Username: </td>
                            <td><input type="text" name="username" value="" required></td>
                        </tr>
                        <tr>
                            <td>Password: </td>
                            <td><input type="password" name="password" value="" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" rowspan="2" align="center">
                                <button type="submit" name="submit" value="Submit">Submit</button> <br><br>
                                <a href="forgot.php">Forgot Password? </a> <br><br>
                                <a href="Admin.php">Create new account</a>

                            </td>
                        </tr>
                    </table>
                    </form>
                </td>
            </tr>
            <!-- 3rd row -->
            <tr>
                <td colspan="2" align="center">
                    Copyright &copy; Med-On
                </td>
            </tr>
        </table>
    </center>
</body>

</html>