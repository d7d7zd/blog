<?php
$pin = $_POST['pin'];
if($pin == '606'){
	session_start();
	$_SESSION['pin']=$pin;
	header("location:../add.php");
} else header("location:../index.php");

?>