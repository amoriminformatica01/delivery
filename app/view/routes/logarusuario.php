<div class="modal fade" id="logarusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal">Efetuar Login</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-control" action="./app/controller/controllerLogin.php" method="POST">
          <div class="row">
            <div class="col-md-12 form-group">
              <input type="email" name="email" class="form-control" placeholder="Insira seu Email" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <input type="password" name="senha" class="form-control" placeholder="Insira sua Senha" required>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <input type="submit" class="btn btn-primary" name="Validar" value="Validar">
        </form>
      </div>
    </div>
  </div>
</div>