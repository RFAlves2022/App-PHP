<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de idade</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="number" name="idade"><br>
        <input type="submit" name="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        if ($idade >= 18) {
            echo "Olá $nome, você é maior de idade.";
        } else {
            echo "Olá $nome, você é menor de idade.";
        }
    }
    ?>
</body>

</html>