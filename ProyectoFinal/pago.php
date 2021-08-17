<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','ip_db');

// get the post records
$NameOnCard = $_POST['NameOnCard'];
$CreditCardNumber = $_POST['CreditCardNumber'];
$ExpiryDate = $_POST['ExpiryDate'];
$SecurityCode = $_POST['SecurityCode'];
$ZIPCode = $_POST['ZIPCode'];

// database insert SQL code
$insrt = "INSERT INTO pago_tbl (nombre_tarjeta, numero_tarjeta, exp_date, cvc, codigo_postal) VALUES ('$NameOnCard', '$CreditCardNumber', '$ExpiryDate', '$SecurityCode', '$ZIPCode')";

// insert in database 
$rs = mysqli_query($con, $insrt);

if($rs)
{
	echo "<script> alert('compra realizada correctamente');
    location.href = 'servicios.html';
    </script>";
}

?>