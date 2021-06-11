<div class="modal fade" id="combo" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
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