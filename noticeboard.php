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
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<h1>Notice</h1>
 
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
