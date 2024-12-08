<?php

session_start();
require '../../../../config.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <!-- Link para o arquivo CSS -->
    <link rel="stylesheet" type="text/css" href="../../../public/assets/scss/home/_home.scss">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Icones Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--Icones Bootstrap-->

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Google Fonts-->
    <title>Meu Projeto</title>

</head>

<body>

    <?php require '../partials/header.php'; ?> <!-- Chamada do header -->

    <main class="main">

        <div class="poster-container">
            <div class="poster-filme"></div>

            <div class="filme-mobile">

                <div class="card-filme">
                    <div class="card-filme-header">

                        <div class="card-img"></div>

                        <p class="genero-filme">Ação, aventura</p>

                        <div class="btn-links">
                            <a href="https://youtu.be/-bcjtApoUyU?si=Xy4xF7rLJBx8dpzg" class="btn btn-primary"><i class="fa-solid fa-play"></i>Assistir</a>

                            <a href="filmes.php" class="btn btn-secundary"><i class="fa-solid fa-circle-info"></i> Mais Imformações</a>
                        </div>

                    </div>

                </div>
            </div>

            <div class="filme">
                <div class="title">
                    <h1>Sonic 3 - O Filme</h1>
                </div>

                <div class="description">
                    <p>Um filme de aventura, ação e comédia baseado no jogo
                        Sonic the Hedgehog 3, lançado em 1994.</p>
                </div>

                <div class="btn-links">
                    <a href="https://youtu.be/-bcjtApoUyU?si=Xy4xF7rLJBx8dpzg" class="btn btn-primary"><i class="fa-solid fa-play"></i>Assistir</a>

                    <a href="filmes.php" class="btn btn-secundary"><i class="fa-solid fa-circle-info"></i> Mais Imformações</a>
                </div>
            </div>


        </div>
    </main>

    <?php require '../partials/footer.php'; ?> <!-- Chamada do footer -->

</body>

<script src="/public/assets/js/main.js"></script>

</html>