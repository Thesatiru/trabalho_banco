<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cadastro_adm.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&display=swap" rel="stylesheet">
<div id="fundo">
</head>
<body>
<h3 id="titulo">Cadastre-se como administrador!</h3>
    <form action="cadastro_adm.php" method="post">  
    <label for="nome_cliente">Digite o seu nome:</label>
    <input type="text" name="nome_adm" id="">
    <br><br>
    <label for="email_cliente">Digite o Email </label>
    <input type="text" name="email_adm" id="">
    <br><br>
    <label for="senha_cliente">Digite a sua senha:</label>
    <input type="text" name="senha_adm" id="">
    <br><br>
    <label for="telefone_cliente">Digite o seu telefone: </label>
    <input type="text" name="telefone_adm" id="">
    <br><br>
    <input type="submit" value="Cadastrar" id="cadastrar">
    </form>
</body>
</div>
</html>