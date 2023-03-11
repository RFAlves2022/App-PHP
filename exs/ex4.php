<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Número: <input type="number" name="numero"><br>
        <input type="submit" name="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        echo "<h2>Tabuada do $numero</h2>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$numero x $i</td>";
            echo "<td>=</td>";
            echo "<td>" . ($numero * $i) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>