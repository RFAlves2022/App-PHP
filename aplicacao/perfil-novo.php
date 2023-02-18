<?php include_once "header.php" ?>

<main>
    <h1>Novo perfil</h1>
    <br>
    <form method="post" action="">
        <fieldset>
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" id="nome">
            <br><br>

            <label for="email">E-Mail:</label><br>
            <input type="email" name="email" id="email">
            <br><br>

            <label for="profissao">Profissão:</label><br>
            <input type="text" name="profissao" id="profissao">
            <br><br>

            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" id="descricao"></textarea>
            <br><br>

            <label for="instagram">Instagram:</label><br>
            <input type="text" name="instagram" id="instagram">
            <br><br>

            <label for="twitter">Twitter:</label><br>
            <input type="text" name="twitter" id="twitter">
            <br><br>

            <label for="facebook">Facebook:</label><br>
            <input type="text" name="facebook" id="facebook">
            <br><br>

            <label for="linkedin">LinkedIn:</label><br>
            <input type="text" name="linkedin" id="linkedin">
            <br><br>

            <label for="youtube">Youtube:</label><br>
            <input type="text" name="youtube" id="youtube">
            <br><br>

            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" id="senha">
            <br><br>

            <label for="foto-perfil">Foto de perfil</label><br>
            <input type="text" name="foto-perfil" id="">
            <br><br>

            <label for="foto-fundo">Foto de fundo</label><br>
            <input type="text" name="foto-fundo" id="">
            <br><br>

            <button type="submit">Salvar</button>
        </fieldset>
    </form>
</main>