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
                $_SESSION['status'] = "OK";
                echo "WELCOME";
			}else{
				header('location: SuperAdminLogin.php?msg=invalid username or password');
			}
		}	

	}else{
		echo "invalid request";
		//header('location: login.php');
	}




?>