<?php 
include "database.php";

$nome_cliente = $_POST ["nome_cliente"];
$email_cliente = $_POST ["email_cliente"];
$senha_cliente = $_POST ["senha_cliente"];
$telefone_cliente = $_POST ["telefone_cliente"];

$sql = "INSERT INTO cadastro_cliente (nome_cliente, email_cliente, senha_cliente, telefone_cliente) 
VALUES ('$nome_cliente', '$email_cliente', '$senha_cliente', '$telefone_cliente')";

    if (mysqli_query($conexao,$sql))
    {
        echo "Cadastro realizado com sucesso";
    }
    else
    {
        echo "Erro ao cadastrar";
    }

