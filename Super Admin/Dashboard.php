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
    <title>Dashboard Page</title>
</head>
<body>
    <form>
        
        <table border="1" align="center" size="100%">
            <tr>
            <td colspan ="2">
            <!-- <img width="50" height="40" src="images/logo.png"> -->
             
             <align="right"> Logged in as <?php

                echo $_COOKIE["uname"]
                ?> </align>
           

            </td>
           
            </tr>

            <tr>
            <td >
            <legend>Account</legend>
            <ul>
                <li><a href="Dashboard.php">Dashboard</a></li>
            </ul>
            <ul>
                <li><a href="view_profile.php">View Profile</a></li>
            </ul>
            <ul>
                <li><a href="edit_profile.php">Edit Profile</a></li>
            </ul>
            <ul>
                <li><a href="change_propic.php">Chanage Profile Picture</a></li>
            </ul>
            <ul>
                <li><a href="change_password.html">Change Password</a></li>
            </ul>
            <ul>
                <li><a href="logout.php">Logout</a></li>
            </ul>
			</td>  
			<marquee> <strong>Welcome <?php echo $_COOKIE["uname"]; ?></strong> </marquee>
            <td>
				<div align="center">
					<button type="submit" formaction="managejs.html">Manage Job Seeker</button>
					<br><br>
					<button type="submit" formaction="managejp.html">Manage Job Provider</button>
					<br><br>
					<button type="submit" formaction="bannedLog.html">Banned List</button>
					<button type="submit" formaction="contentEdit.html">Edit Website Content</button>
					<br><br>
					<button type="submit" formaction="bonus.html">Add/Edit Increments</button>
					<br><br><br>
					<button type="submit" formaction="mail.html"><em>WEB MAIL</em></button>

				</div>

			</td>
			
			
        </tr>



        <tr>
            <td colspan="2" align=center>
            <footer>Copyright <span>&#169;</span>2020</footer></td>
        </tr>
        

        </table>
    </form>
    
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