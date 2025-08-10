<?php
  include("Banco/conexao.php");
  session_start();
  $logado = isset($_SESSION['id']); 
  $banner = "";

  if($logado){
    $banner = "Poste sua obra";
    
  }else{
     $banner = "Acesse já";
  }

  if (isset($_SESSION['login_sucesso']) && $_SESSION['login_sucesso'] === true) {
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Login realizado!',
                text: 'Bem-vindo, " . $_SESSION['nome'] . "!',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        });
    </script>";
    unset($_SESSION['login_sucesso']); // 🔹 Para não repetir o alerta ao atualizar
}










?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apollo</title>
    <link rel="stylesheet" href="style.css" />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
    </style>
    
  </head>

  <body class="index">
    <?php
    if($logado){
      include("includ/nav-bar2.php");

      


    }else{
      include("includ/nav-bar.php");


    }
    


  ?>
    
    <div class="banner">
   
        <video autoplay muted loop class="video-bg">
          <source src="vid/12137318-hd_1920_1080_25fps.mp4"
          type="video/mp4">
        </video>
    
      <h1>Da sua imaginação para o mundo</h1>

      <a href="login.php"><button><?php echo $banner ?></button></a>
    </div>

    <h2>Categorias</h2>

    <div id="container2" class="container2">
      
      <a href="poesia.html" class="box a">
        <p>Literatura</p>
        </a>

    <a href="cinema.html" class="box b">
        <p>Cinema</p>
        </a>
      <a href="fotografia.html" class="box c">
        <p>Fotografia</p>
        </a>
        <a href="desenho.html" class="box d">
        <p>Pintura</p>
        </a>
        <a href="jogo.html" class="box e">
        <p>Jogos</p>
        </a>
        <a href="musica.html" class="box f">
        <p>Música</p>
        </a>
      
    </div>

    <div id="container4" class="container4">
      <div class="texto-cont4">
        <h4>Transforme sua visão em arte</h4>

        <p>
          Apollo é a rede social focada na colaboração e divulgação de obras e
          autores independentes. Vindo dos ramos artísticos relevantes e
          abrangentes da atualidade: Música, Literatura, Cinema, Pintura,
          Desenvolvimento de Jogos etc... Deixe fluir a arte que corre nas veias
          da humanidade, junte-se nós nessa jornada com os desafios mensais,
          sistema de fama e divulgação, interação criativa e muito mais.
          APOLLO, a arte perto de você.
        </p>
      </div>

      <img src="img/c.jpg" alt="" />
    </div>

    <div id="container8" class="container8">
      <div class="texto-cont8">
        <h6>Sobre nós</h6>
        <p>
          Nós somos um grupo de alunos da Etec Alfredo Barros Santos, estamos
          no segundo ano do curso técnico de Desenvolvimento de Sistemas, e 
          fazendo parte do projeto integrador com a construção e criação do site
          Apollo, que é um site para a divulgação e exposição de obras de
          diversos usuários.
        </p>
      </div>

      <div class="img-cont8">
        <img src="img/pexels-fauxels-3182796.jpg" alt="" />
      </div>
    </div>

    <h5 class="Participantes">
      Participantes
    </h5>

    <div class="container16">
      <div class="pessoa1"></div>
      <div class="pessoa2"></div>
      <div class="pessoa3"></div>
      <div class="pessoa4"></div>
      <div class="pessoa5"></div>

    
      
    </div>





    <footer class="footer">
      <div class="footer-container">
        <div class="footer-section about">
          <h3>Apollo</h3>
          <p>Da sua imaginação para o mundo.</p>
        </div>
        <div class="footer-section links">
          <h4>Links úteis</h4>
          <ul>
            <li><a href="index.html">Início</a></li>
            <li><a href="#container2">Categorias</a></li>
            <li><a href="#container4">Projeto</a></li>
            <li><a href="#container8">Sobre nós</a></li>
          </ul>
        </div>
        <div class="footer-section contact">
          <h4>Participantes</h4>
          <p>Allyson, Gustavo, Lais, Kauã, Aaron.</p>

          
        </div>
      </div>
      <div class="footer-bottom">
        © 2025 Apollo. Todos os direitos reservados.
      </div>
    </footer>

    <script src="Script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>





