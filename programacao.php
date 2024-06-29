<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercícios</title>
    <link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<div class= 'linha'>  
<?php 

$email = $_GET['ema'];
$senha = $_GET['sen'];
include 'conexao.php';



    global $con; 
    $consultar = "SELECT * FROM Aluno WHERE email = '$email' ";
    $resultado = mysqli_query($con, $consultar);
    $linha = mysqli_num_rows($resultado);
    

if ($linha>0) 

{
$pegar = "SELECT * FROM Aluno WHERE email = '$email'";
$resultado1 = mysqli_query($con, $pegar);
$escrever1=mysqli_fetch_array($resultado1);
$id = $escrever1['id'];


$listar = "SELECT * FROM Exercicios WHERE id_a = $id and dia = 'SEGUNDA'";
$rs = mysqli_query($con, $listar);

if (mysqli_num_rows($rs) > 0) {
    $escrever = mysqli_fetch_array($rs);
    $seg = "$escrever[1]<p>$escrever[2]</p><p>$escrever[3]</p>";
} else {
   
    $seg =  "Nenhum Exercício Encontrado ";
}






$listar = "SELECT * FROM Exercicios WHERE id_a = $id and dia = 'TERÇA'";
$rs = mysqli_query($con, $listar);




if (mysqli_num_rows($rs) > 0) {
    $escrever2 = mysqli_fetch_array($rs);
    $ter = "$escrever2[1]<p>$escrever2[2]</p><p>$escrever2[3]</p>";
} else {
   
    $ter =  "Nenhum Exercício Encontrado ";
}


$listar = "SELECT * FROM Exercicios WHERE id_a =$id and dia = 'QUARTA'";
$rs = mysqli_query($con, $listar);

if (mysqli_num_rows($rs) > 0) {
    $escrever3 = mysqli_fetch_array($rs);
    $qua = "$escrever3[1]<p>$escrever3[2]</p><p>$escrever3[3]</p>";
} else {
   
    $qua =  "Nenhum Exercício Encontrado ";
}






$listar = "SELECT * FROM Exercicios WHERE id_a =$id and dia = 'QUINTA'";
$rs = mysqli_query($con, $listar);



if (mysqli_num_rows($rs) > 0) {
    $escrever4 = mysqli_fetch_array($rs);
    $qui = "$escrever4[1]<p>$escrever4[2]</p><p>$escrever4[3]</p>";
} else {
   
    $qui =  "Nenhum Exercício Encontrado ";
}



$listar = "SELECT * FROM Exercicios WHERE id_a = $id and dia = 'SEXTA'";
$rs = mysqli_query($con, $listar);

if (mysqli_num_rows($rs) > 0) {
    $escrever5 = mysqli_fetch_array($rs);
    $sex = "$escrever5[1]<p>$escrever5[2]</p><p>$escrever5[3]</p>";
} else {
   
    $sex =  "Nenhum Exercício Encontrado ";
}



$listar = "SELECT * FROM Exercicios WHERE id_a = $id and dia = 'SABADO'";
$rs = mysqli_query($con, $listar);

if (mysqli_num_rows($rs) > 0) {
    $escrever6 = mysqli_fetch_array($rs);
    $sab = "$escrever6[1]<p>$escrever6[2]</p><p>$escrever6[3]</p>";
} else {
   
    $sab =  "Nenhum Exercício Encontrado ";
}



$listar = "SELECT * FROM Exercicios WHERE id_a = $id and dia = 'DOMINGO'";
$rs = mysqli_query($con, $listar);


if (mysqli_num_rows($rs) > 0) {
    $escrever7 = mysqli_fetch_array($rs);
    $dom = "$escrever7[1]<p>$escrever7[2]</p><p>$escrever7[3]</p>";
} else {
   
    $dom = "Nenhum Exercício Encontrado ";
}



$ordem = [$seg, $ter, $qua, $qui, $sex, $sab, $dom];

foreach ($ordem as $dia) { 
    echo "<div class='resultadoConsulta'>";
    echo $dia; 
    echo "</div>";
};

    }
else {

    header("Location: login2.php"); 
    
}




?>
</div>
</body>
</html>