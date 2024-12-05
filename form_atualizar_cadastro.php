<?php
include "database.php";
$id_adm = $_GET ['id'];
$sql_por_id = "SELECT * FROM cadastro_administração WHERE cadastro_administração.id = '$id_adm'";
$resultado_consulta_por_id = mysqli_query($conexao,$sql_por_id);
$dados_id = mysqli_fetch_assoc($resultado_consulta_por_id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/atualizar_cadastro.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&display=swap" rel="stylesheet">
</head>
<body>
    <H3 id="titulo">Formulário de  atualização do cadastro</H3>
    <form action="atualizar_cadastro.php" method="post">
    <input type="hidden" name="id_adm" value= "<?php echo $dados_id['id'] ?>">
    <label for="nome_cliente">Digite o nome:</label>
    <input type="text" name="nome_adm" id="" value= "<?php echo $dados_id['nome_adm'] ?>">
    <label for="email_cliente">Digite o Email:</label>
    <input type="text" name="email_adm" id=""value= "<?php echo $dados_id['email_adm'] ?>">
    <label for="senha_cliente">Digite a senha:</label>
    <input type="text" name="senha_adm" id=""value= "<?php echo $dados_id['senha_adm'] ?>">
    <label for="telefone_cliente">Digite o telefone:</label>
    <input type="text" name="telefone_adm" id=""value= "<?php echo $dados_id['telefone_adm'] ?>">
    <input type="submit" value="Atualizar" id="atualizar">
    <a href="http://localhost/trabalho_banco/administrar_cadastro.php">Voltar</a>
    </form>   
</body>
</html>