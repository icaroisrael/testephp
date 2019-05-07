<!DOCTYPE html>
<html>
<head>
   <style>
    h1{background-color: green;}
    h2{background-color: orange; font-size: 30px;}
    h3{background-color: red; font-size: 30px;}
   </style>
</head>
<body>

<?php
    $nome = $_GET['nome'];
    $n1 = $_GET['poo'];
    $n2 = $_GET['js'];

    $media  = ($n1 + $n2) / 2;  
    if($media >= 6){
        echo '<h1>' .$nome." Aprovado ". " Media = ". $media .   '</h1>';
    }else if($media > 3 && $media < 6){
        echo '<h2>' .$nome." Recuperação ". " Media = ". $media .   '</h2>';
    }else{
        echo '<h3>' .$nome." Reprovado ". " Media = ". $media .   '</h3>';
    } 

?>
    
</body>
</html>

