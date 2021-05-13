<?php
    require 'view/routes/cadastrausuario.php';
    require 'view/routes/logarusuario.php';
    ?>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="home"><img src="./view/img/logoBatatasDaVanda.png" height="60" width="140"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"  href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#promocoes">Promoções</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cardapio">Cardapio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#localizacao">Localização</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#logarusuario">Entre</button>
                    <button class="btn btn-link  text-light" data-bs-toggle="modal" data-bs-target="#cadastrausuario">Cadastre-se</button>
                    <!--<button class="btn btn-outline-success iconify" data-bs-toggle="modal" data-bs-target="" data-icon="entypo:shopping-cart" data-inline="false" style="color: green;" data-width="80px" data-height="40px"></button>-->
                </form>
            </div>
        </div>
    </nav>
</div>


