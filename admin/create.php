<?php
// Include config file
require_once "../server/config.php";
 
// Define variables and initialize with empty values
$title = $text = $category = "";
$title_err = $text_err = $category_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_title = trim($_POST["title"]);
    if(empty($input_title)){
        $title_err = "Please enter a name.";
    } elseif(!filter_var($input_title, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $title_err = "Please enter a valid name.";
    } else{
        $title = $input_title;
    }
    
    // Validate address
    $input_text = trim($_POST["text"]);
    if(empty($input_text)){
        $text_err = "Please enter an address.";
    } else{
        $text = $input_text;
    }
    
    // Validate salary
    $input_category = trim($_POST["category"]);
    if(empty($input_category)){
        $category_err = "Please enter the salary amount.";
    } else{
        $category = $input_category;
    }
    
    // Check input errors before inserting in database
    if(empty($title_err) && empty($text_err) && empty($category_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO posts (title, text, category) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_address, $param_salary);
            
            // Set parameters
            $param_name = $title;
            $param_address = $text;
            $param_salary = $category;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: ../index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                    <h2>Criar Novo Post</h2>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>">
                        <label>Título</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
                        <span class="help-block"><?php echo $title_err;?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($text_err)) ? 'has-error' : ''; ?>">
                        <label>Texto</label>
                        <textarea name="text" class="form-control" cols="10" rows="20"><?php echo $text; ?></textarea>
                        <span class="help-block"><?php echo $text_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <select name="category" class="custom-select">
                            <option value="Johnny">Johnny</option>
                            <option value="Jimmy">Jimmy</option>
                            <option value="Joan">Joan</option>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Enviar">
                    <a href="dashboard.php" class="btn btn-default">Voltar para o Dashboard</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>