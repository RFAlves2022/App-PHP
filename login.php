<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
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
</body>
</html>