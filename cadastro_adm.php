<?php 
include "database.php";

$nome_adm = $_POST ["nome_adm"];
$email_adm = $_POST ["email_adm"];
$senha_adm = $_POST ["senha_adm"];
$telefone_adm = $_POST ["telefone_adm"];

$sql = "INSERT INTO cadastro_administração (nome_adm, email_adm, senha_adm, telefone_adm) 
VALUES ('$nome_adm', '$email_adm', '$senha_adm', '$telefone_adm')";

    if (mysqli_query($conexao,$sql))
    {
        header("location:http://localhost/trabalho_banco/home_administrador.php");
    }
    else
    {
        echo "Erro ao cadastrar";
    }

