<?php
$username = $_POST['user'];
$password = $_POST['pass'];


session_start();
$_SESSION['user'] = $username;

$con = mysqli_connect('localhost', 'root', '','ip_db');

$consulta = "SELECT * FROM registro_db WHERE usuario = '$username' and contra = '$password'";
$resultado = mysqli_query($con,$consulta);

$filas = mysqli_num_rows($resultado);

echo $filas;

if($filas){
    echo "<script> alert('BIENVENIDO');
    location.href = 'client.html';
    </script>";
}else{
    echo "<script> alert('USUARIO NO REGISTRADO');
    location.href = 'registro.html';
    </script>";
}
?>

