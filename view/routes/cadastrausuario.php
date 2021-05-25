<?php
//include_once '../vendor/autoload.php';
?>
<!-- Modal -->
<div class="modal fade" id="cadastrausuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastre-se</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-control" action="./controller/controllerUser.php" method="POST">
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
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Insira sua Senha" required>
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
                            <input type="text" name="data_de_cadastro" id="data_de_cadastro" class="form-control" placeholder="Data de Cadastro" required>
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
    $(document).ready(function() {

        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#rua").val("");
            $("#bairro").val("");
            $("#cidade").val("");
            $("#uf").val("");


        }



        //Quando o campo cep perde o foco.
        $("#cep").blur(function() {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#rua").val("...");
                    $("#bairro").val("...");
                    $("#cidade").val("...");
                    $("#uf").val("...");



                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#rua").val(dados.logradouro);
                            $("#bairro").val(dados.bairro);
                            $("#cidade").val(dados.localidade);
                            $("#uf").val(dados.uf);


                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        });
    });
</script>


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