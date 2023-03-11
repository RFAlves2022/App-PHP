<?php include_once "header.php" ?>

<main>
    <div class="container mt-5">

        <h1>Cadastro de produtos</h1>

        <form method="post" action="cadastra-produtos.php" class="row g-3">
            <div class="col-md-8">
                <label class="form-label">Nome do produto</label>
                <input type="text" class="form-control" name="nomeProd">
            </div>
            <div class="col-md-4">
                <label class="form-label">Categoria</label>
                <input type="text" class="form-control" name="categoria">
            </div>
            <div class="col-md-4">
                <label class="form-label">Produto</label>
                <input type="text" class="form-control" name="produto">
            </div>
            <div class="col-md-4">
                <label class="form-label">Quantidade</label>
                <input type="number" class="form-control" name="quantidade">
            </div>
            <div class="col-md-2">
                <label class="form-label">Preço de compra</label>
                <input type="text" class="form-control"
                    name="preco-compra">
            </div>
            <div class="col-md-2">
                <label class="form-label">Preço de venda</label>
                <input type="text" class="form-control"
                    name="preco-venda">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</main>