<?php 
	include "header.php";

 	include('session.php');

?>

    <div class="w3layouts-partners">

	    <center>
	      	<div class="container">

				<h3>Welcome <?php echo $_SESSION['f_name']; ?></h3>     

				<div class="main_containt">
					<h2>Select a function</h2>
					<br>
					<div class="col-sm-6 col-md-offset-3">
		        	
			        	<a href="withdraw_form.php">
			        		<button class="btn btn-primary btn-lg btn-block">Withdraw Cash</button>
		        		</a>
		        		
		        		<br><br>
		        		<a href="paybill_form.php">
							<button class="btn btn-primary btn-lg btn-block col-sm-5">Pay a bill</button>
						</a>
						
					</div>
		        </div>

	      	</div>
	  	</center>

    </div>

<?php //include "footer.php" ?>


