<?php 
include "database.php";
$sql_listar = "SELECT * FROM cadastro_administração";
$resultado = mysqli_query($conexao,$sql_listar);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/table_cadastros.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" rel="stylesheet">
</head>
<body>
    <a href="http://localhost/trabalho_banco/home_administrador.php?" id="voltar">Voltar</a>
    <br>
    <table id="customers">
        <thead>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Senha</th>
            <th>Telefone</th>
            <th>Atualizar</th>
            <th>Excluir</th>
        </thead>
        <tbody>
            <?php
            while ($dados = mysqli_fetch_assoc($resultado)):
            ?>
            <tr>
                <td><?php echo $dados ["nome_adm"]?></td>
                <td><?php echo $dados ["email_adm"]?></td>
                <td><?php echo $dados ["senha_adm"]?></td>
                <td><?php echo $dados ["telefone_adm"]?></td>
                <td><a href="http://localhost/trabalho_banco/form_atualizar_cadastro.php?id= <?php echo $dados ['id']; ?>" >Atualizar</a></td>
                <td><a href="excluir.php?id=<?php echo $dados['id'];?>">Excluir</a></td>
            </tr>
        </tbody>
            <?php endwhile; ?>
    </table>
</body>
</html>