<?php

if (session_status() === PHP_SESSION_NONE) {

    session_start();

}
 
// Se o usuário já está logado, redirecionar para agenda.php

if (isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado'] === true) {

    header("Location: agenda.php");

    exit();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body >
<form method="post"  >
<div class="organizar">
<input type="text" placeholder="Insira seu email" name="ema" ><br>
<input type="text" placeholder="Insira sua senha" name="sen"><br>
<button  type="submit" class = "button"  name="login"  formaction="programacao.php">login</button></div>
    </form>
    
</body> </html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body >
    <form method="post">
        <div class="organizar">
            <input type="text" placeholder="Insira seu email" name="ema"><br>
            <input type="password" placeholder="Insira sua senha" name="sen"><br>
            <button type="submit" class="button" name="login">login</button>
        </div>
    </form>

    <?php
    include 'conexao.php';

    if (isset($_POST['login'])) {
        $email = $_POST['ema'];
        $senha = $_POST['sen'];

      
        verificar($email, $senha);
    }

    function verificar($email, $senha) {
        global $con; 
        $consultar = "SELECT * FROM Aluno WHERE email = '$email' AND senha = '$senha'";
        $resultado = mysqli_query($con, $consultar);
        $linha = mysqli_num_rows($resultado);
        
        
    }
    if ($linha > 1) {
            header("Location: programacao.php");
           
        } else {
            
        header("Location:login.php") ;
        
        }  
        mysqli_close($con);
    ?>
</body>
</html>