<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
 
 
<title> REGISTER </title>
</head>
<body>

<h1> <strong> REGISTER </strong> <hr/> </h1>
 
<form  action="registerInput.php" method="POST">
<label>Username</label>
<input type="text" name="uniqueUsrnm" />
<br />
<label>Password</label>
<input type="PASSWORD" name="password" />
<br />
<label>Repeat password</label>
<input type="PASSWORD" name="passwordRpt" />
<br />
<label>First name</label>
<input type="text" name="firstName" />
<br />
<label>Last name</label>
<input type="text" name="lastName" />
<br />
<label>Sex</label>
<input type="text" name="sex" />
<br />
<label>Birth date<br>[YYYYMMDD]</label>
<input type="text" name="date" />

<br />
<input type="submit" name = "submit" value="REGISTER">
</form>
 
 <div>
	<br/> <br/> Copyright &copy; 2017 SuriumVII
</div>
</body>

</html>