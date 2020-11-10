<?php
if(isset($_POST["id"]) && !empty($_POST["id"])){
    require_once "../server/config.php";
    $sql = "DELETE FROM posts WHERE id = ?";
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        $param_id = trim($_POST["id"]);
        if(mysqli_stmt_execute($stmt)){
            header("location: dashboard.php");
            exit();
        } else{
            echo "Erro no servidor.";
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);
} else{
    if(empty(trim($_GET["id"]))){
        header("location: error.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 60px;
        line-height: 60px;
        background-color: #f5f5f5;
        }
    </style>
</head>
<body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Deletar o Artigo</h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="row">
                            <div class="col-md-10">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                            <p>Deletar o Artigo?</p><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                            <p>
                                <input type="submit" value="Sim" class="btn btn-danger">
                                <a href="dashboard.php" class="btn btn-secondary">Não</a>
                            </p>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer position-fixed">
            <div class="container">
                <span class="text-muted">FIAP 2020 - Equipe Heraclitus</span>
            </div>
        </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>