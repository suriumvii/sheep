<?php
    //$myPDO = new PDO('mysql:host=localhost;dbname=farmtest', 'root', 'surium');
	$servername = "localhost";
	$username = "root";
	$password = "surium";
	$dbname = "farmtest";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if($conn->connect_error){
		die("Connection failed" . $conn->$connect_error);
	}
	
	$sql = "SELECT username, usercrop, landarea from userdetails";
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			echo "farmer name: " . $row["username"].
				"crop name: " . $row["usercrop"].
				"land area: " . $row["landarea"]. "<br>";
		}
	} else{
		echo "0 results";
	}
	
	$sqlSumOf = "select sum(landarea) from userdetails";
	$sumResult = $conn->query($sqlSumOf);
	
	if($sumResult->num_rows > 0){
		while($row = $sumResult->fetch_assoc()){
			echo "sum of land area: " . $row["sum(landarea)"]. "<br>";
		}
	} else{
		echo "0 results";
	}
	
	
	$conn->close();
?>