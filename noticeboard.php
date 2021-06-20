<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

$sql = "SELECT * FROM notice";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>noticeboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/bootstrap1.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>
</head>
<body>

   

  <header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img src="images/schoollogo.jpg" width="200" height="100" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
        </button>
        
      </dSiv>
    </nav>
  </header>
<center>
  <br>
  <br>
<h1>NoticeBoard</h1>
<br>
<br>
 </center>
 <?php   while($row = $result->fetch_assoc()) {
    $sub=$row["sub"];
    $note=$row["note"];
    $date=$row["date"];
     ?>

 <div class="container">

  <ul class="list-group">
    <li class="list-group-item active"><h2><?php echo $sub;?></h2></li>

    <li class="list-group-item"><h9><?php echo $date;?></h9><br><h2><?php echo $note;?></h2></li>

  </ul>
</div><br>

<?php 

} 

?>


</body>
</html>
