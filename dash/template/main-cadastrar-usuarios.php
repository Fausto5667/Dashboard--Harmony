<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 borda-torta mt-5">
    <div class="container-main">
        <h1 class="h2">Cadastro de Usuários</h1>
        <div id="form-cad">
        <div class="container">
        <br>
<div class="container">
  <form id="cliente" name="cliente" action="" method="post" class="form-control">
    <legend>Dados pessoais: </legend>
    <div class="row">
      <div class="col-md-1">
        <label for="id">ID:</label>
        <input class="form-control" type="text" name="id" id="id" value="">
      </div>
      <div class="col-md-4">
        <label for="nome">Nome:</label>
        <input class="form-control" type="text" name="nome" id="nome" value="">
      </div>
      <div class="col-md-4">
      <label for="sobrenome">Sobrenome:</label>
        <input class="form-control" type="text" name="sobrenome" id="sobrenome" value="">
    </div>
    <div class="col-md-3">
      <label for="nascimento">Data de nascimento:</label>
        <input class="form-control" type="date" name="nascimento" id="nascimento" value="">
    </div>
  
<div class="row mt-2">
      <div class="col-md-3">
        <label for="telefone">Telefone:</label>
        <input class="form-control" type="text" name="telefone" id="telefone" value="">
      </div>
      <div class="col-md-3">
      <label for="cpf">Cpf:</label>
        <input class="form-control" type="text" name="cpf" id="cpf" value="">
    </div>
    <div class="col-md-6">
      <label for="email">Email:</label>
        <input class="form-control" type="email" name="email" id="email" value="">
    </div>

    <legend class="mt-2">Endereço:</legend>
    <div class="row">
      <div class="col-md-2">
        <label for="cep">CEP:</label>
        <input class="form-control" type="text" name="cep" id="cep" value="">
      </div>
      <div class="col-md-4">
        <label for="rua">Rua:</label>
        <input class="form-control" type="text" name="rua" id="rua" value="">
      </div>
      <div class="col-md-3">
        <label for="numero">Numero:</label>
        <input class="form-control" type="text" name="numero" id="numero" value=""  >
      </div>
      <div class="col-md-3">
        <label for="bairro">Bairro:</label>
        <input class="form-control" type="text" name="bairro" id="bairro" value=""  >
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-3">
        <label for="cidade">Cidade:</label>
        <input class="form-control" type="text" name="cidade" id="cidade" value="">
      </div>
      <div class="col-md-3">
        <label for="estado">Estado:</label>
        <input class="form-control" type="text" name="estado" id="esatdo" value="">
      </div>
      <div class="col-md-3">
        <label for="pais">País:</label>
        <input class="form-control" type="text" name="pais" id="pais" value="">
      </div>
      <div class="col-md-3">
        <label for="ibge">IBGE:</label>
        <input class="form-control" type="text" name="ibge" id="ibge" value="">
      </div>
    </div>
    <div class="row mt-2">
      <div class="input-group">
        <span class="input-group-text">Observações</span>
        <textarea name="observacao" id="observacao" class="form-control" aria-label="Observações"></textarea>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-3">
      <button class="btn btn-dark "type="submit">
      <i class="bi bi-database-up me-1"></i>  
      Cadastrar Cliente
      </button>
      </div>
    </div>
  </form>
</div>
</main>
