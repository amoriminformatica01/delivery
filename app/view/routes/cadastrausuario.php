<div class="modal fade" id="cadastrausuario" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal">Cadastre-se</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
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
                        <div class="col-md-7 form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Insira seu Email" required>
                        </div>
                        <div class="col-md-5 form-group">
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Insira sua Senha" required>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="tel" name="telefone" id="telefone" class="form-control" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" placeholder="Insira seu Telefone" required>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" name="cep" id="cep" value="" onblur="pesquisacep(this.value);" class="d-block form-control" placeholder="Insira o seu Cep" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" name="rua" id="rua" class="form-control" placeholder="Insira a sua Rua" disabled>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Insira o Seu Bairro" disabled>
                        </div>
                        <div class="col-md-5 form-group">
                            <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Insira o Sua Cidade" disabled>
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" name="uf" id="uf" class="form-control" placeholder="Uf" disabled>
                        </div>

                        <input type="hidden" name="data_de_cadastro" id="data_de_cadastro" class="form-control" placeholder="Data de Cadastro" required>

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
    function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('rua').value = ("");
        document.getElementById('bairro').value = ("");
        document.getElementById('cidade').value = ("");
        document.getElementById('uf').value = ("");

    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value = (conteudo.logradouro);
            document.getElementById('bairro').value = (conteudo.bairro);
            document.getElementById('cidade').value = (conteudo.localidade);
            document.getElementById('uf').value = (conteudo.uf);

        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value = "...";
                document.getElementById('bairro').value = "...";
                document.getElementById('cidade').value = "...";
                document.getElementById('uf').value = "...";


                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

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
    };
</script>