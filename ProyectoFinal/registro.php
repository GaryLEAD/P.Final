<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','ip_db');

// get the post records
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

// database insert SQL code
$sql = "INSERT INTO registro_db (usuario, email, contra, contra2) VALUES ('$username', '$email', '$password', '$password2')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "<script> alert('datos ingresados correctamente');
    location.href = 'client.html';
    </script>";
}

?>