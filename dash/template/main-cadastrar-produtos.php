<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 borda-torta mt-5">
    <div class="container-main">
    <h1 class="h2">Cadastrar Produtos</h1>
    </div>
    <br>
<div class="container">
    <form id="produtos" name="produtos" action="" method="post" class="form-control">

    <legend>Dados: </legend>

    <div class="row">

    <div class="col-md-2">
      <label for="barras">Código de Barras:</label>
      <input class="form-control" type="text" name="barras" id="barras" value="">
    </div>

    <div class="col-md-4">
      <label for="nome">Nome:</label>
      <input class="form-control" type="text" name="nome" id="nome" value="">
    </div>

    <div class="col-md-4">
      <label for="categoria">Categoria:</label>
      <input class="form-control" type="text" name="categoria" id="categoria" value="">
    </div>
      
    <div class="col-md-2">
      <label for="volume">Volume:</label>
      <input class="form-control" type="volume" name="volume" id="volume" value="">
    </div>
  
    <div class="row mt-2">

    <div class="col-md-2">
        <label for="categoria">Gênero:</label>
        <select class="form-select" aria-label="Default select example">
            <option value="1" selected>Masculino</option>
            <option value="2">Feminino</option>
            <option value="3">Unissex</option>
        </select>
    </div>
    
    <div class="col-md-3">
        <label for="marca">Marca:</label>
        <input class="form-control" type="text" name="marca" id="marca" value="">
    </div>

    <div class="col-md-2">
        <label for="preco">Preço Venda:</label>
        <input class="form-control" type="text" name="preco" id="preco" value="">
    </div>

    <div class="col-md-2">
        <label for="volume">Preço Custo:</label>
        <input class="form-control" type="text" name="volume" id="volume" value="">
    </div>

    <div class="col-md-3">
        <label for="fornecedor"> Fornecedor:</label>
        <input class="form-control" type="text" name="fornecedor" id="fornecedor" value="">
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
      Cadastrar Produto
      </button>
      </div>
    </div>
  </form>
</div>
</main>
