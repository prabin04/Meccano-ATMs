<?php 
  include "header.php";
  include "session.php";
  
  $withdraw_amount = $_SESSION['withdraw_amount'];
?>

    <div class="w3layouts-partners">

      	<div class="container">

  			  <h3>Withdraw</h3>     
          <center>
  			  <div class=" main_containt">
    				<h2>Are you sure you want to withdraw <?php echo $withdraw_amount ?> NOK?</h2>
    				<br>

    				<a href="user_home.php"><input type="button" class="btn btn-primary btn-lg" value="Cancel"></a>
            <a href="withdraw_db.php"><input type="button" class="btn btn-primary btn-lg" value="Yes"></a>
          </div>
          </center>
    	  </div>

    </div>

<?php //include "footer.php" ?>


