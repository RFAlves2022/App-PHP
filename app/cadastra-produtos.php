<?php

$nomeProd = $_POST["nomeProd"];
$categoria = $_POST["categoria"];
$produto = $_POST["produto"];
$quantidade = $_POST["quantidade"];
$pCompra = $_POST["preco-compra"];
$pVenda = $_POST["preco-venda"];

include_once "conexao.php";

$sql = "INSERT INTO tb_produtos (nome,categoria,quantidade,precoCompra,precoVenda) VALUES ('$nomeProd','$categoria','$quantidade','$produto','$pCompra','$pVenda')";

mysqli_query($conexao,$sql);
//$conexao->close();
?>