<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="turmaA.css">
    <link rel="stylesheet" href="./index_files/sty.css">
</head>
<body >
<header>
        <div class="menu-content">
            <h1 class="logo">Strong Fit</h1>
            <nav class="header-menu">
                <ul class="list-itens">
                <li><a href="index.html">home</a></li>
                <li><a href="login.html">login</a></li>
                    <li><a href="time.html">equipe</a></li>
                    <li><a href="planos.html">matricule-se</a></li>
                    <li><a href="contato.html">contatos</a></li>
                </ul>
            </nav>
        </div>
    </header>


<?php
/*create table tbTurma(
    idTurma int primary key auto_increment
    , descricao varchar(30)
    , horarioInicio time
    , horarioTermino time
    , idProfessor int 
    , foreign key (idProfessor) references tbProfessor(idprofessor)
    );
     
    create table tbMatricula(
    idMatricula  int primary key auto_increment
    , dataMatricula date
    , idAluno int
    , idTurma int
    , foreign key (idAluno) references tbAluno(idAluno)
    , foreign key (idTurma) references tbTurma(idTurma)
    );
    
    create table tbProfessor(
        idProfessor int primary key auto_increment
        , nome varchar(40) not null
        , telefone char(14)
        , celular char(15)
        , emailpf varchar(40) not null unique
        , senhapf varchar(8) not null unique
        );
         */
    
include 'conexao.php';

$email= urldecode($_GET['email']);


$pegar = "SELECT * FROM tbProfessor WHERE emailpf = '$email'";
$resultado1 = mysqli_query($con, $pegar);
$escrever1=mysqli_fetch_array($resultado1);
$id_prof = $escrever1['idProfessor'];
$nome = $escrever1['nome'];

   $sql_c = "SELECT idTurma, descricao, horarioInicio, horarioTermino FROM tbTurma WHERE idProfessor = '$id_prof'";
   $res = mysqli_query($con, $sql_c);
   $linha = mysqli_num_rows($res);

   echo "<div class='espaco'";
echo "<a class='a1'> </a> ";
echo "<a class='a1'>Olá,</a> ";
echo "<a class='a2'>$nome</a>";
echo "<a class='a1'> aqui estão as turmas as quais você leciona!</a> ";
echo "</div>";


   echo "<div class='organizar'>";
if ($linha>0) {

    while ($write = mysqli_fetch_array($res)) {
       
        $idTurma = $write[0];
        $descricao = $write[1];
        $horarioInicio = $write[2];
        $horarioTermino = $write[3];
        
        
        echo "<div class='resultadoConsulta2'>";
        echo "<p>ID da Turma: $idTurma</p>";
        echo "<p>Descrição: $descricao</p>";
        echo "<p>Horário de Início: $horarioInicio</p>";
        echo "<p>Horário de Término: $horarioTermino</p>";
        echo "</div>";
    }}
    echo "</div>";

if($linha == 0) {
    echo "<div class='organizar'>";
    echo "<div class='resultadoConsulta2'>";
    echo "Nenhuma turma encontrada.";
    echo "</div>";
    echo "</div>";

} 
   
   
    
 
?>
</body>
</html>