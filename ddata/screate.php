<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$sub = $note = "";
$sub_err = $note_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_sub = trim($_POST["sub"]);
    if(empty($input_sub)){
        $sub_err = "Please enter a Subject";
    } elseif(!filter_var($input_sub, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $sub_err = "Please enter a valid Subject.";
    } else{
        $sub = $input_sub;
    }
    
    // Validate address
    $input_note = trim($_POST["note"]);
    if(empty($input_note)){
        $note_err = "Please enter an Notice.";     
    } else{
        $note = $input_note;
    }
    
    // Validanamete salary
 
    
    // Check input errors before inserting in database
    if(empty($sub_err) && empty($notice_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO Notice (sub, note) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_name, $param_post);
            
            // Set parameters
            $param_name = $sub;
            $param_post = $note;
    
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: sindex.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Notice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Notice</h2>
                    <p>Please fill this form and submit to add notice to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="sub" class="form-control <?php echo (!empty($sub_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sub; ?>">
                            <span class="invalid-feedback"><?php echo $sub_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Notice</label>
                            <textarea name="note" class="form-control <?php echo (!empty($note_err)) ? 'is-invalid' : ''; ?>"><?php echo $note; ?></textarea>
                            <span class="invalid-feedback"><?php echo $note_err;?></span>
                        </div>
 
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="sindex.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>