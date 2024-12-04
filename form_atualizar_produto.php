<?php
include "database.php";
$id_produto = $_GET ["id"];
$sql_por_id = "SELECT * FROM produtos_esportes WHERE produtos_esportes.id = '$id_produto'";

$resultado_consulta_por_id = mysqli_query($conexao,$sql_por_id);

$dados_id = mysqli_fetch_assoc($resultado_consulta_por_id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="atualizar_produto.php" method="post">
        
        <input type="hidden" name="id_produto" value= "<?php echo $dados_id['id'] ?>">
        <label for="nome_produto">Nome do protudo:</label>
        <input type="text" name="nome_produto" id="" value= "<?php echo $dados_id['nome_produto'] ?>">
        <label for="preco_produto">Informe o preço do produto:</label>
        <input type="text" name="preco_produto" id="" value= "<?php echo $dados_id['preco_produto'] ?>">
        <label for="descricao_produto">Descrição do produto:</label>
        <input type="text" name="descricao_produto" id="" value= "<?php echo $dados_id['descricao_produto'] ?>">
        <label for="estoque">Informe a quantidade no estoque:</label>
        <input type="text" name="estoque" id="" value= "<?php echo $dados_id['estoque'] ?>">

        <input type="submit" value="Atualizar">
    </form>
    
</body>
</html>


