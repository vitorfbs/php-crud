<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
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
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Início</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Johnny</a>
                    <a class="dropdown-item" href="#">Jimmy</a>
                    <a class="dropdown-item" href="#">Joan</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin/dashboard.php">Dashboard</a>
                </li>
                </ul>
                <form action="search.php" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Escreva aqui" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
        <section class="row">

            <div class='col-md-10'>
            <?php
                require_once "../server/config.php";
                $sql = "SELECT * FROM posts WHERE category = 'jimmy'";

                if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                            echo "<div class='row'>";
                            echo "<div class='col-md-8'>";
                            echo "<h2>" . $row['date'] . " - " . $row['title'] . "</h2>";
                            echo "<p>" . $row['category'] . "</p>";
                            echo "<p>" . substr($row['text'], 0, 20) . "</p>";
                            echo "<a href='article.php?id=". $row['id'] ."' title='Leia Mais' data-toggle='tooltip'>LEIA MAIS</a>";
                            echo "</div>";
                            echo "</div>";
                        }
                        mysqli_free_result($result);
                    } else{
                        echo "<p class='lead'><em>Nenhum artigo encontrado.</em></p>";
                    }
                } else{
                    echo "[ERROR]: $sql. " . mysqli_error($link);
                }
                mysqli_close($link);
            ?>
                <hr>
            </div>
            <div class="col-md-2"><img src="https://i.pinimg.com/originals/ad/6e/82/ad6e82fcab2026849ddf18bcda98e61a.jpg" alt=""></div>
        </section>
        <footer class="footer">
            <div class="container">
                <span class="text-muted">Place sticky footer content here.</span>
            </div>
        </footer>
    </div>
</body>
</html>