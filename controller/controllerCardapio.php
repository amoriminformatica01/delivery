<?php
class ControllerCardapio
{

    public function getControllerCardapio()
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
            echo "<div class='col-lg-3 col-sm-6 text-center'>";
            echo "<img class='border border-success  border-5  text-center'. src=" . "./view/img/" . utf8_decode($listaCardapio[$i]['imagem']) . " height=" . "200px" . "  " . "width=" . "200px" . ">";
            echo "<h4 class='text-center text-text-success'>" . utf8_decode($listaCardapio[$i]['item']) . "</h4>";
            echo "<p  class=' h5 text-secundary'>" . "Valor R$" . " " . $listaCardapio[$i]['preco'] . "</p>";
            echo "</div>";
        }
        echo '</div>';
        echo '</div>';
    }
}
