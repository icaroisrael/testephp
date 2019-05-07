<!DOCTYPE html>
<html>
<head>    
    <title>Alunos</title>  
    <meta charset="UTF-8">  
</head>
<body>
    <?php include_once('index.html');  ?>
<table border="1px">
    <tr>
        <td>Número</td>
        <td>Nome</td>
        <td>Sexo</td>
        <td>Excluir</td>
        <td>Atualizar</td>
    <tr>
<?php 
include_once('conexao.php');
$sql = "SELECT * FROM ALUNO";
$r = mysqli_query($con, $sql);
if($r){
    while($result = mysqli_fetch_array($r)){?>
        <tr>
            <td><?php echo $result['numero']; ?></td>
            <td><?php echo $result['nome'];?></td>
            <td><?php echo $result['SEXO'];?></td>
            <td><a href="deletar.php?numero=<?php echo $result['numero']; ?> "> <img src="delete.gif"></a></td>
            <td><a href="editar.php?numero=<?php echo $result['numero']; ?> &nome=<?php echo $result['nome'] ?>&sexo=<?php echo $result['SEXO'];?>"> <img src="delete.gif"></a></td>
        </tr>
        <?php
    }
}
?>
</table>  
</body>
</html>