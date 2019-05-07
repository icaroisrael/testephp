

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">    
    <title>Cadastro de Aluno</title>   
</head>
<body>
<?php 
    
include_once('index.html');
$numero = $_GET['numero'];
$nome = $_GET['nome'];
$sexo = $_GET['sexo'];
    
    
?>
    <form action="atualizar.php" method="POST">
        Número:<input type="text" name="n" size="2" value="<?php  echo $numero;?>"><br>
        Nome:<input type="text" name="nome" id="nome" size="60" value="<?php echo $nome;?>"><br>
        sexo: <input type="radio" name="sexo" value="M" <?php echo ($sexo == 'M') ? "checked" : null; ?>>M <input type="radio" name="sexo" value="F" <?php echo ($sexo == 'F') ? "checked" : null; ?>>F<br>
        <input type="submit" value="Editar">
    </form>
</body>
</html>