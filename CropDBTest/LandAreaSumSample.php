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
			// echo "<!DOCTYPE html>";
			// echo "<html>";
			// echo "<body>";
			// //echo "<table style = "width:100%">";
			// echo "<tr> <th> Farmer name </th> <th> Crop </th> Land measure </th> </tr><br>";
			// echo "</table>";
			// echo "</body>";
			// echo "</html>";
	if($result->num_rows > 0){
		
			
		while($row = $result->fetch_assoc()){
			echo "<strong> Farmer Name: </strong>" , $row["username"], "<br>",
				"<strong> Crop Name: </strong>" , $row["usercrop"], "<br>",	
				"<strong> Land Area: </strong>" , $row["landarea"], "<br>" , "<br>";
				
			
			// echo "<html>";
			// echo "<body>";
			// echo "<<table style = "width:100%">>";
			// echo "<tr> <th> Farmer name </th> <th> Crop </th> Land measure </th> </tr>";
			//echo "<tr> <td>", $row['username'] ,"</td> <td> ",$row['usercrop']," </td> ",$row['landarea']," </td> </tr> <br>";
			// echo "</table>";
			// echo "</body>"
			// echo "</html>";
		}
			
		
	} else{
		echo "0 results";
	}
			
	$sqlSumOf = "select sum(landarea) from userdetails";
	$sumResult = $conn->query($sqlSumOf);
	
	if($sumResult->num_rows > 0){
		while($row = $sumResult->fetch_assoc()){
			echo "sum of land area: " , $row["sum(landarea)"], "<br>";
		}
	} else{
		echo "0 results";
	}
	
	
	
	echo "<br/><br/> <a href = \"index2.php\"> Go back </a>";
	
	$conn->close();
?>