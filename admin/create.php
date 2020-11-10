<?php
require_once "../server/config.php";
$title = $text = $category = $image = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $input_title = trim($_POST["title"]);
    $title = $input_title;

    $input_text = trim($_POST["text"]);
    $text = $input_text;

    $input_category = trim($_POST["category"]);
    $category = $input_category;

    $input_image = trim($_POST["image"]);
    $image = $input_image;

    if(empty($title_err) && empty($text_err) && empty($category_err)){
        $sql = "INSERT INTO posts (title, text, category, image) VALUES (?, ?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ssss", $param_title, $param_text, $param_category, $param_image);

            $param_title = $title;
            $param_text = $text;
            $param_category = $category;
            $param_image = $image;

            if(mysqli_stmt_execute($stmt)){
                header("location: ../index.php");
                exit();
            } else{
                echo "Erro ao tentar se comunicar com o servidor";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="../assets/owl.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Início</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../category.php?category=Johnny">Johnny</a>
                        <a class="dropdown-item" href="../category.php?category=Jimmy">Jimmy</a>
                        <a class="dropdown-item" href="../category.php?category=Joan">Joan</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="dashboard.php">Dashboard</a>
                </li>
                </ul>
                <form action="../search.php" class="form-inline my-2 my-lg-0">
                    <input name="text" class="form-control mr-sm-2" type="search" placeholder="Escreva aqui" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Criar Novo Post</h2>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" name="title" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label>Imagem</label>
                        <input type="text" name="image" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label>Texto</label>
                        <textarea name="text" class="form-control" cols="10" rows="20"></textarea>
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
                    <a href="dashboard.php" class="btn btn-secondary">Voltar para o Dashboard</a>
                </form>
            </div>
        </div>
        <footer class="footer position-fixed">
        <div class="container">
            <span class="text-muted">FIAP 2020 - Equipe Heraclitus</span>
        </div>
    </footer>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>