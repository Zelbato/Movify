<?php
$host = 'Localhost';
$port = '3306';
$userName = 'root';
$passoword = '';
$dbName = 'geren_filmes';

$conexao = new mysqli($host, $userName, $passoword, $dbName);

if($conexao->connect_errno){
  echo "falha ao conectar: (" . $conexao->connect_errno . ")" . $conexao->connect_errno;
}else{
 echo "Esta funcioando ";
}

?>


