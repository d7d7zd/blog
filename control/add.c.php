<?php
require_once "../lib/mysql.php";
$title = $_POST['title'];
$content = $_POST['content'];
if($title==null || $content==null){
	//return header("location:../index.php");
	echo 'lost';
}else{
	insert('article', $_POST);
	return header("location:../index.php");	
}
?>