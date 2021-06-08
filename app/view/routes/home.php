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

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

    <section id="home">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#home"><img src="./app/view/img/logoBatatasDaVanda.png" height="60" width="140"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
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

                </div>
                <p class="d-flex flex-grow p-2 bd-highlight">
                    <?php
                    if (isset($_SESSION['nome'])) {
                        echo "<button class='btn  text-light'>" . "Bem vindo:" . $_SESSION['nome'] . "</button>";
                        echo "<button class='btn btn-outline-success iconify'   data-icon='entypo:shopping-cart' data-inline='false' style='color: green;' data-width='80px' data-height='40px'>" . "</button>";
                        echo "<a class='btn btn-link text-light' href='./app/controller/controllerLogout.php'>" . "Sair" . "</a>";
                    } else {
                        echo "<button class='btn btn-success' data-bs-toggle='modal' data-bs-target='#logarusuario'>" . "Entre" . "</button>";
                        echo "<button class='btn btn-link  text-light' data-bs-toggle='modal' data-bs-target='#cadastrausuario'>" . "Cadastre-se" . "</button>";
                        echo "<button class='btn btn-outline-success iconify' data-toggle='modal369' data-bs-target='' data-icon='entypo:shopping-cart' data-inline='false' style='color: green;' data-width='80px' data-height='40px'>" . "12" . "<span class='badge bg-secondary'>" . "12" . "</button>";
                        echo "<button type='button' class='btn btn-outline-success iconify'>" . "<span class='badge bg-secondary'>" . "0" . "</span>" . "</button>";
                    } ?>
                </p>
            </div>

        </nav>

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
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
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
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Proxímo</span>
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
    <div class="modal fade" id="logarusuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logar-se</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-control" action="./app/controller/controllerLogin.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="email" name="email" class="form-control" placeholder="Insira seu Email" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="password" autocomplete="on" name="senha" class="form-control" placeholder="Insira sua Senha" required>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-primary" name="Validar" value="Validar">
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                                            <input class="form-control" type="number" onclick="somar()" name="quantidade" id="quantidade">
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
    <div class="modal fade" id="cadastrausuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastre-se</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-control" action="./app/controller/controllerUser.php" method="POST">
                        <div class="row">
                            <div class="col-md-5 form-group">
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Insira seu Nome" required>
                            </div>
                            <div class="col-md-7 form-group">
                                <input type="text" name="sobre_nome" id="sobre_nome" class="form-control" placeholder="Insira seu Sobre Nome" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Insira seu Email" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="password" autocomplete="on" name="senha" id="senha" class="form-control" placeholder="Insira sua Senha" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="tel" name="telefone" id="telefone" class="form-control" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" placeholder="Insira seu Telefone" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="text" name="cep" id="cep" class="form-control" placeholder="Insira o seu Cep" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="text" name="rua" id="rua" class="form-control" placeholder="Insira a sua Rua" required>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Insira o Seu Bairro" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Insira o Sua Cidade" required>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="text" name="uf" id="uf" class="form-control" placeholder="Uf" required>
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="hidden" name="data_de_cadastro" id="data_de_cadastro" class="form-control" placeholder="Data de Cadastro" required>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-primary" name="Cadastrar" id="Cadastrar" value="Cadastrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function mask(o, f) {
            setTimeout(function() {
                var v = mphone(o.value);
                if (v != o.value) {
                    o.value = v;
                }
            }, 1);
        }

        function mphone(v) {
            var r = v.replace(/\D/g, "");
            r = r.replace(/^0/, "");
            if (r.length > 10) {
                r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
            } else if (r.length > 5) {
                r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
            } else if (r.length > 2) {
                r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
            } else {
                r = r.replace(/^(\d*)/, "($1");
            }
            return r;
        }
    </script>

    <script>

    </script>
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