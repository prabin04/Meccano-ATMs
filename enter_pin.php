<?php include "header.php";
session_start(); ?>

<?php $con=mysqli_connect("localhost","root","","meccano");

if($_SERVER["REQUEST_METHOD"] == "POST"){

     // To check entered username and password are matching with the data saved in `users` table
 $pin = $_POST['pin'];
 $sql = mysqli_query($con, "SELECT * FROM user_info WHERE pin = '".$_POST['pin']."' ");
 $row = mysqli_num_rows($sql);
 $res = mysqli_fetch_assoc($sql);
 $username = $res['f_name'];

  if($row==1) { //if matching data exist
    $_SESSION['f_name'] = $username;

  header('location: user_home.php');

  
  } else {
  echo "Incorrect Pin. Please go back and try again.";  
  }
 
}
?>

    <div class="w3layouts-partners">

    <h3>Enter You Pin Number</h3>

      	<div class="container">
        	
        	<form method="POST"  class="col-md-offset-5 main_containt">

        		<input type="password" name="pin" />

        		<a href="index.php"><input type="button" class="btn btn-primary btn-lg" value="Cancel"></a>
        		<input type="submit" class="btn btn-primary btn-lg" value="Enter">

        	</form>

      	</div>

    </div>

<style>
	.pin_input{
		height: 60px;
		width: 60px;
		text-align: center;
		font-size: 2em;
		border: 2px solid #000;
	}
</style>

<?php include "footer.php" ?>