<?php
include "database.php";

$id_cliente = $_POST ["id"];
$nome_cliente = $_POST ["nome_cliente"];
$email_cliente = $_POST ["email_cliente"];
$senha_cliente = $_POST ["senha_cliente"];
$telefone_cliente = $_POST ["telefone_cliente"];

 $sql_update = "UPDATE cadastro_cliente SET nome_cliente = '$nome_cliente', email_cliente = '$email_cliente', senha_cliente = '$senha_cliente', telefone_cliente = '$telefone_cliente'
WHERE cadastro_cliente . id = '$id_cliente' ";
    if (mysqli_query($conexao,$sql_update))
    {
        header("location:administrar_cadastro.php");
    }
    else
    {
        echo "Algo deu errado, tente novamente mais tarde!";
    }
?>


<?php
include "database.php";
   
$id_cliente = $_GET ['id'];

$sql_por_id =  "SELECT * FROM cadastro_cliente
    WHERE cadastro_cliente . id = '$id_cliente'";

$resultado_consulta_id =   mysqli_query($conexao, $sql_por_id);

$dados_id = mysqli_fetch_assoc($resultado_consulta_id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Formulário de atualizar cadastro do cliente</h3>
    <div id="meuID"></div>
    <form action="atualizar_cadastro.php" method="post">
        <label for="nome_cliente">Digite o seu nome:</label>
        <input type="text" name="nome_cliente" id="nome_cliente" value= "<?php echo $dados_id ['nome_cliente']?>">
        <label for="email_cliente">Digite o seu Email:</label>
        <input type="text" name="email_cliente" id="email_cliente"value= "<?php echo $dados_id ['email_cliente']?>">
        <label for="senha_cliente">Digite a sua senha:</label>
        <input type="text" name="senha_cliente" id="senha_cliente"value= "<?php echo $dados_id ['senha_cliente']?>">
        <label for="telefone_cliente">Digite o seu telefone:</label>
        <input type="text" name="telefone_cliente" id="telefone_cliente"value= "<?php echo $dados_id ['telefone_cliente']?>">
        <input type="submit" value="Atualizar">
        
    </form>
</body>
</html>