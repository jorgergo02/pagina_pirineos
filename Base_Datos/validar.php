<?php
$users=$_POST['users'];
$passwords=$_POST['passwords'];
session_start();
$_SESSION['users']=$users;

include('utilerias.php');

$cs=conecta();

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$query="SELECT * FROM usuario WHERE users='$users' and passwords='$passwords'";
$sql=mysqli_query($cs,$query);
if ($sql == TRUE){
	echo "
    <frameset rows='15%,85%' noresize>
	    <frame name='enca' src='encabezado.html'>
	    <frame name='principal'>
    </frameset> ";
}
else{
	echo("ERROR DE AUTENTIFICACION");
    include("index.html");
}

mysqli_close($cs);
?>