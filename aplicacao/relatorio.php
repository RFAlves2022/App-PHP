<?php
require_once "dompdf/autoload.inc.php";
use Dompdf\Dompdf;

$dompdf = new Dompdf();

// --MODELO PARA O PDF:--
$conteudo = "";
$conteudo .= "<table border='2' style='background: lightgray;'>";
$conteudo .= "<thead>";
$conteudo .= "<tr>";
$conteudo .= "<th>Nome</th>";
$conteudo .= "<th>Profissão</th>";
$conteudo .= "<th>E-mail</th>";
$conteudo .= "</tr>";
$conteudo .= "</thead>";
$conteudo .= "<tbody>";

include_once "conexao.php";
$sql = "SELECT * FROM tb_users";
$resultado = $conexao->query($sql);

while ($row = $resultado->fetch_assoc()) {
    $conteudo .= "<tr><td>" . $row["nome"] . "</td><td>" . $row["profissao"] . "</td><td>" . $row["email"] . "</td></tr>";
}
$conexao->close();
$conteudo .= "</tbody>";
$conteudo .= "</table>";


// --GERAÇÃO DO PDF:--
$dompdf->loadHtml("$conteudo");
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("relatorio.pdf");
?>