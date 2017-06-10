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
	
	if(isset($_POST['submitDetails'])){
		
		$farmername = $_POST['farmerName'];
		$farmercrop = $_POST['cropName'];
		$farmerlandmeasure = $_POST['landArea'];
		if($farmername == null || $farmercrop == null || $farmerlandmeasure == null){
			echo "Data insufficient";
			echo "<br> <a href = \"index2.php\"> Go back </a> <br>";
		}else{
			$command = "insert into userdetails(username, usercrop, landarea) 
					values('$farmername', '$farmercrop', '$farmerlandmeasure')";
			$result = $conn->query($command);
		
			echo "<strong>Data received</strong> <br> Farmer $farmername enlisted <br>";
			echo "<a href = \"index2.php\"> Go back </a> <br>";
			echo "<a href = LandAreaSumSample.php> View enlisted farmers details </a>";
		}
				
	}
		
	else{
		$farmername = null;
		$farmercrop = null;
		$farmerlandmeasure = null;
		echo "no data received";
	}
	
	$conn->close();
?>