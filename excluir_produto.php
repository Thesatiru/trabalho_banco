<?php
include "database.php";

$id_produto = $_POST ["id"];

$sql_excluir_produto = "DELETE FROM produtos_esportes WHERE produtos_esportes.id = '$id_produto'";
echo "<h3>" . $sql_excluir_produto . "<h3>";
mysqli_query($conexao,$sql_excluir_produto);

if(mysqli_query($conexao,$sql_excluir_produto))
{
    header("location:http://localhost/trabalho_banco/administrar_produtos.php/");
}
else
{
    echo "Algo deu errado!";
}