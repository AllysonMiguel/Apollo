<?php
include("Banco/conexao.php");

$erro = "";

if (isset($_POST['email']) && isset($_POST['senha'])) {
    if (strlen($_POST['email']) == 0) {
        $erro = "Preencha todos os campos!";
    } else if (strlen($_POST['senha']) == 0) {
        $erro = "Preencha todos os campos!";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $_POST['senha'];

        $sql_code = "SELECT * FROM tblUsuario WHERE usuEmail = '$email'";
        $sql_query = $mysqli->query($sql_code) or die("Erro na SQL: " . $mysqli->error);

        if ($sql_query->num_rows == 1) {

             $usuario = $sql_query->fetch_assoc();

        
           

            if (password_verify($senha, $usuario['usuSenha'])) {
                if (!isset($_SESSION)) {
                    
                    session_start();
                }

                $_SESSION['id'] = $usuario['idUsuario'];
                $_SESSION['nome'] = $usuario['usuNome'];
                $_SESSION['login_sucesso'] = true; 
                header("Location: index.php");
                exit;
            } else {
                $erro = "Dados incorretos!";
            
            }
        } else {
            $erro = "Dados incorretos!";
         
        }
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
<body class="login">
    <video autoplay muted loop class="video-bg">
          <source src="vid/12137318-hd_1920_1080_25fps.mp4"
          type="video/mp4">
        </video>
    <form action="login.php" method="POST">

        <a href="index.php" class="botao-home">
            <i class="fas fa-arrow-left"></i>
        </a>
       
        <p>
            Faça seu login
        </p>
        <p id = "erro">
            <?php echo $erro;   ?>
        </p>
        <label for="email">Email<input type="email" name="email"
        /></label>
        <label for="senha">Senha<input type="password" name="senha"
        /></label>
        <button type="submit">Entrar</button>
        <a href="#">Esqueci minha senha</a>
        <a href="cadastrar.php">Cadastrar</a>


    </form>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>