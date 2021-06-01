<?php
$connect = mysqli_connect("localhost", "root", "", "school");
$sql = "SELECT * FROM rec";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Addmission Export</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">Export Student admission  data to Excel </h2><br /> 
    <table class="table table-bordered">
     <tr>  
       <th>Student name</th>  
       <th>Gender</th>  
       <th>Student's Mother's Name</th>  
       <th>Aadhar Card Number</th>
       <th>Date Of Birth</th>
       <th>Student's Place of Birth</th>
       <th>Mother Tongue</th>
       <th>Cast and Subcast</th>
       <th>Residential Address</th>
       <th>Father's Number</th>
       <th>Mother's Number</th>
       <th>Guardian's Number</th>
       <th>Admission Sought For Class</th>
       <th>Last School Name attended (if any)</th>
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  <tr>  
         <td>'.$row["name"].'</td>  
         <td>'.$row["gender"].'</td>  
         <td>'.$row["mother"].'</td>  
         <td>'.$row["aadhar"].'</td>  
         <td>'.$row["dob"].'</td>
         <td>'.$row["place"].'</td>
         <td>'.$row["toungue"].'</td>
         <td>'.$row["cast"].'</td>
         <td>'.$row["address"].'</td>
         <td>'.$row["number"].'</td>
         <td>'.$row["mothernum"].'</td>
         <td>'.$row["guardian"].'</td>
         <td>'.$row["sought"].'</td>
         <td>'.$row["school"].'</td>
         </tr>';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="Addexport.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
  </div>  
 </body>  
</html>