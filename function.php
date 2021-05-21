<?php

include ("config (1).php");
if(isset($_POST['submit']))
{
	$sub=$_POST['sub'];
	$desc=$_POST['des'];
$result=conn_query($mysqli,"INSERT into record values('$sub','$des')");
if($result)

{
	header("location:insert.php");
}
else
{
	echo "Failed";
}
}
?>