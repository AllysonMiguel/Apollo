<?php

include("Banco/conexao.php");

if (isset($_POST['nome']) && isset($_POST['data']) && isset($_POST['email']) && isset($_POST['senha'])) {
    $nome  = $_POST['nome'];
    $data  = $_POST['data'];  
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO tblUsuario (usuNome, usuData, usuEmail, usuSenha) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssss", $nome, $data, $email, $senha_hash);

    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
        header("Location: login.php");
        exit();
    } else {
        echo "Erro ao cadastrar: " . $mysqli->error;
    }
}
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="cadastro">

         <video autoplay muted loop class="video-bg">
          <source src="vid/114055-700074063_large.mp4"
          type="video/mp4">
        </video>
    <form action="cadastrar.php" method="POST">

         <a href="index.php" class="botao-home-cadastro">
            <i class="fas fa-arrow-left"></i>
        </a>

        <p>
            Faça seu Cadastro
        </p>

        

        <label for="nome">Nome<input type="text" id="nome" name="nome"
        /></label>

        <label for="data">Data<input type="date" id="data" name="data"
        /></label>

        <label for="email">Email<input type="email" id="email" name="email"
        /></label>

        <label for="senha">Senha<input type="password" id="senha" name="senha"
        /></label>
        <button type="submit" >Cadastrar</button>
        <a href="#">Esqueci minha senha</a>
        <a href="login.php">Já sou cadastrado</a>






    </form>
</body>
</html>