<?php
require_once 'conexao.php';
require_once "funcao.php";

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];


salvarCadastro($conexao, $nome, $endereco, $email, $telefone, $cpf);
header('Location: pagina2.html');
exit;
?>