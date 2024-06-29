<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instrutor</title>
    <link rel="stylesheet" type="text/css" href="prof.css">
</head>
<body class="body">

<div class="centro">
<form method="post">

<button  type="submit" class = "btalunos"  name="listar">Alunos</button>

</form>

<Br>


<form method="post">
<button  type="submit" class = "button"  name="verificar">Verificar</button>
<input type="text" placeholder="Id Aluno" name="id">
</form>
<Br>

<form method="post">
<input type="text" placeholder="Id Aluno" name="id">

<label for="Semana">Dia</label>
    <select id="escolha" name="escolha">
        <option value="Segunda">Segunda</option>
        <option value="Terça">Terça</option>
        <option value="Quarta">Quarta</option>
        <option value="Quinta">Quinta</option>
        <option value="Sexta">Sexta</option>
        <option value="Sabado">Sabado</option>
        <option value="Domingo">Domingo</option>
    </select>

    <label for="Semana">Exercício</label>
    <select id="escolha" name="tipo">
        <option value="Inferior">Inferior</option>
        <option value="Superior">Superior</option>
    </select>

<input type="text" placeholder="Descrição" name="descri">
<button  type="submit" class = "button"  name="adicionar">Adicionar</button>
</form>
<div>
</body>
</html>


<?php 
include 'conexao.php';



if (isset($_POST['adicionar'])) {
    adicionar();
}

function adicionar() {
$id_aluno = $_POST['id']; 
$dia = $_POST['escolha'];
$tipo =$_POST['tipo'];
$detalhe = $_POST['descri'];
global $con;

switch ($dia){
case 'Segunda':


$cons = "SELECT * FROM Exercicios WHERE id_a = '$id_aluno' AND dia = '$dia'";
$rs = mysqli_query($con, $cons);
if (mysqli_num_rows($rs) > 0) {

$consultar = "UPDATE Exercicios SET tipo = '$tipo' SET descri ='$detalhe' WHERE id_a = '$id_aluno'";
$rs = mysqli_query($con, $consultar);
} else {
   
    $consultar = "INSERT INTO Exercicios VALUES = ('$id_aluno','$dia','$tipo','$detalhe')";
    $rs = mysqli_query($con, $consultar);
}

break;


case 'Terça':

    $cons = "SELECT * FROM Exercicios WHERE id_a = '$id_aluno' AND dia = '$dia'";
$rs = mysqli_query($con, $cons);
if (mysqli_num_rows($rs) > 0) {

$consultar = "UPDATE Exercicios SET tipo = '$tipo' SET descri ='$detalhe' WHERE id_a = '$id_aluno'";
$rs = mysqli_query($con, $consultar);
} else {
   
    $consultar = "INSERT INTO Exercicios VALUES = ('$id_aluno','$dia','$tipo','$detalhe')";
    $rs = mysqli_query($con, $consultar);
}

break;

case 'Quarta':
    $cons = "SELECT * FROM Exercicios WHERE id_a = '$id_aluno' AND dia = '$dia'";
    $rs = mysqli_query($con, $cons);
    if (mysqli_num_rows($rs) > 0) {
    
    $consultar = "UPDATE Exercicios SET tipo = '$tipo' SET descri ='$detalhe' WHERE id_a = '$id_aluno'";
    $rs = mysqli_query($con, $consultar);
    } else {
       
        $consultar = "INSERT INTO Exercicios VALUES = ('$id_aluno','$dia','$tipo','$detalhe')";
        $rs = mysqli_query($con, $consultar);
    }
    
break;

case 'Quinta':
    $cons = "SELECT * FROM Exercicios WHERE id_a = '$id_aluno' AND dia = '$dia'";
$rs = mysqli_query($con, $cons);
if (mysqli_num_rows($rs) > 0) {

$consultar = "UPDATE Exercicios SET tipo = '$tipo' SET descri ='$detalhe' WHERE id_a = '$id_aluno'";
$rs = mysqli_query($con, $consultar);
} else {
   
    $consultar = "INSERT INTO Exercicios VALUES = ('$id_aluno','$dia','$tipo','$detalhe')";
    $rs = mysqli_query($con, $consultar);
}

break;

case 'Sexta':
    $cons = "SELECT * FROM Exercicios WHERE id_a = '$id_aluno' AND dia = '$dia'";
    $rs = mysqli_query($con, $cons);
    if (mysqli_num_rows($rs) > 0) {
    
    $consultar = "UPDATE Exercicios SET tipo = '$tipo' SET descri ='$detalhe' WHERE id_a = '$id_aluno'";
    $rs = mysqli_query($con, $consultar);
    } else {
       
        $consultar = "INSERT INTO Exercicios VALUES = ('$id_aluno','$dia','$tipo','$detalhe')";
        $rs = mysqli_query($con, $consultar);
    }
    
break;

case 'Sabado':
    $cons = "SELECT * FROM Exercicios WHERE id_a = '$id_aluno' AND dia = '$dia'";
    $rs = mysqli_query($con, $cons);
    if (mysqli_num_rows($rs) > 0) {
    
    $consultar = "UPDATE Exercicios SET tipo = '$tipo' SET descri ='$detalhe' WHERE id_a = '$id_aluno'";
    $rs = mysqli_query($con, $consultar);
    } else {
       
        $consultar = "INSERT INTO Exercicios VALUES = ('$id_aluno','$dia','$tipo','$detalhe')";
        $rs = mysqli_query($con, $consultar);
    }
    
break;

case 'Domingo':
    $cons = "SELECT * FROM Exercicios WHERE id_a = '$id_aluno' AND dia = '$dia'";
    $rs = mysqli_query($con, $cons);
    if (mysqli_num_rows($rs) > 0) {
    
    $consultar = "UPDATE Exercicios SET tipo = '$tipo' SET descri ='$detalhe' WHERE id_a = '$id_aluno'";
    $rs = mysqli_query($con, $consultar);
    } else {
       
        $consultar = "INSERT INTO Exercicios VALUES = ('$id_aluno','$dia','$tipo','$detalhe')";
        $rs = mysqli_query($con, $consultar);
    }
    
break; 

}

mysqli_close($con);
}


// listando os alunos

if (isset($_POST['listar'])) {
    listar();
}

function listar() {
    global $con;

    $consultar = "SELECT * FROM Aluno ORDER BY id" ;
    $resultado = mysqli_query($con, $consultar);

    echo "<div id='resultadoConsulta' class='resultadoConsulta'>";
    while ($escrever = mysqli_fetch_array($resultado)) {
        echo "<p>{$escrever['id']}, {$escrever['nome']}</p>";
    }
    echo "</div>";
    mysqli_close($con);
    }

    //verificando os exercicios dos alunos existentes
if (isset($_POST['verificar'])) {
    verificar();
}

function verificar() {
global $con;
$id_aluno = $_POST['id'];
$consultar = "SELECT * from Exercicios where id= '$id_aluno'";
$resultado = mysqli_query($con, $consultar);

echo "<div id='resultadoConsulta' class='resultadoConsulta'>";
    while ($escrever = mysqli_fetch_array($resultado)) {
        echo "<p>{$escrever['seg']}, {$escrever['dom']}</p>";
    }
    echo "</div>";

mysqli_close($con);
}
?>
