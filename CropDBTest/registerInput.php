<?PHP

	$servername = "localhost";
	$username = "root";
	$password = "surium";
	$dbname = "UserInputDB";

	$conn = new mysqli($servername, $username, $password, $dbname);
		
	if($conn->connect_error){
		die("Connection failed" . $conn->$connect_error);
	}
	
	if(isset($_POST['submit'])){
		$usernameInput = $_POST['uniqueUsrnm'];
		$userpass = $_POST['password'];
		$userpassRpt = $_POST['passwordRpt'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$sex = $_POST['sex'];
		$date = $_POST['date'];
		
		//check if username is available
		if(!isAvailable($usernameInput, $conn)){
			echo "username unavailable";
			return;
		}
		//check if password is mismatched
		if(!matchPassword($userpass, $userpassRpt)){
			echo "password mismatch";
			return;
		}
		//check if all fields were filled up 
		foreach($_POST as $key=>$value){
			if($value == null){
				echo "missing data <br>";
				return;
			}
		}
		
		$command = "insert into registrytable(uniqueUsrnm, userPassword, firstName, lastName, sex, birthdate)
					values('$usernameInput', '$userpass', '$firstName', '$lastName', '$sex', '$date')";
		$result = $conn->query($command);
		
		
		echo "<strong>Registered successfully!</strong> <br> <a href = \"register.php\"> Go back </a> <br>";

		
	}
	
	
	//returns false if password input is mismatched
	function matchPassword($pw1, $pw2){
		if($pw1 == $pw2)
			return true;
		return false;
	}
	//returns false if username is already taken
	function isAvailable($input, $instance){
		$command = "select * from registrytable where uniqueUsrnm = '$input'";
		$result = $instance->query($command);
		if($result->num_rows >0)
			return false;
		return true;
	}

	$conn->close();

?>