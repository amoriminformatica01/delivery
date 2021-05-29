<?php
class ControllerCardapio
{

    public static function getControllerCardapio()
    {
        echo '<h1 class="text-center text-success">Cardapio</h1>';
        echo '<div class="container">';
        echo '<div class="row">';
        $cardapio = new Cardapio();
        $listaCardapio = $cardapio->VerCardapio();

        if (empty($listaCardapio)) {
            echo '<div class=" alert alert-danger">' . 'Não existe valores no Banco de Dados' . '</div>';
        } else {
        }

        for ($i = 0; $i < count($listaCardapio); $i++) {
            foreach ($listaCardapio[$i] as $key => $value) {
            }
            echo "<div class=' my-5 col-lg-4 col-sm-6  col-md-4 text-center'>";
            echo "<img class='border border-success  border-5  text-center'. src=" . "./view/img/" .(utf8_decode($listaCardapio[$i]['imagem'])) . " height=" . "200px" . "  " . "width=" . "200px" . ">";
            echo "<h3 class='text-center text-dark'>" . utf8_encode(substr($listaCardapio[$i]['item'],0,12))."</h3>";
            echo "<p  class='h2 text-danger'>" . "Valor R$" . " " . $listaCardapio[$i]['preco'] . "</p>";
            echo "<button class='btn btn-success' data-bs-toggle='modal' data-bs-target='#comprar' data-bs-item=".$listaCardapio[$i]['item']."data-bs-preco=".$listaCardapio[$i]['preco'].">"."Adicionar ao carrinho"."</button>";
            echo "</div>";
        }
        echo '</div>';
        echo '</div>';
    }
}
