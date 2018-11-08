<?php 

	include "db_connect.php"; 

	$phone_no = $_POST['phone_no'];
	$user_id = $_POST['phone_no'];
	$six_digits = $_POST['sixdigit'];

	$sql = "SELECT f_name, u_id FROM `user_info` WHERE uid = ".$user_id."phone = ".$phone_no;
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	echo $user_id = $row['u_id'];


?>