<?php 
    include "header.php";
    $error="";
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        session_start(); 
        include "config.php";
        $phone_no = $_POST['phone_no'];

        $sql = "SELECT f_name, u_id FROM `user_info` WHERE phone = ".$phone_no;
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);

        if($row == null){
            $error = "Invalid phone number.";
        }else{
            // $_SESSION['f_name'] = $row['f_name'];
            // $_SESSION['u_id'] = $row['u_id'];

            // random six digit generator
            $six_digit_random_number = mt_rand(100000, 999999);

            // update six digit in database
            $update_six_digits = "UPDATE user_info SET six_digits= '".$six_digit_random_number."' WHERE u_id=".$row['u_id'];
            $con->query($update_six_digits);
            header('location: enter_sixdigits.php?id='.$row['u_id']);
        }
    }
?>

    <div class="w3layouts-partners">

    <h3>Enter You Phone Number</h3>

      	<div class="container">
        	
        	<div class="col-md-offset-4 main_containt">
                <form class="form-horizontal" method="post">
            		<input type="tel" class="atm_input" required="required" name="phone_no" placeholder="Phone Number" pattern="[0-9]{8}">	<br>
                    <span class="error_message"> <?php echo $error; ?></span>
                    <br><br>

            		<a href="logout.php">
                        <input type="button" class="btn btn-primary btn-lg" value="Cancel">
                    </a>
            		<input type="submit" class="btn btn-primary btn-lg" value="Enter">
                </form>
        	</div>

      	</div>

    </div>

<?php //include "footer.php" ?>
