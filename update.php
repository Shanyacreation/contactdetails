<!DOCTYPE html>
<html>
<head>
	<title>update contact </title>
</head>
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
	<form method ="post" action="#">
		<table border="1" align="center" width="800" height="150px">
			<tr><td colspan="5" align="center" class="toptd">Update contact details</td></tr>
			<tr><td colspan="1">&nbsp;</td>
				<td colspan="1">Select phone no </td>
				<td><select name="s2"><option value="">Select</option>
				<?php
				$cn=mysqli_connect("localhost","root","","week3");
				$s="select cell from contact_detail";
					$result=mysqli_query($cn,$s);
					$r=mysqli_num_rows($result);
					//echo $r;
					while($data=mysqli_fetch_array($result))
					{
						#echo "<option value=$data[0]>$data[0]</option>";	
					if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
					{
						echo "<option value=$data[0] selected>$data[0]</option>";
					}
					else
					{
						echo "<option value=$data[0]>$data[0]</option>";
					}
					}
					mysqli_close($cn);

				?>
				</select></td>
				<td><input type="submit" value="Show" name="show" formnovalidate="formnovalidate"></td> 
			</tr>
			<tr>
			<?php
				if(isset($_POST["show"]))
				{
					$phone=$_POST["s2"];
					$cn=mysqli_connect("localhost","root","","week3");
					$s="select * from contact_detail where cell = '$phone'";
						$result=mysqli_query($cn,$s);
						$r=mysqli_num_rows($result);
					while($data=mysqli_fetch_array($result))
					{
						$fname=$data[0];
						$lname=$data[1];
						$cell=$data[2];
						$addres=$data[3];
					}
					#echo"firstname:$fname,$lname,$cell,$addres";
				}
			?>
			</tr>
			<tr>
				<td>
					<label for="fname"> FirstName </label><br>
					<input type="text" name="fname" placeholder="firstname" value="<?php echo @$fname; ?>"><br>
				</td>
				<td>
					<label for="lname">LastName</label><br>
					<input type="text" name="lname" placeholder="lastname" value="<?php echo @$lname; ?>"><br>
				</td>
				<td>
					<label for="cell">Phone Number</label>
					<input type="number" name="cell" placeholder="phone number" value="<?php echo @$cell; ?>"><br>
				</td>
				<td>
					<label for="address">Address</label>
					<input type="text" name="address" placeholder="address" value="<?php echo @$addres; ?>"><br>
				<!--<textarea name="address" id="address" rows="4" placeholder="address" value="<?php echo @$addres; ?>"></textarea><br>-->
				</td>
			</tr>
			<input type="submit" name="submit">
		
	</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{	
	$phone =$_POST["s2"];
	$ffname = $_POST['fname'];
	$llname = $_POST['lname'];
	$cel = $_POST['cell'];
	$addres = $_POST['address'];

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "week3";
	
	$con = new mysqli($hostname,$username,$password,$database);

	if ($con->connect_error) 
	{
  		die("Connection failed: " . $con->connect_error);
	}

	#$sql = "INSERT INTO contact_detail VALUES('$fname','$lname','$cell','$address')";
	$sql = "UPDATE contact_detail set firstname = '$ffname',lastname = '$llname',cell = '$cel',address = '$addres' WHERE cell='$phone'";
	#($conn->multi_query($sql) === TRUE) insert multi querry 

	if ($con->query($sql) === TRUE)
	{
  		echo "contact updated successfully";
  		#echo "$ffname";
  		#echo "$llname"	;
	} 
	else 
	{
  		echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();
}

?>