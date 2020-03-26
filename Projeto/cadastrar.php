<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$sobrenome = mysqli_real_escape_string($conexao, trim($_POST['sobrenome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] != 0) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}


$sql = "INSERT INTO usuario (nome, sobrenome, usuario, email, telefone, senha) 
VALUE ('$nome', '$sobrenome', '$usuario', '$email', '$telefone', '$senha')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>