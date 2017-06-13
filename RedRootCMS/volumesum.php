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
	
	if(isset($_POST['month']))
	{
		$iMonth = $_POST['month'];
		$sumCommand = "select sum(estimatedVolume) from landareadetails where monthname(harvestDate) = '$iMonth'";
	}
	else{
		$sumCommand = "select sum(estimatedVolume) from landareadetails";
	}
	$sum = $conn->query($sumCommand);
	if($sum->num_rows > 0){
		while($row = $sum->fetch_assoc()){
			$totalSum = $row["sum(estimatedVolume)"];
			if($totalSum == null)
				echo "No harvest";
			else 
				echo "$totalSum tons";
		}
	} else{
		echo "0 results";
	}
	
	echo '<br><br><a href = index.php>
		<button type="button"> 
			GO BACK
		</button>
		</a>';
	$conn->close();

?>