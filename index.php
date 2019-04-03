<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
</head>
<body>


<form action="index.php" method="POST">
Login<input type="email" name="login"><br>
Senha<input type="password" name="senha"><br>
<input type="submit" value="Enviar">
</form>
   <?php
   if(isset($_POST['login'])){
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if($login == "israel" && $senha=="123"){
        header('Location:mulher.php');
    }else{
        header('Location:index.php');
    }
    
   }
  
    
            
   ?>
</body>
</html>