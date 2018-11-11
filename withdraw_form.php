<?php 
    include "header.php";
    include "session.php";

    $error_message ="";
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        include('config.php');

        $user_id = $_SESSION['u_id'];


        // get the user balance
        $sql = "SELECT account_info.balance FROM `user_info` INNER JOIN account_info ON user_info.u_id=account_info.user_id WHERE user_info.u_id = ".$user_id;
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);

        $balance = $row['balance'];

        // check the limit to total withdraw amount in a day
        $date = date('Y-m-d');
        $limit = 9000;

        $sql1 = "SELECT SUM(amount) as total_withdraw FROM withdraw where date = '". $date."'";
        $result1 = mysqli_query($con, $sql1);
        $sum = mysqli_fetch_assoc($result1);
        $sum['total_withdraw']; // total withdraw in a day

        $withdraw_amount = $_POST['withdraw_amount'];

        // total withdraw in a day including current withdraw amount
        $total_amount = $sum['total_withdraw'] + $withdraw_amount;

        if($withdraw_amount >= $balance){
            $error_message = "Amount is greater than the actual balance";
        }elseif($withdraw_amount > $limit){
            $error_message = 'Withdraw amount limit has exceeded.';
        }elseif($total_amount > $limit){
            $error_message = 'Withdraw amount limit has exceeded for a day.';
        }else{
            $_SESSION['withdraw_amount'] = $withdraw_amount;
            $_SESSION['balance'] = $balance;
            header('location: confirm.php');

        }
    }
?>

    <div class="w3layouts-partners">

      	<div class="container">

			<h3>Withdraw</h3>     

			<div class="col-md-offset-3 main_containt">
				<h2>Enter the amount you want to withdraw.</h2>
				<br>

				<form class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="Amount" class="col-sm-2 control-label">Amount</label>
                        <div class="col-sm-10">
                            <input type="input" class="form-control atm_input" placeholder="Amount" required="required" name="withdraw_amount"/>
                            <span class="error_message"> <?php echo $error_message; ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Amount" class="col-sm-2 control-label"></label>
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