 <?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);


	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";

	// select db
	$db_selected = mysqli_select_db($conn, 'meccano');
	if (!$db_selected) {
	    die ('Can\'t use foo : ' . mysql_error());
	}
	//mysql_select_db('meccano',$conn);
	
	function redirect($url, $statusCode = 303)
	{
	   header('Location: ' . $url, true, $statusCode);
	   die();
	}
?> 