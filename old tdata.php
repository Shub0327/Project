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

// get values from the form
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['name'];
    $posts[2] = $_POST['post'];
    $posts[3] = $_POST['age'];
    return $posts;
}

// Search

if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM profile WHERE id = $data[0]";
    
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
             
                $name = $row['name'];
                $post = $row['post'];
                $age = $row['age'];
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
}


// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO profile (`name`, `post`, `age`) VALUES ('$data[1]','$data[2]',$data[3])";
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Inserted';
            }else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert '.$ex->getMessage();
    }
}

// Delete
if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM profile WHERE `id` = $data[0]";
    try{
        $delete_Result = mysqli_query($connect, $delete_Query);
        
        if($delete_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Deleted';
            }else{
                echo 'Data Not Deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Delete '.$ex->getMessage();
    }
}

// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE profile SET `name`='$data[1]',`post`='$data[2]',`age`=$data[3] WHERE `id` = $data[0]";
    try{
        $update_Result = mysqli_query($connect, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Updated';
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



?>


<!DOCTYPE Html>
<html>
    <head>
        <title>PHP INSERT UPDATE DELETE SEARCH</title>
    </head>
    <body>
        <!-- <form action="dashboard.php" method="post">
            <input type="number" name="id" placeholder="Id" value="<?php echo $id;?>"><br><br>
            <input type="text" name="name" placeholder="Full Name" value="<?php echo $name;?>"><br><br>
            <input type="text" name="post" placeholder="post" value="<?php echo $post;?>"><br><br>
            <input type="number" name="age" placeholder="Age" value="<?php echo $age;?>"><br><br>
            <div> -->
                <!-- Input For Add Values To Database-->
                <input type="submit" name="insert" value="Add">
                
                <!-- Input For Edit Values -->
                <input type="submit" name="update" value="Update">
                
                <!-- Input For Clear Values -->
                <input type="submit" name="delete" value="Delete">
                
                <!-- Input For Find Values With The given ID -->
                <input type="submit" name="search" value="Find">
            </div>
        </form>



       

    </body>
</html>

