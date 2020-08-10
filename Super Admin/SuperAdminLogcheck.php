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

				$name = $row['Name'];
				$email = $row['Email'];

				setcookie('STATUS', 'OK', time()+3600, '/');
				setcookie('uname', $username, time()+3600, '/');
				//setcookie('password', $password, time()+3600, '/');

				// storing name and emails from database to cookie
				setcookie('name', $name, time()+3600, '/');
				setcookie('email', $email, time()+3600, '/');

				// storing login log inside text file
				$file = fopen('SuperAdminUserLog.txt', 'a');
                $SuperAdmin = $username."|".$password."|".date("l jS \of F Y h:i:s A")."\n";
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
		
	}




?>