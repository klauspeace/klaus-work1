 <?php
 	ini_set('display_errors','Off');
	$host="localhost";
	//$user="root";
	$user="root";
	//$pwd="";
	$pwd="";
	//$database="rest.sql";

	$database="rest";

	$link = mysqli_connect($host,$user,$pwd, $database);


?>
