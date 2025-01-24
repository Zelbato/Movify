<?php

require '../../../../config.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <!-- Link para o arquivo CSS -->
    <link rel="stylesheet" type="text/css" href="../../../public/assets/scss/partials/_header.scss">
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
    <header class="header">
        <div class="logo">
            <a href="../home/home.php">
                <img src="../../../public/assets/img/cinesantafedosul.png" alt="image-logo">
            </a>
        </div>

        <div class="hamb">
       <a href="#"> <i class="fa-solid fa-bars"></i> </a>
        </div>

        <nav class="nav-links">
            <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Filmes</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
            </ul>

            <div class="btn-log-cad">
                <button class="btn-log"><a href="#">Log in</a></button>
                <button class="btn-cad" href="#">Cadastro</button>
            </div>
        </nav>

       

        <nav class="mobile-list">

            <ul class="mobile-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Filmes</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>

    </header>
</body>

<script>
    // //muda cor do menu
    // window.addEventListener('scroll', function() {
    //     let header = document.querySelector('.header');
    //     header.classList.toggle('rolagem', window.scrollY > 350);
    // })
</script>

</html>