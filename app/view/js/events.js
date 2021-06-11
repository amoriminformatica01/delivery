
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



