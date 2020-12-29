<!DOCTYPE html>
<html>
<head>
	<title>delete contact detail</title>
</head>
<body>
		<table cellpadding="2" cellspacing="2" width="1000px" height="20px"  style="margin:auto">
		<th>
			<td><a href="index.php">ADD USER</a></td>
			<td><a href="view.php">VIEW</a></td>
			<td><a href="update.php">UPDATE</a></td>
			<td><a href="delete.php"> DELETE</a></td>
			<td><a href="download.php">DOWNLOAD</a></td>
		</th>
	</table>
	<form method="post">
		<label for="cellno">enter the cell no</label>
		<input type="number" name="cellno" placeholder="phone number"><br>
		<label for="cell"> search the cell no</label>
		<select name="cell" required="required">
			<option>
				<?php
				$cn=mysqli_connect("localhost","root","","week3");
				$s="select cell from contact_detail";
				$result=mysqli_query($cn,$s);
				$r=mysqli_num_rows($result);
				while ($data=mysqli_fetch_array($result)) {
					echo "<option value=$data[0]>$data[0]</option>";
				}
				?>
			</option>
		</select>
		<input type="submit" name="submit"><br>
	</form>

</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		$cell1=$_POST['cellno'];
		$cell2=$_POST['cell'];
		$cn=mysqli_connect("localhost","root","","week3");
		$s="DELETE FROM contact_detail WHERE cell ='$cell1' OR cell = '$cell2' ";
		$result=mysqli_query($cn,$s);
		if ($result) {
			echo "deleted successsfully";
		}
	}
?>