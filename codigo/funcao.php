<?php

function salvarCadastro($conexao, $nome, $endereco, $email, $telefone, $cpf)
{
    $sql = "INSERT INTO tb_pessoa (nome, endereco, email, telefone, cpf) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($stmt, "sssss", $nome, $endereco, $email, $telefone, $cpf);

    if (mysqli_stmt_execute($stmt)) {
        $id = mysqli_insert_id($conexao);
        mysqli_stmt_close($stmt);
        return $id;
    } else {
        mysqli_stmt_close($stmt);
        return false;
    }
}

?>