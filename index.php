<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/mascara.js"></script>
  </head>
  <body>
    <div class="jumbotron text-center">
      <h1>Teste AvaEsporte</h1>
      <p>Validação de formulário</p> 
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <form action="./persistencia.php" method="post">
            <div class="form-group">
              <label for="nome">Nome:*</label>
              <input type="text" class="form-control" name="nome" id="email" maxlength="50" required />
            </div>
            <div class="form-group">
              <label for="dataNascimento">Data de nascimento:*</label>
              <input type="date" class="form-control" name="dataNascimento" id="dataNascimento" required />
            </div>
            <div class="form-group">
              <label for="Cpf">Cpf:*</label>
              <input type="text" class="form-control" name="Cpf" id="Cpf" onkeypress="mascara(this,cpf)" maxlength="14" required />
            </div>
            <div class="form-group">
              <label for="telefone">Telefone:*</label>
              <input type="tel" class="form-control" name="telefone" id="telefone" required />
            </div>
            <div class="form-group">
              <label for="email">E-mail:*</label>
              <input type="email" class="form-control" name="email" id="email" required />
            </div>
            <p>Interesse:*</p>
            <div class="checkbox">
              <label><input type="checkbox" name="interesse[]" value="Andar">Andar</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="interesse[]" value="Correr">Correr</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="interesse[]" value="Ciclismo">Ciclismo</label>
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>




