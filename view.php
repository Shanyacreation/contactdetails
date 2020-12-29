<!DOCTYPE html>
<html>
<head>
	<title></title>
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
 	<table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >   
 	<tr style="background-color:bisque" align="center" class="bold">            
        <td class="bold" style="color:red"  >FIRSTNAME</td>
        <td align="center">LASTNAME</td>
        <td align="center">CELL</td>
        <td align="center">ADDRESS</td>
    </tr>
<?php
$cn=mysqli_connect("localhost","root","","week3");
$s="select * from contact_detail";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		echo"<tr><td  style=' padding-left:50px'>$data[0]</td><td  style=' padding-left:10px'>$data[1]</td><td  style=' padding-left:20px'>$data[2]</td><td  style=' padding-left:30px'>$data[3]</tr>";
	}
	mysqli_close($cn);
?>

	</table>
</form>

</body>
</html>