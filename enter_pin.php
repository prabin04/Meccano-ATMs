<?php 
    include "header.php";
    session_start(); 

    include "config.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

         // To check entered username and password are matching with the data saved in `users` table
        $pin = $_POST['pin'];
        $sql = mysqli_query($con, "SELECT * FROM user_info WHERE pin = '".$_POST['pin']."' ");
        $row = mysqli_num_rows($sql);
        $res = mysqli_fetch_assoc($sql);
        $username = $res['f_name'];
        $u_id = $res['u_id'];

        if($row==1) { //if matching data exist
            $_SESSION['f_name'] = $username;
            $_SESSION['u_id'] = $u_id;
            header('location: user_home.php');
        } else {
            echo "Incorrect Pin. Please go back and try again."; 
            exit; 
        }
    }
 ?>

    <div class="w3layouts-partners">

    <h3>Enter You Pin Number</h3>
        <center>
      	<div class="container">
        	
            <form method="post">
            	<div class="main_containt">

            		<input type="password" class="pin_input" maxlength="4" size="4" name="pin" >	
                    <br><br>

            		<a href="index.php">
                        <input type="button" class="btn btn-primary btn-lg" value="Cancel">
                    </a>
            		<input type="submit" class="btn btn-primary btn-lg" value="Enter">

            	</div>
            </form>

      	</div>
        </center>

    </div>
<?php //include "footer.php" ?>
