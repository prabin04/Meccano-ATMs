<?php 
    include "header.php";

?>

    <div class="w3layouts-partners">

      	<div class="container">

			<h3>Pay a Bill</h3>     

			<div class="col-md-offset-4 main_containt">
				<h2>Review the detail before pay</h2>
				<br>

				<form class="form-horizontal" action="paybill_db.php" method="post">
                    <div class="form-group">
                        <label for="Account number" class="col-sm-2 control-label">Accout Number</label>
                        <div class="col-sm-10">
                            123456789
                            <input type="hidden" name="p_acn" value="123456789" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="KID" class="col-sm-2 control-label">KID</label>
                        <div class="col-sm-10">
                            123456
                            <input type="hidden" name="p_kid" value="123456" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Amount" class="col-sm-2 control-label">Amount</label>
                        <div class="col-sm-10">
                            500
                            <input type="hidden" name="p_amount" value="500" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Amount" class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <a href="user_home.php"><input type="button" class="btn btn-primary btn-lg" value="Cancel"></a>
        					<input type="submit" class="btn btn-primary btn-lg" value="Confirm">
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


