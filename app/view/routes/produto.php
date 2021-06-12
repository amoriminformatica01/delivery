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
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="recipient-name" class="form-label">Item:</label>
                                    <h1 class="form-control" name="item" id="item"></h1>
                                </div>
                                <div class="col-md-4">
                                    <label for="message-text" class="form-label">Preço:</label>
                                    <h1 class="form-control" name="preco" id="preco"></h1>
                                </div>
                                <div class="col-md-10">
                                    <label for="message-text" class="form-label">Descrição:</label>
                                    <h1 class="form-control" name="descricao" id="descricao"></h1>
                                </div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <label for="Adicionar">Quantidade</label>
                                        <button type="button" id="menos"  onclick="quantidadeDecrementa();" class="btn btn-primary col-md-2 ">-</button>
                                        <div class="col-md-8 ">
                                            <input type="text" class="form-control col-md-12"  name="quantidade" id="quantidade" disabled>
                                        </div>
                                        <button type="button" id="mais" onclick="quantidadeIncrementa();" class="btn btn-primary col-md-2 ">+</button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="message-text" class="form-label">Total:</label>
                                    <h1 class="form-control"  name="total" id="total"></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="col-md-12">
                                <img src="" class=" card-img-top" name="imagem" id="imagem" width="100px" height="200px">
                                <div class="col-md-12">
                                    <div class="row">
                                        <label for="Adicionar">Adicionar queijo</label>
                                        <button type="button" id="menosQueijo" onclick="queijoDecrementa();" class="btn btn-primary col-md-2 ">-</button>
                                        <div class="col-md-8 ">
                                            <input type="text" class="form-control col-md-12" name="adcionalQueijo" id="adcionalQueijo" disabled>
                                        </div>
                                        <button type="button" id="maisQueijo" onclick="queijoIncrementa();" class="btn btn-primary col-md-2 ">+</button>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="row">
                                        <label for="Adicionar">Adicionar presunto</label>
                                        <button type="button" class="btn btn-primary col-md-2">-</button>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control col-md-12" name="" id="" disabled>
                                        </div>
                                        <button type="button" class="btn btn-primary col-md-2">+</button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <label for="Adicionar">Adicionar bacom</label>
                                        <button type="button" class="btn btn-primary col-md-2">-</button>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control col-md-12" name="" id="" disabled>
                                        </div>
                                        <button type="button" class="btn btn-primary col-md-2">+</button>
                                    </div>
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
