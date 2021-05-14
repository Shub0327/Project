<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html>
<head>
	<title>Signup-Schoolweb</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet">
</head>
<body>
	<div class="container">
	<div class="row">
		<?php
		if(isset($_POST['signup']))
		{
			extract($_POST);
			if(strlen($fname)<3)
			{
				$error[]= 'please enter first name using 3 character atleast';
			}
			if(strlen($fname)>20){ // Max
$error[]='First Name:Max length 20 char Not allowed';
		}
		if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/",$fname)){
		$error[]='Invalid Entry First Name.Please Enter Letters Without any digit or special symbol like(
		1,2,#,$,%,&,*,!,~,`,^,-,)';
	}
	if(strlen($lname)<3)
			{
				$error[]= 'please enter Last name using 3 character atleast';
			}
			if(strlen($lname)>20){ // Max
$error[]='Last Name:Max length 20 char Not allowed';
		}
		if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/",$fname)){
		$error[]='Invalid Entry last Name.Please Enter Letters Without any digit or special symbol like(
		1,2,#,$,%,&,*,!,~,`,^,-,)';
	}
	if(strlen($email)>50){
	$error[]='Email: Max lentgh 50 char not allowed'; 
}
	if($passwordConfirm ==''){
	$error[]='please confirm the password.';
}
	if($password !=$passwordConfirm){
	$error[]='Password do not match.';

}
	if(strlen($password)<5 ){ //min
	$error[]='the password in 6 character long.';
		}

if(strlen($password)>20){ //max
$error[]='Password: Max Length 20 Character Not allowed.';
	}

$sql="select * from users where (username='$username' or 
email='$email');";
$res=mysqli_query($dbc,$sql);
if(mysqli_num_rows($res)>0){
	$row=mysqli_fetch_assoc($res);
	if($username==$row['username'])
	{
		$error[]='username already exist.';
	}
	if($email==$row['email'])
	{
		$error[]='email already exist.';
	}
	}
if(!isset($error)){
	$date=date('Y-m-d');
	$options= array("cost"=>4);
	$password= password_hash($password,PASSWORD_BCRYPT,$options);
	
	$result = mysqli_query($dbc,"INSERT into users
	values('','$fname','$lname','$username','$email','$password','$date')");
	if($result)
	{
		$done=2;
	}
	else{
	$error[]='Failed : Something went Wrong';
}
}
}
?>

		<div class="col-sm-4">
			<?php
			if(isset($error))
{
	foreach($error as $error)
	{
		echo '<p class="errmsg">&#x26A0;'.$error.'</p>';
	}
}
?>
	</div>
		<div class="col-sm-4">
			<?php if(isset($done))
			{ ?>

<div class="successmsg"> <span style="font-size: 100px;">&#9989;</span>
	<br> You have registered successfully .<br> <a href="login.php" style="color:red;">Login Here.......</a></div>
	<?php } else { ?>
			
			<div class="signup_form">
			<form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name </label>
    <input type="text" class="form-control" name="fname" value="<?php if(isset($error)){echo $fname;}?>" required="" >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Last Name</label>
    <input type="text" class="form-control"  name="lname" value="<?php if(isset($error)){echo $lname;}?>" required="">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >Username</label>
    <input type="text" class="form-control" name="username"value="<?php if(isset($error)){echo $username;}?>" required="" >
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="<?php if(isset($error)){echo $email;}?>" required="">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control"  name="password"  required="">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control"  name="passwordConfirm" required="">
  </div>

  
  <button type="submit" name="signup" class="btn btn-primary btn-primary btn-group-lgform_btn">Signup</button>
  <p>Have an account?<a href="login.php">Log in</a></p>
  <?php }?>
</form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</html>