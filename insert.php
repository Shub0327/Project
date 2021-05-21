<?php
include ("config (1).php");
$result=mysqli_query($mysqli,"SELECT* from record ORDER by sub DESC" );
?>
<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
<form action="function.php" method="POST">
	Subject<input type="text" name="sub"><br>
	Description<input type="text" name="des"><br>
	<input type="submit" name="submit">
</form>
<table border="2">
	<tr>
		<th>sub</th>
		<th>des</th>
	</tr>
<?php
while ($res=mysqli_fetch_array($result)) {
	echo '<tr>';
	echo '<td>'.$res['sub'].'</td>';
		echo '<td>'.$res['des'].'</td>';
		echo  '</tr>';
}
	?>
</table>
</body>
</html>