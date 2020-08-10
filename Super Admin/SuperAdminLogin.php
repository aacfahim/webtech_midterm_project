<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Login</title>
</head>
<body>
    <h1>JOB PORTAL ADMIN SECTION</h1>
    <fieldset>
        <legend align="center"><b>LOGIN</b></legend>
        <form action="SuperAdminLogcheck.php" method="POST">
            <table align="center">
                <tr>
                    <td>User Name</td>
                    <td>:</td>
                    <td><input type="text" name="uname"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>

                <tr>
                    <td colspan = "2"></td>
                    <td>
                        <?php if(isset($_GET['msg'])){
							echo $_GET['msg'];
						}  ?>
                    </td>
                </tr>
            </table>


            <hr/>
            <div align="center">
            <!-- <input name="remember" type="checkbox" value = "remmember">Remember Me -->
            <br/><br/>
            <input type="submit" name="submit" value="Submit">     
            <br>
            </div>


            <div align="center">
                <tr>
					<td><br></td>
					<td><a href = "SuperAdminRegistration.php">Register</a></td>
                </tr>
                
            </div>
        </form>
    </fieldset>
</body>
</html>