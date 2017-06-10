<?PHP
	$servername = "localhost";
	$username = "root";
	$password = "surium";
	$dbname = "farmtest";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if($conn->connect_error){
		die("Connection failed" . $conn->$connect_error);
	}

	if(isset($_POST['submitDetails'])){
		
		$farmername = $_POST['farmerName'];
		$farmercrop = $_POST['cropName'];
		
		if($farmername == null || $farmercrop == null){
			echo "Data insufficient";
			echo "<br> <a href = \"index2.php\"> Go back </a> <br>";
		}
		else{
			
			$command = "update userdetails 
					set usercrop = '$farmercrop'
					where username = '$farmername' ";
			$result = $conn->query($command);
		

		
			echo "<strong>Data received</strong> <br> Farmer crop updated
					<br> new crop: $farmercrop <br>";
			echo "<a href = \"index2.php\"> Go back </a> <br>";
			echo "<a href = LandAreaSumSample.php> View enlisted farmers details </a>";
		}
		
	}
?>