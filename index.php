<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Ninth navbar example">
        <div class="container-xl">
            <a class="navbar-brand" href="index.php">Painel de Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL"
                aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07XL">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">Novo Usuário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">Listar Usuários</a>
                    </li>
                </ul>
                <!-- <form role="search">
                    <input class="form-control" type="search" placeholder="Busca" aria-label="Search">
                </form> -->
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include("config.php");
                switch (@$_REQUEST["page"]) {
                    case "novo":
                        include("novo-usuario.php");
                        break;
                    case "listar":
                        include("listar-usuario.php");
                        break;
                    case "salvar":
                        include("salvar-usuario.php");
                        break;
                    case "editar":
                        include("editar-usuario.php");
                        break;
                    default:
                        echo"<div class='px-4 py-5 my-5 text-center'>
                        <h3 class='fw-semibold'>$dataHora</h2>
                        <h1 class='display-5 fw-bold text-body-emphasis'>Bem vindo</h1>
                        <div class='col-lg-6 mx-auto'>
                            <p class='lead mb-4'>Sistema de cadastro de usuários utilizando PHP, MySQL e Bootstrap.
                            Selecione abaixo a opção desejada:</p>
                            <div class='d-grid gap-2 d-sm-flex justify-content-sm-center'>
                                <button type='button' class='btn btn-primary btn-lg px-4 gap-3' href='?page=novo'>Novo Usuário</button>
                                <button type='button' class='btn btn-outline-secondary btn-lg px-4' href='?page=listar'>Listar Usuários</button>
                            </div>
                        </div>
                        </div>";
                        break;
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <footer class="py-3 my-4 fixed-bottom">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="index.php" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="https://github.com/andlopper/" target="_blank"
                        class="nav-link px-2 text-body-secondary">GitHub</a></li>
                <li class="nav-item"><a href="https://www.linkedin.com/in/andrelopespereira/" target="_blank"
                        class="nav-link px-2 text-body-secondary">Linkedin</a></li>
            </ul>
            <p class="text-center text-body-secondary">© 2023 André Pereira</p>
        </footer>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>