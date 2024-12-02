<?php
include "database.php";

$id_adm = $_GET ['id'];

$sql_excluir_id = "DELETE FROM cadastro_administração
    WHERE cadastro_administração . id = '$id_adm'";
echo "<h3>" . $sql_excluir_id . "<h3>";

if(mysqli_query($conexao,$sql_excluir_id))
{
    header("location:administrar_cadastro.php");
}
else
{
    echo "Erro ao excluir o cadastro!";
}
