<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastrar_produto.php" method="post">
        <label for="nome_produto">Nome do protudo:</label>
        <input type="text" name="nome_produto" id="">
        <label for="preco_produto">Informe o preço do produto:</label>
        <input type="text" name="preco_produto" id="">
        <label for="descricao_produto">Descrição do produto:</label>
        <input type="text" name="descricao_produto" id="">
        <label for="estoque">Informe a quantidade no estoque:</label>
        <input type="text" name="estoque" id="">

        <input type="submit" value="Adicionar produto">
    </form>
    
</body>
</html>