<?php include_once "header.php" ?>

<main>
    <div class="container mt-5">

        <h1>Cadastro de clientes</h1>

        <form method="post" action="cadastra-clientes.php" class="row g-3">
            <div class="col-md-6">
                <label class="form-label">CPF</label>
                <input type="number" class="form-control" name="cpf">
            </div>
            <div class="col-md-6">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="col-10">
                <label class="form-label">Rua</label>
                <input type="text" class="form-control" name="rua">
            </div>
            <div class="col-md-2">
                <label class="form-label">Nº</label>
                <input type="number" class="form-control" name="numero">
            </div>
            <div class="col-12">
                <label class="form-label">Bairro</label>
                <input type="text" class="form-control" name="bairro">
            </div>
            <div class="col-md-8">
                <label class="form-label">Cidade</label>
                <input type="text" class="form-control" name="cidade">
            </div>
            <div class="col-md-4">
                <label class="form-label">Estado</label>
                <select class="form-select" name="estado">
                    <option selected>Escolha...</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">E-Mail</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="col-md-4">
                <label class="form-label">Telefone</label>
                <input type="number" class="form-control" name="telefone">
            </div>
            <div class="col-md-4">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</main>