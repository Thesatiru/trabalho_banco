<?php
include "database.php";

$id_cliente = $_GET ['id'];

$sql_excluir_id = "DELETE FROM cadastro_cliente 
    WHERE cadastro_cliente . id = '$id_cliente'";
echo "<h3>" . $sql_excluir_id . "<h3>";

if(mysqli_query($conexao,$sql_excluir_id))
{
    header("location:administrar_cadastro.php");
}
else
{
    echo "Erro ao excluir o cadastro!";
}
