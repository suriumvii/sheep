<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
 
 
<title> Add || Update details </title>
</head>
<body>

<h1> <strong> Enter farmer details </strong> <hr/> </h1>
 
<form  action="input.php" method="POST">
<label>Name</label>
<input type="text" name="farmerName" />
<br />
<label>Crop name</label>
<input type="text" name="cropName" />
<br />
<label>Land area</label>
<input type="text" name="landArea" />

<br />
<input type="submit" name = "submitDetails" value="addFarmer">
</form>
 
<br/><br/>
 
<h2> <strong> Update farmer crop </strong> <hr/> </h2>
 
<form  action="updateCrop.php" method="POST">
<label>Name</label>
<input type="text" name="farmerName" />
<br />
<label>Crop name</label>
<input type="text" name="cropName" />
<br />
<input type="submit" name = "submitDetails" value="updateCrop">
</form>
 
 <br/><br/>
 
 <h2> <strong> Update farmer land area </strong> <hr/> </h2>
 <form  action="updateLand.php" method="POST">
<label>Name</label>
<input type="text" name="farmerName" />
<br />
<label>Land area</label>
<input type="text" name="landArea" />
<br />
<input type="submit" name = "submitDetails" value="updateLand">
</form>

 <br/><br/>
 
 <a href = LandAreaSumSample.php> View enlisted farmers details </a>
 
 <div>
	<br/> <br/> Copyright &copy; 2017 SuriumVII
</div>
</body>

</html>