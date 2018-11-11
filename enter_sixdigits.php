<?php 
    include "header.php";
    $error="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_start(); 
        include "config.php";
        $sixdigit = $_POST['sixdigit'];
        $user_id = $_GET['id'];

        $sql = "SELECT u_id, f_name FROM `user_info` WHERE u_id = ".$user_id." AND six_digits = '".$sixdigit."'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);

        if($row != null){
            $_SESSION['f_name'] = $row['f_name'];
            $_SESSION['u_id'] = $user_id;
            header('location: user_home.php');

        }else{
            $error = "Invalid code";
        }
    }

    //update user info table
?>

    <div class="w3layouts-partners">

    <h3>Enter Six Digits code</h3>

      	<div class="container">
        	
        	<div class="col-md-offset-4 main_containt">
                <form class="form-horizontal" method="post">
            		<input type="input" class="atm_input" required="required" name="sixdigit" placeholder="Six Digit Code">	<br>
                    <span class="error_message"> <?php echo $error; ?></span>
                    <br><br>

            		<a href="logout.php"><input type="button" class="btn btn-primary btn-lg" value="Cancel"></a>
            		<input type="submit" class="btn btn-primary btn-lg" value="Enter">
                </form>
        	</div>

      	</div>

    </div>

<?php //include "footer.php" ?>
