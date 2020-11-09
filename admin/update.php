<?php
// Include config file
require_once "../server/config.php";
 
// Define variables and initialize with empty values
$title = $text = $category = "";
$title_err = $text_err = $category_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate title
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter a title.";
    } elseif(!filter_var($input_title, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $title_err = "Please enter a valid title.";
    } else{
        $title = $input_title;
    }
    
    // Validate text text
    $input_text = trim($_POST["text"]);
    if(empty($input_text)){
        $text_err = "Please enter an text.";     
    } else{
        $text = $input_text;
    }
    
    // Validate category
    $input_category = trim($_POST["category"]);
    if(empty($input_category)){
        $category_err = "Please enter the category amount.";     
    } elseif(!ctype_digit($input_category)){
        $category_err = "Please enter a positive integer value.";
    } else{
        $category = $input_category;
    }
    
    // Check input errors before inserting in database
    if(empty($title_err) && empty($text_err) && empty($category_err)){
        // Prepare an update statement
        $sql = "UPDATE posts SET title=?, text=?, category=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_title, $param_text, $param_category, $param_id);
            
            // Set parameters
            $param_title = $title;
            $param_text = $text;
            $param_category = $category;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: dashboard.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);

    }
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM posts WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $title = $row["title"];
                    $text = $row["text"];
                    $category = $row["category"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2><?php echo $title; ?></h2>
                    </div>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                            <label>title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
                            <span class="help-block"><?php echo $title_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($text_err)) ? 'has-error' : ''; ?>">
                            <label>text</label>
                            <textarea name="text" class="form-control"><?php echo $text; ?></textarea>
                            <span class="help-block"><?php echo $text_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($category_err)) ? 'has-error' : ''; ?>">
                            <label>category</label>
                            <input type="text" name="category" class="form-control" value="<?php echo $category; ?>">
                            <span class="help-block"><?php echo $category_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>