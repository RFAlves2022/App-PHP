<?php 
include_once "conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$profissao = $_POST["profissao"];
$descricao = $_POST["descricao"];
$instagram = $_POST["instagram"];
$twitter = $_POST["twitter"];
$facebook = $_POST["facebook"];
$linkedin = $_POST["linkedin"];
$youtube = $_POST["youtube"];
$senha = $_POST["senha"];
$fotoFundo = $_POST["fundo"];


//arquivo foto de perfil
$pasta = "img/";
$fotoPerfil = $_FILES["foto-perfil"]["name"];
$partesPerfil = explode(".", $fotoPerfil);
$nomeNovoPerfil = round(microtime(true)) . "." . end($partesPerfil);
move_uploaded_file($_FILES["foto-perfil"]["tmp_name"], $pasta . $nomeNovoPerfil);

$senha = md5($senha);

//inserir sql:
$sql = "INSERT INTO tb_users (nome,email,profissao,descricao,instagram,twitter,facebook,linkedin,youtube,senha,foto_perfil,foto_fundo) 
VALUES('$nome','$email','$profissao','$descricao','$instagram','$twitter','$facebook','$linkedin','$youtube','$senha','$nomeNovoPerfil','$fotoFundo')";

mysqli_query($conexao,$sql);
header("location:perfil-novo.php");


?>