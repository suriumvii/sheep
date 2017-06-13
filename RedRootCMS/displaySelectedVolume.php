<?PHP 

	$servername = "localhost";
	$dbusername = "root";
	$password = "surium";
	$dbname = "userinputdb";
	$hasError = false;
	$selectionMode = false;
	$conn = new mysqli($servername, $dbusername, $password, $dbname);
	if($conn->connect_error){
		die("Connection failed" . $conn->$connect_error);
	}
	$sumCommand = "select sum(estimatedVolume) from landareadetails where isSelected = 1";
	$sum = $conn->query($sumCommand);
	
	
	
	if($sum->num_rows>0){
		while($row = $sum->fetch_assoc()){
			$totalVolume = $row["sum(estimatedVolume)"];
			if($totalVolume == null)
				echo "DISPLAY";
			else
				echo "$totalVolume tons";
		}
	}
	
	$conn->close();

?>