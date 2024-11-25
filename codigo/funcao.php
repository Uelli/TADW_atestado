<?php
/**
 * Insere os dados de um novo cadastro no banco de dados.
 * 
 * Esta função recebe os dados de um usuário (nome, endereço, e-mail, telefone, CPF)
 * e os insere na tabela `tb_pessoa` do banco de dados. 
 * 
 * Caso a inserção seja bem-sucedida, a função retorna o ID gerado automaticamente
 * para o novo registro. Caso contrário, retorna `false`.
 * 
 * @param mysqli $conexao   A conexão ativa com o banco de dados.
 * @param string $nome      O nome do usuário a ser cadastrado.
 * @param string $endereco  O endereço do usuário a ser cadastrado.
 * @param string $email     O e-mail do usuário a ser cadastrado.
 * @param string $telefone  O telefone do usuário a ser cadastrado.
 * @param string $cpf       O CPF do usuário a ser cadastrado.
 * 
 * @return int|false Retorna o ID do registro inserido ou `false` em caso de erro.
 * 
 * @package Cadastro
 * @author Wellison Ferreira Da Silva

 */
function salvarCadastro($conexao, $nome, $endereco, $email, $telefone, $cpf)
{
    // Consulta SQL preparada para inserir os dados na tabela 'tb_pessoa'.
    $sql = "INSERT INTO tb_pessoa (nome, endereco, email, telefone, cpf) VALUES (?, ?, ?, ?, ?)";
    
    // Prepara a consulta SQL usando a conexão fornecida.
    $stmt = mysqli_prepare($conexao, $sql);
    
    // Vincula os parâmetros à consulta SQL, especificando que todos são strings.
    mysqli_stmt_bind_param($stmt, "sssss", $nome, $endereco, $email, $telefone, $cpf);

    // Executa a consulta preparada.
    if (mysqli_stmt_execute($stmt)) {
        // Se a execução for bem-sucedida, obtém o ID do último registro inserido.
        $id = mysqli_insert_id($conexao);
        
        // Fecha a declaração preparada após a execução.
        mysqli_stmt_close($stmt);
        
        // Retorna o ID do novo registro inserido.
        return $id;
    } else {
        // Em caso de erro, fecha a declaração e retorna `false`.
        mysqli_stmt_close($stmt);
        return false;
    }
}
?>