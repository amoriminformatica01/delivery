<?php
//$ValidarLogin  = new ValidarLogin();
?>
<!-- Modal -->
<div class="modal fade" id="logarusuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logar-se</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-group" action="./controller/controllerLogin.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="email" name="email"  class="form-control" placeholder="Insira seu Email" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="password" name="senha"  class="form-control" placeholder="Insira sua Senha" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <input type="submit" class="btn btn-primary" name="Validar"  value="Validar">
                </form>
            </div>
        </div>
    </div>
</div>