<?php
$numero = $_GET['numero'];
require_once('conexao.php');
$sql = "DELETE FROM ALUNO WHERE NUMERO = $numero";
$r = mysqli_query($con, $sql);
if($r){
    echo "deletado com sucesso";
}else{echo "Erro";}

?>