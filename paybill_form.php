<?php 
    include "header.php";
    include "session.php";

    $error_amount ="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include "config.php"; 

        $user_id = $_SESSION['u_id'];

        $sql = "SELECT account_info.balance FROM `user_info` INNER JOIN account_info ON user_info.u_id=account_info.user_id WHERE user_info.u_id = ".$user_id;
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);

        $balance = $row['balance'];

         $pay_account = $_POST['p_acn']; echo "<br>";
         $pay_kid = $_POST['p_kid']; echo "<br>";
         $pay_amount = $_POST['p_amount'];
        //exit;

        if($pay_amount >= $balance){
            $error_amount = "You do not have sufficient balance to pay the bill.";
        }elseif($pay_amount > 10000){
            $error_amount = 'You can pay a bill amount only up 5000.';
        }else{
            $remaining_amount = $balance - $pay_amount;
            $date = date('y-m-d');
            $insert_transaction = "INSERT INTO pay_bill (user_id, account_no, kid, amount, date) VALUES ('$user_id', '$pay_account','$pay_kid', '$pay_amount','$date')";

            if ($con->query($insert_transaction) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
            $update_balance = "UPDATE account_info SET balance= ".$remaining_amount." WHERE user_id=".$user_id;
            $con->query($update_balance);   
            header('location: receipt.php');
        }
    }
 ?>

    <div class="w3layouts-partners">

      	<div class="container">

			<h3>Pay a Bill</h3>     

			<div class="col-md-offset-3 main_containt">
				<h2>Enter detials to pay a bill.</h2>
				<br>

				<form class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="Amount" class="col-sm-2 control-label">Accout Number</label>
                        <div class="col-sm-10">
                            <input type="input" class="form-control atm_input" placeholder="Account Number" required="required" name="p_acn"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Amount" class="col-sm-2 control-label">KID</label>
                        <div class="col-sm-10">
                            <input type="input" class="form-control atm_input" placeholder="KID" required="required" name="p_kid"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Amount" class="col-sm-2 control-label">Amount</label>
                        <div class="col-sm-10">
                            <input type="input" class="form-control atm_input" placeholder="Amount" required="required" name="p_amount"/>
                            <span class="error_message"> <?php echo $error_amount; ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <a href="user_home.php"><input type="button" class="btn btn-primary btn-lg" value="Cancel"></a>
        					<input type="submit" class="btn btn-primary btn-lg" value="Next">
                        </div>
                    </div>
                    
                </form>
	        </div>

      	</div>

    </div>

    <style type="text/css">
    	.amount_input{

    	}
    </style>

<?php //include "footer.php" ?>


