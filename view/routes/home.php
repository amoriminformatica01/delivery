<?php
session_start();
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

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

    <section id="home">
        <?php
        require 'view/routes/navbar.php';
        ?>
        <div class="text-center">
            <?php
            if (isset($_SESSION['sucessUser'])) {
                echo "<div class='container my-4 alert alert-success alert-dismissible fade show' role='alert'>";
                echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
                $_SESSION['sucessUser'];
                echo  $_SESSION['sucessUser'];
                unset($_SESSION['sucessUser']);
            }; ?>

            <?php
            if (isset($_SESSION['LogonError'])) {
                echo "<div class='container my-4 alert alert-danger alert-dismissible fade show' role='alert'>";
                echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
                $_SESSION['LogonError'];
                echo  $_SESSION['LogonError'];
                unset($_SESSION['LogonError']);
            }; ?>
            <?php
            if (isset($_SESSION['sairSucesso'])) {
                echo "<div class='container my-4 alert alert-primary alert-dismissible fade show' role='alert'>";
                echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
                $_SESSION['sairSucesso'];
                echo  $_SESSION['sairSucesso'];
                unset($_SESSION['sairSucesso']);
            }; ?>

            <?php
            if (isset($_SESSION['Deslogado'])) {
                echo "<div class='container my-4 alert alert-success alert-dismissible fade show' role='alert'>";
                echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
                $_SESSION['Deslogado'];
                echo  $_SESSION['Deslogado'];
                unset($_SESSION['Deslogado']);
            }; ?>

            <?php
            if (isset($_SESSION['USerExist'])) {
                $_SESSION['USerExist'];
                echo "<div class='container my-4 alert alert-danger alert-dismissible fade show' role='alert'>";
                echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
                echo  $_SESSION['USerExist'];
                unset($_SESSION['USerExist']);
            }; ?>
        </div>
        <div class="container my-5">
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
                    <input class="form-control me-2 label-success text-center" type="search" placeholder="Buscar o Produto desejavel..." aria-label="Search">
                    <button class="btn btn-lg btn-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
        <?php
        include_once 'controller/controllerPromocao.php';
        $controllerPromocao = ControllerPromocao::getControllerPromocao();
        ?>

    </section>
    <section id="cardapio">
        <?php
        include_once 'controller/controllerCardapio.php';
        $controllerPromocao = ControllerCardapio::getControllerCardapio();
        ?>
    </section>
    <?php

    include_once 'view/routes/botton.php';
    ?>
    <div class="modal fade" id="comprar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" name="item" id="recipent">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" name="preco" id="recipient"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var exampleModal = document.getElementById('comprar')
        exampleModal.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var item = button.getAttribute('data-bs-item')
            var preco = button.getAttribute('data-bs-preco')
            // If necessary, you could initiate an AJAX request here
            // and then do the updating in a callback.
            //
            // Update the modal's content.
            var modalTitle = exampleModal.querySelector('.modal-title')
            var modalBodyInput = exampleModal.querySelector('.modal-body input')

            modalTitle.textContent = 'Produto ' + item
            modalBodyInput.value = item
            modalBodyInput.value = preco
        })
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v10.0" nonce="sux1FYtb"></script>
</body>

</html>