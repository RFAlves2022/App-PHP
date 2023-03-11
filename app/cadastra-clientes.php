<?php
$cpf = $_POST["cpf"];
$nome = $_POST["nome"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$senha = $_POST["senha"];

$senha = md5($senha);

include_once "conexao.php";

$sql = "INSERT INTO tb_clientes (cpf,nome,rua,numero,bairro,cidade,estado,email,telefone,senha) VALUES ('$cpf','$nome','$rua','$numero','$bairro','$cidade','$estado','$email','$telefone','$senha')";

mysqli_query($conexao,$sql);
$conexao->close();
?>


