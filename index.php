<?php
session_start();
include("cadastro.php");

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "select count(*) as total from usuario where usuario = '$usuario";
$result = mysqli_query($sql);
$row = mysqli_fetch_assoc($conexao, $result);

if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit;
}

$sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro) VALUES ('$nome', '$usuario', '$senha', NOW())";

if($conexao->query(sql) == TRUE) {
    $_SESSIOM['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>