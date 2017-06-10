<?php
    //$myPDO = new PDO('mysql:host=localhost;dbname=farmtest', 'root', 'surium');
	$servername = "localhost";
	$username = "root";
	$password = "surium";
	$dbname = "userinputdb";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if($conn->connect_error){
		die("Connection failed" . $conn->$connect_error);
	}
	
	if(isset($_POST['Luzon'])){
		$sql = $sql = "SELECT username, usercrop, landarea, region from landareadetails where region = 'luzon'";
	}else if(isset($_POST['Visayas'])){
		$sql = $sql = "SELECT username, usercrop, landarea, region from landareadetails where region = 'visayas'";
	}else if(isset($_POST['Mindanao'])){
		$sql = $sql = "SELECT username, usercrop, landarea, region from landareadetails where region = 'mindanao'";
	}
	else{
		$sql = "SELECT username, usercrop, landarea, region from landareadetails";
	}
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		
			
		while($row = $result->fetch_assoc()){
			echo "<strong> Farmer Name: </strong>" , $row["username"], "<br>",
				"<strong> Crop Name: </strong>" , $row["usercrop"], "<br>",
				"<strong> Land Area: </strong>" , $row["landarea"], "<br>",
				"<strong> Region: </strong>" , $row["region"], "<br>" , "<br>";
		}
			
		
	} else{
		echo "0 results";
	}
	
	//command if all land 
	if(isset($_POST['Luzon'])){
		$sqlSumOf = "select sum(landarea) from landareadetails where region = 'luzon'";
	}else if(isset($_POST['Visayas'])){
		$sqlSumOf = "select sum(landarea) from landareadetails where region = 'visayas'";
	}else if(isset($_POST['Mindanao'])){
		$sqlSumOf = "select sum(landarea) from landareadetails where region = 'mindanao'";
	}
	else{
		$sqlSumOf = "select sum(landarea) from landareadetails";
	}
	$sumResult = $conn->query($sqlSumOf);
	
	if($sumResult->num_rows > 0){
		while($row = $sumResult->fetch_assoc()){
			echo "sum of land area: " , $row["sum(landarea)"], "<br>";
		}
	} else{
		echo "0 results";
	}
	
	echo '<a href = index.php>
		<button type="button" class="btn btn-primary">
			GO BACK
		</button>
		</a>';
	
	
	$conn->close();
?>