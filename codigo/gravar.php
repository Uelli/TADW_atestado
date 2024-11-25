<?php
/**
 * Processa os dados do formulário de cadastro de usuário.
 * 
 * Este script recebe os dados do formulário enviado via método POST, valida os dados e
 * os insere em um banco de dados. Após a inserção, o usuário é redirecionado para
 * outra página (pagina2.html). Caso haja falhas na validação, o script exibe mensagens 
 * de erro relacionadas aos campos obrigatórios.
 * 
 * @package Cadastro
 * @author Wellison Ferreira da Silva
 * @version 1.0
 */

// Inclusão do arquivo de conexão com o banco de dados.
require_once 'conexao.php'; 

// Inclusão do arquivo de funções adicionais.
require_once 'funcao.php'; 

// Coleta dos dados do formulário enviados via método POST.
$nome = $_POST['nome'];        
$endereco = $_POST['endereco']; 
$email = $_POST['email'];       
$telefone = $_POST['telefone']; 
$cpf = $_POST['cpf'];           

// Chama a função salvarCadastro para inserir os dados no banco de dados.
salvarCadastro($conexao, $nome, $endereco, $email, $telefone, $cpf);

// Redireciona o usuário para a página de confirmação ou outro local após o cadastro.
header('Location: pagina2.html'); 
exit; 
?>