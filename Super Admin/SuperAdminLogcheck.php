<?php
    
    include("connection.php");
    session_start();
	
	if(isset($_POST['submit'])){

		$username = $_POST['uname'];
		$password = $_POST['password'];

		if(empty($username) || empty($password) ){
            header('location: SuperAdminLogin.php?msg=All fields are required');
		}else{
			
			$sql = "select * from superadminlogin where username='".$username."' and password='".$password."'";
			
			$result = mysqli_query($connection, $sql);
			$row = mysqli_fetch_assoc($result);

			if(count($row) > 0){

				setcookie('STATUS', 'OK', time()+3600, '/');
				setcookie('uname', $username, time()+3600, '/');
				setcookie('password', $password, time()+3600, '/');
				

				//header('location: dashboard.php');
				
				$file = fopen('SuperAdminUserLog.txt', 'a');
                $SuperAdmin = $username."|".$password."|"."\n";
                fwrite($file, $SuperAdmin);
				fclose($file);

				//echo "WELCOME";
				
				header('location: Dashboard.php');
			}else{
				header('location: SuperAdminLogin.php?msg=invalid username or password');
			}
		}	

	}else{
		echo "invalid request";
		//header('location: login.php');
	}




?>