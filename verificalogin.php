<?php
include 'conexao.php';
$email = $_POST['ema'];
$senha = $_POST['senha'];

if (isset($_POST['aluno'])) {

    $pegar =  "SELECT * FROM tbAluno WHERE email = '$email' AND senha = '$senha' ";
    $resultado = mysqli_query($con, $pegar);
    $linha = mysqli_num_rows($resultado);
    
    
    
    if ($linha>0){
        $_SESSION["usuario_logado"] = true;
        header("Location: turma_Al.php?email=" . urlencode($email)); 
        
    
    }
    else{
        header("Location: login.html"); 
    }
};

if (isset($_POST['professor'])) {

    
    $pegar = "SELECT * FROM tbProfessor WHERE emailpf = '$email' AND senhapf = '$senha'";
    $resultado = mysqli_query($con, $pegar);
    $linha = mysqli_num_rows($resultado);
    mysqli_close($con);
    
    
    if ($linha>0){
        $_SESSION["usuario_logado"] = true;
        header("Location: turma_Pr.php?email=" . urlencode($email)); 
      
    
    }
    else{
        header("Location: login.html"); 
       
    }
};
