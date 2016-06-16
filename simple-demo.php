<?php

	$servername = "localhost"; //chnage your servername name here
	$username = "root";// change  yor database username name here
	$password = "";// change your database password name here
	$dbname = "missdial";//change your database name here
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$number = isset($_REQUEST['number']) ? $_REQUEST['number'] : ''; //get number from query string
	$datetime = isset($_REQUEST['datetime']) ? $_REQUEST['datetime'] : '';//get datetime from query string
	$circle = isset($_REQUEST['circle']) ? $_REQUEST['circle'] : '';//get user area from query string
	$operator = isset($_REQUEST['operator']) ? $_REQUEST['operator'] : '';// get operator from query string
	$ndnd = isset($_REQUEST['ndnd']) ? $_REQUEST['ndnd'] : '';// get dnd/ndnd from query string
	$prefix = isset($_REQUEST['prefix']) ? $_REQUEST['prefix'] : '';
	
	
	include_once('classes/missdial.php');
	
	$missdial = new Missdial($number,$datetime,$circle,$operator,$ndnd,$prefix);
	$sql = sprintf("INSERT INTO missdial(number, datetime,circle,operator,ndnd,prefix)
          VALUES ('%s','%s','%s','%s','%s','%s')",$missdial->getnumber(), $missdial->getdatetime(), $missdial->getcircle(), $missdial->getoperator(), $missdial->getndnd(), $missdial->getprefix());

		  echo $sql;
		  // echo $sql;
		  
		  
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
?>