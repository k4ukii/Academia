<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index_files/sty.css">
    <link rel="stylesheet" href="email.css">
    <title>email</title>
</head>
<body>
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $to = "manuelle.silva01@etec.sp.gov.br";
    $subject = "Solicitação de Contato";
    $message = "Nome: $nome\nEmail: $email\nTelefone: $telefone";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<div class = 'texto'>";
        echo "<p>Solicitação Enviada com Sucesso!</p>";
        echo "<p>Entraremos em Contato Dentro de Minutos!</p><br>";
        echo "</div>";
        
        echo "<img src='img/mulheres.png'>";

    } else {
        echo "<div class = 'texto'>";
        echo "<p>Falha ao Solicitar Matricula :(!</p>";
        echo "<p>Tente Novamente ou Nos Contate em 'Contatos'!</p><br>";
        echo "</div>";
        
        echo "<img src='img/mulheres.png'>";
    }
}
?>
</body>
</html>