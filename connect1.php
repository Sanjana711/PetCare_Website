<?php
     include('conn.php');
     $username = $_POST['username'];
     $password = $_POST['password'];
    if( $conn->query("select * from registration where username = '$username' and password = '$password' ")){
    			
 			header('location:PET.html');
      }
	else{
		echo'Invalid';
	}
?>