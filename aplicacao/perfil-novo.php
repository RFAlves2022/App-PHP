<?php include_once "header.php" ?>

<main style="margin-left: 10px;">
    <h1>Novo perfil</h1>
    <br>
    <form method="post" action="criar-perfil.php" enctype="multipart/form-data">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome">
        <br>

        <label for="email">E-Mail:</label><br>
        <input type="email" name="email">
        <br>

        <label for="profissao">Profissão:</label><br>
        <input type="text" name="profissao">
        <br>

        <label for="descricao">Descrição:</label><br>
        <textarea name="descricao"></textarea>
        <br>

        <label for="instagram">Instagram:</label><br>
        <input type="text" name="instagram">
        <br>

        <label for="twitter">Twitter:</label><br>
        <input type="text" name="twitter">
        <br>

        <label for="facebook">Facebook:</label><br>
        <input type="text" name="facebook">
        <br>

        <label for="linkedin">LinkedIn:</label><br>
        <input type="text" name="linkedin">
        <br>

        <label for="youtube">Youtube:</label><br>
        <input type="text" name="youtube">
        <br>

        <label for="senha">Senha:</label><br>
        <input type="password" name="senha">
        <br>

        <label for="foto-perfil">Foto de perfil</label><br>
        <input type="file" name="foto-perfil">
        <br>

        <label for="foto-fundo">Foto de fundo</label><br>
        <input type="text" name="foto-fundo">
        <br>

        <button type="submit">Salvar</button>
    </form>
</main>