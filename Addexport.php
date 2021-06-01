<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "school");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM rec";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
    <th>name</th>  
    <th>gender</th>  
    <th>mother</th>  
    <th>aadhar</th>
    <th>dob</th>
    <th>place</th>
    <th>tougue</th>
    <th>cast</th>
    <th>address</th>
    <th>number</th>
    <th>mothernum</th>
    <th>guardian</th>
    <th>sought</th>
    <th>school</th>
    </tr>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
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
                          </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
