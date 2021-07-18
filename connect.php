<?php
     include('conn.php');
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $conn->query("insert into registration (username,email,password) values ('$username','$email','$password')");
     
     header('location:index.php');
?> 