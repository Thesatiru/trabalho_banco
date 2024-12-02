<?php
include "database.php";

$nome_produto = $_POST ["nome_produto"];
$preco_produto = $_POST ["preco_produto"];
$descricao_produto = $_POST ["descricao_produto"];
$estoque = $_POST ["estoque"];

$sql = "INSERT INTO produtos_esportes (nome_produto, preco_produto,descricao_produto, estoque) VALUES ('$nome_produto', '$preco_produto', '$descricao_produto', '$estoque')";
if (mysqli_query($conexao,$sql))
{
    header("location:http://localhost/trabalho_banco/home_administrador.php");
}
else
{
    echo "Algo deu errado tente novamente mais tarde!";
}
