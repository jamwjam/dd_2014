<?php

    $mysql_host = "127.0.0.1"; 
    $mysql_database = "Daemon"; 
    $mysql_user = "root"; 
    $mysql_password = "root"; 

    // Create connection 
    $con = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database); 
	$success = false;

	// Check connection 
    if (mysqli_connect_errno($con)) 
    { 
        echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
    } 
	else 
    {
        $success = true;
        
        //Check if previous migration succeeded
        if ($success)
        {
            $success = false;
            $sql = "CREATE TABLE users 
                (
                id INT NOT NULL AUTO_INCREMENT, 
                PRIMARY KEY(id),
                email VARCHAR(100),
                username VARCHAR(100),
                password VARCHAR(100)
                )";
            if (mysqli_query($con,$sql)) {
              echo "Table users created successfully";
                $success = true;
            } else {
              echo "Error creating table: " . mysqli_error($con);
            }
        }
        
        //close connection
        mysql_close($con);
    }



	
?>