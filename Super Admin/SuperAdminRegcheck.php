<?php

    include("connection.php");
    session_start();
    


    if(isset($_POST['submit']))
    {

        // if(!$connection)
        // {
        //     echo "Could not connect to the server";
        // }

        $Name = $_POST['name'];
        $username = $_POST['uname'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        if(empty($Name) || empty($username) || empty($password) || empty($email)){

            header("location:SuperAdminRegistration.php?msg=All fields are required");
            
        }
        else{

            $sql = "INSERT INTO superadminlogin VALUES ('$Name' ,'$username','$password','$email')";
    
            $data = mysqli_query($connection, $sql);
            
            if($data)
            {
                setcookie('name', $Name, time()+3600, '/');
                setcookie('uname', $username, time()+3600, '/');
                setcookie('password', $password, time()+3600, '/');
                setcookie('email', $email, time()+3600, '/');

                $time = date("h:i:sa");


                $file = fopen('SuperAdminUser.txt', 'a');
                $SuperAdmin = $Name."|".$username."|".$password."|".$email."|".date("d/m/Y").",".$time."\n";
                fwrite($file, $SuperAdmin);
                fclose($file);
               
                echo "Super Admin registration Successful!";

            }
            else
            {
                echo "Error while registering";
          
            }
    
            header("refresh:2; url=SuperAdminLogin.php");
    
         }

        }
    else 
    {
        echo "Failed";
    }


?>