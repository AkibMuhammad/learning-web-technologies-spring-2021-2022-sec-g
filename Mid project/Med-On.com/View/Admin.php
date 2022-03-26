<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Registration Form</title>
</head>

<body>
    <center>
        <table border="0">
            <tr height="200px">
                <td width="200px" align="left"> <img src="images/Msymbol1.jpeg" width="300px" height="200px" alt=""> 
                </td>
                <td width="1050px" align="right">
                    <a href="home.php">Home </a> <br>
                    <a href="about_us.php"> About </a> <br>
                    <a href="emergency.php"> Contact </a> <br> 
                    <a href="login.php">Login/Sign Up</a>
                </td>
            </tr>
            <tr height="400px">
                <td colspan="2" align="center">
                    <form action="/Med-On.com 1/Controller/AdminRegCheck.php" method="POST">
                        <table border="0">
                            <!-- admin name -->
                            <tr >
                                <td>Name : </td>
                                <td><input type="text" name="admin_name" value="" required></td>
                            </tr>
                            <!-- admin username -->
                            <tr>
                                <td>Username : </td>
                                <td><input type="text" name="admin_username" value="" required></td>
                            </tr>
                            <!-- admin Email -->
                            <tr>
                                <td>E-mail:</td>
                                <td><input type="text" name="admin_email" value="" required></td>
                            </tr>

                            <!-- admin Password -->
                            <tr>
                                <td>Password :</td>
                                <td><input type="password" name="admin_password" value="" required></td>
                            </tr>

                            <!-- admin gender -->
                            <tr>
                                <td>Gender :</td>
                                <td>
                                    <input type="radio" name="gender" value="Male">Male
                                    <input type="radio" name="gender" value="Female">Female
                                    <input type="radio" name="gender" value="Others">Others
                                </td>
                            </tr>
                            <!-- admin_address -->
                            <tr>
                                <td>Address : </td>
                                <td><input type="text" name="admin_address" value=""></td>
                            </tr>
                            <!-- admin_blood group -->
                            <tr>
                                <td>Blood Group</td>
                                <td>
                                    <select name="Blood" id="">
                                        <!-- <option value="<?=$blood?>"><?=$blood?></option> -->
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <td colspan="2" rowspan="2" align="center">
                                    <button type="submit" name="submit" value="Submit">Submit</button> <br>
                                    <a href="login.php">Already have account? </a>

                            </td>

                        </table>
                    </form>

                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    Copyright &copy; @Med-On
                </td>
            </tr>
        </table>

    </center>
</body>

</html>