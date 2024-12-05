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
    <link rel="stylesheet" href="css/table_produto.css">
</head>
<body>
    <a href="http://localhost/trabalho_banco/home_administrador.php" id="voltar">Voltar</a>
    <table id="customers">
        <thead>
            <th>Produtos</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Estoque</th>
            <th>Atualizar</th>
            <th>Excluir</th>
        </thead>
        <tbody>
            <?php 
            while ($dados = mysqli_fetch_assoc($resultado)): 
            ?>
            <tr>
                <td><?php echo $dados ["nome_produto"] ?></td>
                <td><?php echo $dados ["preco_produto"] ?></td>
                <td><?php echo $dados ["descricao_produto"] ?></td>
                <td><?php echo $dados ["estoque"] ?></td>
                <div >
                    
                <td><a href="http://localhost/trabalho_banco/form_atualizar_produto.php?id= <?php echo $dados ['id']; ?>">Atualizar</a></td>
                <td><a href="excluir_produto.php?id=<?php echo $dados['id'];?>">Excluir</a></td>
                </div>
            </tr>
        </tbody>
            <?php endwhile; ?>
    </table>
</body>
</html>