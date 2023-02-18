<?php include_once "header.php"?>

<main>
    <form method="post" action="validar-login.php">
        <label for="nome">E-Mail:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="text" name="senha" id="senha" required>
        <br>
        <button type="submit">Entrar</button>
    </form>
</main>