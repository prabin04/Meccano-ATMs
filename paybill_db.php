<?php
	include "db_connect.php"; 

	$user_id = 1;

	$sql = "SELECT user_info.f_name, account_info.balance FROM `user_info` INNER JOIN account_info ON user_info.u_id=account_info.user_id WHERE user_info.u_id = ".$user_id;
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	$user_name = $row['f_name'];
	$balance = $row['balance'];

	 $pay_account = $_POST['p_acn']; echo "<br>";
	 $pay_kid = $_POST['p_kid']; echo "<br>";
	 $pay_amount = $_POST['p_amount'];
	//exit;

	if($pay_amount >= $balance){
		echo "no payment";
	}elseif($pay_amount > 5000){
		echo 'limit exceded';
	}else{
		$remaining_amount = $balance - $pay_amount;
		$date = date('y-m-d');
		$insert_transaction = "INSERT INTO pay_bill (user_id, account_no, kid, amount, date) VALUES ('$user_id', '$pay_account','$pay_kid', '$pay_amount','$date')";
		//$conn->query($insert_transaction);

		if ($conn->query($insert_transaction) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$update_balance = "UPDATE account_info SET balance= ".$remaining_amount." WHERE user_id=".$user_id;
		$conn->query($update_balance);	

	}


	// echo $_POST['p_acn'];

	// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
	// VALUES ('John', 'Doe', 'john@example.com')";

	// if ($conn->query($sql) === TRUE) {
	//     echo "New record created successfully";
	// } else {
	//     echo "Error: " . $sql . "<br>" . $conn->error;
	// }

?>