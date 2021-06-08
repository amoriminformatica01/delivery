<?php
class ControllerPromocao
{
    public static function getControllerPromocao()
    {
        echo '<h1 class="text-center text-success">Promoções do dia</h1>';
        echo '<div class="container">';
        echo '<div class="row">';
        $promocoes = new Promocao();
        $listaPromocao = $promocoes->VerPromocao();
        if (empty($listaPromocao)) {
            echo '<div class=" alert alert-danger">' . 'Não existe valores no Banco de Dados' . '</div>';
        } else {
        }
        for ($i = 0; $i < count($listaPromocao); $i++) {
            foreach ($listaPromocao[$i] as $key => $value) {
            }
            echo "<div class='col-lg-4 col-md-6 my-3 col-sm-12 text-center'>";
            echo "<img class='border border-success  border-5 rounded-pill text-center'. src=" . "./app/view/img/" . utf8_encode($listaPromocao[$i]['imagem']) . " height=" . "300px" . "  " . "width=" . "300px" . ">";
            echo "<h3 class='text-center text-dark'>" . utf8_encode($listaPromocao[$i]['item']) . "</h3>";
            echo "<p  class=' h2 text-danger'>" . "R$" . " " . $listaPromocao[$i]['preco'] . "</p>";
            echo "<button class='btn btn-success' data-bs-toggle='modal' data-bs-target='#produto' data-bs-item=" . $listaPromocao[$i]['item'] . " data-bs-imagem=" . '../app/view/img/' . $listaPromocao[$i]['imagem'] . " data-bs-preco=" . $listaPromocao[$i]['preco'] . " >" . "Adicionar ao carrinho" . "</button>";
            echo "</div>";
        }
        echo "</div>";
        echo "</div>";
    }
}
