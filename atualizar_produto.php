<?php
include "database.php";

$id_produto = $_POST ['id_produto'];
$nome_produto = $_POST ['nome_produto'];
$preco_produto = $_POST ['preco_produto'];
$descricao_produto = $_POST ['descricao_produto'];
$estoque = $_POST ['estoque'];

$sql_update = "UPDATE produtos_esportes SET nome_produto = '$nome_produto', preco_produto = '$preco_produto', descricao_produto = '$descricao_produto', estoque = '$estoque' 
WHERE produtos_esportes.id = '$id_produto'";

if (mysqli_query($conexao,$sql_update))
{
    header("location:administrar_produtos.php");
}
else
{
    "Erro ao cadastrar";
}