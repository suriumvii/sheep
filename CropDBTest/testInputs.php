<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$servername = "localhost";
$username = "root";
$password = "surium";
$dbname = "UserInputDB";
$conn = new mysqli($servername, $username, $password, $dbname);
$hasError = false;


if($conn->connect_error){
	die("Connection failed" . $conn->$connect_error);
}
// define variables and set to empty values
$usrnameErr = $usrpasswordErr = $usrpasswordRPTErr = $emptyfieldErr = $sexErr = $lastNameErr = $firstNameErr = $dateErr = "";
$usrname = $usrpassword = $usrpasswordRPT = $firstName = $lastName = $sex = $date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['uniqueUsrnm'])) {
    $usrnameErr = "Username is required";
	//return;
  } else {
    $usrname = test_input($_POST['uniqueUsrnm']);
    if(!isAvailable($usrname, $conn)){
		$usrnameErr = "Username already taken";
		$hasError = true;
	}
  }
  
  if (empty($_POST['password'])) {
    $usrpasswordErr = "password required";
	$hasError = true;
  } else {
    $usrpassword = test_input($_POST['password']);
  }
// check mismatched password input-----------------
  if (empty($_POST['passwordRPT'])) {
    $usrpasswordRPTErr= "Password mismatched";
	$hasError = true;
  } else {
    $usrpasswordRPT = test_input($_POST['passwordRPT']);
    // check if password matched
    if ($usrpassword != $usrpasswordRPT) {
      $usrpasswordRPTErr = "Password mismatched"; 
    }
  }
//-------------------------------------------------
  if (empty($_POST['firstName'])) {
    $firstNameErr = "Required field";
	$hasError = true;
  } else {
    $firstName = test_input($_POST['firstName']);
	if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
		$firstNameErr = "Only letters and white space allowed"; 
		$hasError = true;
    }
  }
  
  if (empty($_POST['lastName'])) {
    $lastNameErr = "Required field";
	$hasError = true;
  } else {
    $lastName = test_input($_POST['lastName']);
	if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
		$lastNameErr = "Only letters and white space allowed";
		$hasError = true;
    }
  }
  if (empty($_POST['sex'])) {
    $sexErr = "Gender is required";
	$hasError = true;
  } else {
    $sex = test_input($_POST['sex']);
  }
  
  if (empty($_POST['date'])) {
    $dateErr = "Birthdate required";
	$hasError = true;
  } else {
    $date = test_input($_POST['date']);
	if(!checkDateFormat($date)){
		$hasError = true;
		$dateErr = "Invalid date format";
	}
  }
  
  // do not register if input has errors----------
  if($hasError)
	echo "errors";
  else{
	$command = "insert into registrytable(uniqueUsrnm, userPassword, firstName, lastName, sex, birthdate)
				values('$usrname', '$usrpassword', '$firstName', '$lastName', '$sex', '$date')";
	$result = $conn->query($command);
		
		
	echo "<strong>Registered successfully!</strong> <br> ";//<a href = \"register.php\"> Go back </a> <br>";

		
	  
  }
  
  //-----------------------------
}

// this thing ;-;
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//returns false if date format is invalid
function checkDateFormat($dateInput){
	$d = DateTime::createFromFormat('Y-m-d', $dateInput);
	return $d && $d->format('Y-m-d') === $dateInput;
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

<h2>Register Example</h2>
<p><span class="error">* Required Field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <label>Username</label> <br> <input type="text" name="uniqueUsrnm" value="<?php echo $usrname;?>">
  <span class="error">* <?php echo $usrnameErr;?></span>
  <br><br>
  <label>Password</label> <br> <input type="password" name="password" value="<?php echo $usrpassword;?>">
  <span class="error">* <?php echo $usrpasswordErr;?></span>
  <br><br>
  <label>Repeat password</label> <br> <input type="password" name="passwordRPT" value="<?php echo $usrpasswordRPT;?>">
  <span class="error"><?php echo $usrpasswordRPTErr;?></span>
  <br><br>
  <label>First name</label> <br> <input type="text" name = "firstName" value = "<?php echo $firstName;?>">
  <span class="error">*<?php echo $firstNameErr;?></span>
  <br><br>
  <label>Last name</label> <br> <input type="text" name = "lastName" value = "<?php echo $lastName;?>">
  <span class="error">*<?php echo $lastNameErr;?></span>
  <br><br>
  <label>Birth date <br> [YYYY-MM-DD]</label> <br> <input type="text" name = "date" value = "<?php echo $date;?>">
  <span class="error">*<?php echo $dateErr;?></span>
  <br><br>
  <label>Sex</label> <br>
  <input type="radio" name="sex" <?php if (isset($sex) && $sex=="female") echo "checked";?> value="f">Female
  <input type="radio" name="sex" <?php if (isset($sex) && $sex=="male") echo "checked";?> value="m">Male
  <span class="error">* <?php echo $sexErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
// echo "<div>
	// <br/> <br/> Copyright &copy; 2017 SuriumVII
	// </div>";
// echo $name;
// echo "<br>";
// echo $email;
// echo "<br>";
// echo $website;
// echo "<br>";
// echo $comment;
// echo "<br>";
// echo $gender;
?>
<div>
	<br/> <br/> Copyright &copy; 2017 SuriumVII
</div>
</body>
</html>