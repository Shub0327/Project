<!DOCTYPE html>
<html>
<head>
	<title>addmission</title>
</head>

<?php
include("config.php");
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$mother = $_POST['mother'];
	$aadhar = $_POST['aadhar'];
	$dob = $_POST['dob'];
	$place = $_POST['place'];
	$toungue = $_POST['toungue'];
	$cast = $_POST['cast'];
	$address = $_POST['address'];
	$number = $_POST['number'];
    $mothernum = $_POST['mothernum'];
	$guardian = $_POST['guardian'];	
	$sought = $_POST['sought'];	
	$school = $_POST['school'];	

	$result = mysqli_query($conn,"insert into rec values('','$name','$gender','$mother','$aadhar','$dob','$place','$toungue','$cast','$address','$number','  $mothernum','$guardian','$sought','$school')");
	if($result)
	{

?>
<body>
	<script type="text/javascript">
		alert("Addmission Request Sent...");
	</script>
	<?php  
	header("location:index.html") ?>
</body>
<?php 
 }


		
	
	else{
		echo "failed:";
	}
}
?>


<body>
	<script type="text/javascript">
		alert("Addmission Request Sent...");
	</script>
	<?php 
	header("location:index.html") ?>
</body>

</html>
