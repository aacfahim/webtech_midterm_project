<?php
	session_start();

	if(isset($_COOKIE['STATUS'])){
		if($_COOKIE['STATUS'] == "OK"){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <table border = "1" align="center">
        <tr>
            <td colspan = "3" align="center">
                <img width="50" height="40" src="Profile Picture">
            </td>
            <td rowspan = "5">
                <button type="submit" formaction="view_profile.html">SAVE</button>
            </td>
        </tr>

        <tr>
            <td><strong>Name</strong></td>
            <td><input type="text" name="name" value=""></td>
        </tr>
        <tr>
            <td><strong>Username</strong></td>
            <td><input type="text" name="username" value=""></td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td><input type="text" name="email" value=""></td>
        </tr>
        
    </table>

    <p align="center"><a href="Dashboard.php" >Back to Dashboard</a></p>
</body>
</html>

<?php
}else{
		header('location: SuperAdminLogin.php');
		}
	}else{
		header('location: SuperAdminLogin.php?msg=Please Log in');
	}
?>
