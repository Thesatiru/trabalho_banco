<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cadastrar_produto.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&display=swap" rel="stylesheet">
</head>
<body>
<h3 id="titulo">Adicione um novo produto a loja!</h3>
    <form action="cadastrar_produto.php" method="post">

        <label for="nome_produto">Nome do produto:</label>
        <input type="text" name="nome_produto" id="nome">
        <label for="preco_produto">Informe o preço do produto:</label>
        <input type="text" name="preco_produto" id="">
        <label for="descricao_produto">Descrição do produto:</label>
        <input type="text" name="descricao_produto" id="">
        <label for="estoque">Informe a quantidade no estoque:</label>
        <input type="text" name="estoque" id="">
        <input type="submit" value="Adicionar produto" id="adicionar">
        <a href="http://localhost/trabalho_banco/home_administrador.php">Voltar</a>
    </form>
</body>
</html>