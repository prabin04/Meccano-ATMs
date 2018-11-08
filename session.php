<?php
session_start();	
if(!isset($_SESSION["f_name"])){
	header("Location: index.php");
	exit(); 
}


?>