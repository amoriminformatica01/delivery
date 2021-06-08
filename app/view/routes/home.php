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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="./app/view/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="0">

    <section id="home">
        <?php require './app/view/routes/navbar.php'; ?>
        <?php require './app/view/routes/logarusuario.php'; ?>
        <?php require './app/view/routes/cadastrausuario.php'; ?>

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

        <div class="container my-1">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./app/view/img/banner.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./app/view/img/banner.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./app/view/img/banner.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
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

        $controllerPromocao = ControllerPromocao::getControllerPromocao();
        ?>

    </section>
    <section id="cardapio">
        <h1 class="text-center text-success">Cardapio</h1>
        <div class="container">
            <div class="row">
                <?php
                $cardapio = new Cardapio();
                $listaCardapio = $cardapio->VerCardapio();

                if (empty($listaCardapio)) {
                    echo '<div class=" alert alert-danger">' . 'Não existe valores no Banco de Dados' . '</div>';
                } else {
                }

                for ($i = 0; $i < count($listaCardapio); $i++) {
                    foreach ($listaCardapio[$i] as $key => $value) {
                    }
                ?>
                    <div class=" my-5 col-lg-4 col-sm-6  col-md-4 text-center">
                        <img class="border border-success border-5 text-center" src="./app/view/img/<?php echo $listaCardapio[$i]['imagem']; ?>" height="200px" width="200px">
                        <h3 class="text-center text-dark"><?php echo utf8_encode(substr($listaCardapio[$i]['item'], 0, 12)); ?></h3>
                        <p class="h2 text-danger">Valor R$ <?php echo $listaCardapio[$i]["preco"]; ?></p>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#produto" data-bs-id="<?php echo utf8_encode($listaCardapio[$i]['id']); ?>" data-bs-item="<?php echo utf8_encode($listaCardapio[$i]['item']); ?>" data-bs-imagem="./app/view/img/<?php echo $listaCardapio[$i]['imagem']; ?>" data-bs-preco="<?php echo $listaCardapio[$i]['preco']; ?>" data-bs-descricao="hhhh">Adicionar ao carrinho</button>
                    </div>
                <?php
                }
                echo "</div>";
                echo "</div>";

                ?>
    </section>
    <?php

    include_once 'app/view/routes/botton.php';
    ?>


    <div class="modal fade" id="produto" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal">New message</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-10">
                                    <img src="" class=" card-img-top" name="imagem" id="imagem" width="100px" height="200px">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="recipient-name" class="form-label">Item:</label>
                                        <h1 class="form-control" name="item" id="item"></h1>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="message-text" class="form-label">Preço:</label>
                                        <h1 class="form-control" name="preco" id="preco"></h1>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="message-text" class="form-label">Descrição:</label>
                                        <h1 class="form-control" name="descricao" id="descricao"></h1>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="message-text" class="form-label">quantidade:</label>
                                        <div class="form-label" aria-live="polite">
                                            <input class="form-control" type="number" onblur="somar()" name="quantidade" id="quantidade">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="message-text" class="form-label">Total:</label>
                                        <h1 class="form-control" name="total" id="total"></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Adicionar</button>
                </div>
            </div>
        </div>
    </div>



    <script>
        var exampleModal = document.getElementById('produto')
        exampleModal.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var id = button.getAttribute('data-bs-id')
            var item = button.getAttribute('data-bs-item')
            var preco = button.getAttribute('data-bs-preco')
            var imagem = button.getAttribute('data-bs-imagem')
            var descricao = button.getAttribute('data-bs-descricao')
            var modalTitle = exampleModal.querySelector('.modal-title')
            var modalBodyInputId = exampleModal.querySelector('#id')
            var modalBodyInputItem = exampleModal.querySelector('#item')
            var modalBodyInputPreco = exampleModal.querySelector('#preco')
            var modalBodyInputImagem = exampleModal.querySelector('#imagem')
            var modalBodyInputDescricao = exampleModal.querySelector('#descricao')
            modalTitle.textContent = 'Produto ' + id
            modalBodyInputItem.textContent = item
            modalBodyInputPreco.textContent = preco
            modalBodyInputImagem.src = imagem
            modalBodyInputDescricao.textContent = descricao
        })
    </script>
    <script>
        function somar() {


            var quantidade = Number(document.getElementById('#quantidade'))
            var preco = Number(document.getElementById('#preco'))
            var total = Number(parseInt(quantidade) * parseInt(preco))

            document.querySelector('#total').innerHTML = total
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>