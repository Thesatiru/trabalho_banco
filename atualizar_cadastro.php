<?php 
include "database.php";

$id_adm = $_POST ['id_adm'];
$nome_adm = $_POST ['nome_adm'];
$email_adm = $_POST ['email_adm'];
$senha_adm = $_POST ['senha_adm'];
$telefone_adm = $_POST ['telefone_adm'];

$sql_update = "UPDATE cadastro_administração SET nome_adm = '$nome_adm', email_adm = '$email_adm', senha_adm = '$senha_adm', telefone_adm = '$telefone_adm' 
WHERE cadastro_administração.id = '$id_adm'";

if (mysqli_query($conexao,$sql_update))
{
    header("location:administrar_cadastro.php");
}
else
{
    echo "erro ao cadastrar";
}