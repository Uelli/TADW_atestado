<?php
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];

require_once 'conexao.php';
require_once "funcao.php";

salvarCadastro($conexao, $nome, $endereco, $email, $telefone, $cpf);
header('Location: index.html');
exit;
?>