<?php
include "database.php";

$id_produto = $_GET ['id'];

$sql_excluir_id = "DELETE FROM produtos_esportes WHERE produtos_esportes.id = '$id_produto'";
echo "<h3>" . $sql_excluir_id . "<h3>";

if(mysqli_query($conexao,$sql_excluir_id))
{
    header("location:administrar_produtos.php");
}
else
{
    echo "Erro ao excluir o cadastro!";
}