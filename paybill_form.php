<?php 
    include "header.php";
    include "db_connect.php";
 ?>

    <div class="w3layouts-partners">

      	<div class="container">

			<h3>Pay a Bill</h3>     

			<div class="col-md-offset-3 main_containt">
				<h2>Enter detial to pay a bill.</h2>
				<br>

				<form class="form-horizontal" action="review_pay.php" method="post">
                    <div class="form-group">
                        <label for="Amount" class="col-sm-2 control-label">Accout Number</label>
                        <div class="col-sm-10">
                            <input type="input" class="form-control atm_input" placeholder="Amount" required="required" name="p_acn"/>
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


