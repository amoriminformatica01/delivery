
var exampleModal = document.getElementById('produto')
exampleModal.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var id = button.getAttribute('data-bs-id')
    var item = button.getAttribute('data-bs-item')
    var preco = button.getAttribute('data-bs-preco')
    var quantidade = button.getAttribute('data-bs-quantidade')
    var imagem = button.getAttribute('data-bs-imagem')
    var descricao = button.getAttribute('data-bs-descricao')
    var total = button.getAttribute('data-bs-total')

    var modalTitle = exampleModal.querySelector('.modal-title')
    var modalBodyInputId = exampleModal.querySelector('#id')
    var modalBodyInputItem = exampleModal.querySelector('#item')
    var modalBodyInputPreco = exampleModal.querySelector('#preco')
    var modalBodyQuantidade = exampleModal.querySelector('#quantidade')
    var modalBodyInputImagem = exampleModal.querySelector('#imagem')
    var modalBodyInputDescricao = exampleModal.querySelector('#descricao')
    var modalBodyInputTotal = exampleModal.querySelector('#total')


    modalTitle.textContent = 'Produto ' + item
    modalBodyInputItem.textContent = item
    modalBodyInputPreco.textContent = preco
    modalBodyQuantidade.textContent = quantidade
    modalBodyInputImagem.src = imagem
    modalBodyInputDescricao.textContent = descricao
    modalBodyInputTotal.textContent = total


})


queijo = 0;



function presuntoDecrementa() {
    queijo--;
    setValueQueijo(queijo);
}

function queijoIncrementa() {
    queijo++;
    setValueQueijo(queijo);
}

function setValueQueijo(value) {
    document.getElementById('adcionalQueijo').value = value;

}

setValueQueijo(queijo);


queijo = 0;



function queijoDecrementa() {
    queijo--;
    setValueQueijo(queijo);
}

function queijoIncrementa() {
    queijo++;
    setValueQueijo(queijo);
}

function setValueQueijo(value) {
    document.getElementById('adcionalQueijo').value = value;

}

setValueQueijo(queijo);

quantidade = 0;



function quantidadeDecrementa() {
    quantidade--;
    setValue(quantidade);
}

function quantidadeIncrementa() {
    quantidade++;
    setValue(quantidade);
}

function setValue(value) {
    document.getElementById('quantidade').value = value;

}

setValue(quantidade);



function somarTotal() {

    var quantidade = document.querySelector('quantidade');
    var preco = document.querySelector('preco');

    let total = parseInt(preco) * parseInt(quantidade);

    document.getElementById('total').innerHTML = total;
    console.log(total);

}


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
