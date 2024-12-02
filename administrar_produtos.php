<?php
include "database.php";
$sql_lista = "SELECT * FROM produtos_esportes";
$resultado = mysqli_query($conexao,$sql_lista);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Produtos:</th>
            <th>Preço:</th>
            <th>Descrição:</th>
            <th>Estoque:</th>
        </thead>
        <tbody>
            <?php while($dados = mysqli_fetch_assoc($resultado)): ?>
            <td><?php echo $dados ["nome_produto"] ?></td>
            <td><?php echo $dados ["preco_produto"] ?></td>
            <td><?php echo $dados ["descricao_produto"] ?></td>
            <td><?php echo $dados ["estoque"] ?></td>
            <td><a href="http://localhost/trabalho_banco/form_atualizar_cadastro.php?id= <?php echo $dados ['id']; ?>" >Atualizar</a></td>
            <td><a href="excluir_produto.php?id=<?php echo $dados ['id']; ?>">Excluir</a></td>
        </tbody>
            <?php endwhile; ?>
    </table>
    
</body>
</html>