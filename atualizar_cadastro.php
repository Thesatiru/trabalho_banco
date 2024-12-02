<?php 
include "database.php";

$id_cliente = $_POST ['id_cliente'];
$nome_cliente = $_POST ['nome_cliente'];
$email_cliente = $_POST ['email_cliente'];
$senha_cliente = $_POST ['senha_cliente'];
$telefone_cliente = $_POST ['telefone_cliente'];

$sql_update = "UPDATE cadastro_cliente SET nome_cliente = '$nome_cliente', email_cliente = '$email_cliente', senha_cliente = '$senha_cliente', telefone_cliente = '$telefone_cliente' 
WHERE cadastro_cliente.id = '$id_cliente'";

if (mysqli_query($conexao,$sql_update))
{
    header("location:administrar_cadastro.php");
}
else
{
    echo "erro ao cadastrar";
}