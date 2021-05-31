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
   <link rel="stylesheet" href="css/bootstrap.min.css">
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
        <div class="collapse navbar-collapse" id="navbars-host">
          <ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="noticeboard.php" ><span>NoticeBoard</span></a></li>
                    </ul>
          <ul class="navbar-nav ml-auto">

            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
            
            
            <li class="nav-item"><a class="nav-link" href="teachers.html">Teachers</a></li>
            <li class="nav-item"><a class="nav-link" href="activities.html">Activities</a></li>
            <li class="nav-item"><a class="nav-link" href="admission.php">Admission</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost:8012/Project/login.php">Login</a></li>

          </ul>
        </div>
      </div>
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
