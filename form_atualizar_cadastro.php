<?php
include "database.php";
$id_cliente = $_GET ['id'];
$sql_por_id = "SELECT * FROM cadastro_cliente WHERE cadastro_cliente.id = '$id_cliente'";
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
    <H3>Formulário de  atualização do cadastro</H3>
    <form action="atualizar_cadastro.php" method="post">
    <input type="hidden" name="id_cliente" value= "<?php echo $dados_id['id'] ?>">
    <label for="nome_cliente">Digite o nome:</label>
    <input type="text" name="nome_cliente" id="" value= "<?php echo $dados_id['nome_cliente'] ?>">
    <label for="email_cliente">Digite o Email:</label>
    <input type="text" name="email_cliente" id=""value= "<?php echo $dados_id['email_cliente'] ?>">
    <label for="senha_cliente">Digite a senha:</label>
    <input type="text" name="senha_cliente" id=""value= "<?php echo $dados_id['senha_cliente'] ?>">
    <label for="telefone_cliente">Digite o telefone:</label>
    <input type="text" name="telefone_cliente" id=""value= "<?php echo $dados_id['telefone_cliente'] ?>">
    <input type="submit" value="Atualizar">



    </form>
    
</body>
</html>