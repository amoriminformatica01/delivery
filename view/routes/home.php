<?php
session_start();
//include_once 'vendor/autoload.php';

?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://">
    <link rel="stylesheet" href="./view/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
   

    <section id="home">
<?php
    require 'view/routes/navbar.php';
    ?>
        <div class="container">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="view/img/banner.png" class="d-block w-100 border border-5 border-success" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://static.expressodelivery.com.br/imagens/banners/49954/Expresso-Delivery_738604bff824b9aec2292274b2fb160f.png" class="d-block w-100 border border-5 border-success" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://static.expressodelivery.com.br/imagens/banners/49954/Expresso-Delivery_738604bff824b9aec2292274b2fb160f.png" class="d-block w-100 border border-5 border-success" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section id="promocoes">
        <p></p>
        <div class="container col-md-8">
            <div class="col-lg-12 col-sm-12">
                <form class="d-flex">
                    <input class="form-control me-2 label-success" type="search" placeholder="Buscar seu Produto desejavel..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
        <?php
        include_once 'controller/controllerPromocao.php';
        $controllerPromocao = new ControllerPromocao();
        $controllerPromocao->getControllerPromocao();
        ?>
    </section>
    <section id="cardapio">
        <?php
        include_once 'controller/controllerCardapio.php';
        $controllerPromocao = new ControllerCardapio();
        $controllerPromocao->getControllerCardapio();
        ?>
    </section>
    <?php

    include_once 'view/routes/botton.php';
    ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v10.0" nonce="sux1FYtb"></script>
</body>

</html>