<?php

	include('session.php');

	include "session.php";
	include('config.php');
	$user_id = $_SESSION['u_id'];
	$balance = $_SESSION['balance'];
	$withdraw_amount = $_SESSION['withdraw_amount'];
	$remaining_amount = $balance - $withdraw_amount;
	$date = date('Y-m-d');

	$insert_transaction = "INSERT INTO withdraw (u_id, amount, date) VALUES ('$user_id','$withdraw_amount','$date')";

	if ($con->query($insert_transaction) === TRUE) {
	  echo "New record created successfully";
	} else {
	  //echo "Error: " . $sql . "<br>" . $con->error;
	}

	$update_balance = "UPDATE account_info SET balance= ".$remaining_amount." WHERE user_id=".$user_id;
	$con->query($update_balance);

	header('location: receipt_withdraw.php');

?>