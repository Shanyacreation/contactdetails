<!DOCTYPE html>
<html>
<head>
	<title>index file</title>
</head>
<style>
	td{
		text-align: center;
	}
</style>
<body>
	<table cellpadding="2" cellspacing="2" width="1000px" height="20px"  style="margin:auto">
		<th>
			<td><a href="index.php">ADD USER</a></td>
			<td><a href="view.php">VIEW</a></td>
			<td><a href="update.php">UPDATE</a></td>
			<td><a href="delete.php"> DELETE</a></td>
			<td><a href="download.html">DOWNLOAD</a></td>
		</th>
	</table>
<form method="POST">
	<table border="1" align="center" width="50%" height="200px">
		<tr>
			<td><label for="fname"> FirstName </label></td>
			<td><input type="text" name="fname" placeholder="firstname" required="required"><br></td>
		</tr>
		<tr>
			<td><label for="lname">LastName</label></td>
			<td><input type="text" name="lname" placeholder="lastname" required="required"><br></td>
		</tr>
		<tr>
			<td><label for="cell">Phone Number</label></td>
			<td><input type="number" name="cell" placeholder="phone number" required="required"><br></td>
		</tr>
		<tr>
			<td><label for="address">Address</label></td>
			<td><textarea name="address" id="address" rows="3" placeholder="address" required="required"></textarea><br></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
	
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$cell = $_POST['cell'];
	$address = $_POST['address'];

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "week3";
	
	$con = new mysqli($hostname,$username,$password,$database);

	if ($con->connect_error) 
	{
  		die("Connection failed: " . $con->connect_error);
	}

	$sql = "INSERT INTO contact_detail VALUES('$fname','$lname','$cell','$address')";
	#($conn->multi_query($sql) === TRUE) insert multi querry 

	if ($con->query($sql) === TRUE)
	{
  		echo "New record created successfully";
	}
	else 
	{
  		echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();
}

?>