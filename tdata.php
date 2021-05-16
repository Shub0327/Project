<!DOCTYPE html>
<html>
<head>
	<title>teacher's data</title>
</head>
<body>

   <table>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Post</th>
      <th scope="col">Age</th>
    </tr>
  </thead>


                    <?php


$host = "localhost";
$user = "root";
$password ="";
$database = "school";

$id="";
$name = "";
$post = "";
$age = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}

                  // $conn =mysql_connect("localhost","root","","school");
                  // if ($conn-> connection_error) {
                  // 	die("connection failed".$conn-> connection_error);
                  // }

                    $sql ="SELECT id,name,post,age from profile";

                    $result =$connect-> query($sql);
                    if ($result -> num_rows>0) {
                        while ($row =$result-> fetch_assoc()) {
                          
                          echo "<tr><td>".$row["id"]."<td><td>".$row["name"]."<td><td>".$row["post"]."<td><td>".$row["age"]."</td></tr>";  
                        }
                        echo "</table>";
                    }
                    else
                    {
                        echo "0 result";
                    }

?>

            </table>

</body>
</html>