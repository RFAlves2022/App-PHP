<?php
$pasta = "img/";
$nomeArquivo = $_FILES["arquivo"]["name"];
$extensao = explode(".",$nomeArquivo);
$nomeNovo = round(microtime(true)) . end($extensao);
//echo "<pre>";
//print_r($_FILES["arquivo"]);

exit();

move_uploaded_file($_FILES["arquivo"]["tmp_name"],$pasta . $nomeArquivo);

?>