<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparador Ropa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/comparador-ropa/build/css/app.css">
</head>

<body>

    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" >
                    <h2 class="fs-2 fw-bold">MEJOR ROPA</h2>
                </a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="/comparador-ropa/">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Camisas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Pantalones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Zapatos</a>
                        </li>
                        <li class="nav-item">
                            <form class="d-flex">
                                <a class="nav-link active">Buscar:</a>
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Buscar</button>
                            </form>
                        </li>
                    </ul>
                    <ul class="d-flex">
                        <?php if(!$auth): ?>
                        <a class="nav-link bg-green text-decoration-none border border-dark text-dark me-2" href="/comparador-ropa/login.php">Iniciar Sesion</a>
                        <a class="nav-link bg-green text-decoration-none border border-dark text-dark me-2" href="#">Registrarte</a>
                        <?php endif; ?>
                        <?php if($auth): ?>
                            <a class="nav-link bg-green text-decoration-none border border-dark text-dark me-2" href="/comparador-ropa/cerrar-sesion.php">Cerrar Sesion</a>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>