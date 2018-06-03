
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Advent+Pro" rel="stylesheet">
    <style type="text/css">
        #text1{
          font-family: 'Advent Pro', sans-serif;
        }
        .imgConserto{
          max-width: 100%;
          height: auto;
        }
        body{
          background-size: cover;
          background-position: center;
        }
        nav{
          padding-left: 15%;
          padding-right: 15%;
        }
        .parallax-container {
          min-height: 380px;
          line-height: 0;
          height: auto;
          color: rgba(255,255,255,.9);
        }
        .parallax-container .section {
          width: 100%;
        }
      </style>

    <title>SideForm</title>
  </head>

  <?php

    if($_SERVER['SERVER_ADDR'] == '::1'){
      $caminhoServidor = 'http://' . $_SERVER['SERVER_NAME'] . '/Geometria_Projeto';
    }else{
      $caminhoServidor = 'http://' . $_SERVER['SERVER_ADDR'] . '/Geometria_Projeto';
    }

  ?>

  <body>
    <!-- Conteúdo -->
    <ul id="dropdownConteudo" class="dropdown-content">
      <li><a href="#!">one</a></li>
      <li><a href="#!">two</a></li>
      <li class="divider"></li>
      <li><a href="#!">three</a></li>
    </ul>
    <!-- Exercícios -->
    <ul id="dropdownExercicios" class="dropdown-content">
      <li><a href="#!">one</a></li>
      <li><a href="#!">two</a></li>
      <li class="divider"></li>
      <li><a href="#!">three</a></li>
    </ul>
    <nav class=" blue nav-extended">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">&nbsp;SideForm</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="sidenav" id="mobile-demo">
          <li><a href="contato.php">Forúm</a></li>
        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="contato.php">Forúm</a></li>
          <!-- Dropdown Trigger -->
          <li>
            <a class="dropdown-trigger" href="#!" data-target="dropdownConteudo">
              Conteúdo
              <i class="material-icons right">arrow_drop_down</i>
            </a>
          </li>
          <li>
            <a class="dropdown-trigger" href="#!" data-target="dropdownExercicios">
              Exercícios
              <i class="material-icons right">arrow_drop_down</i>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <br><br>
          <h1 class="header center teal-text text-lighten-2">Bem-vindo</h1>
          <div class="row center">
            <h5 class="header col s12 light">A melhor forma para brincar com sólidos geométricos você encontra aqui.</h5>
          </div>
          <div class="row center">
            <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
          </div>
          <br><br>

        </div>
      </div>
      <div class="parallax">  <img class="imgConserto" src="<?php echo $caminhoServidor . '/view/img/cover.jpg'; ?>" ></div>
    </div>

    <div class="container">
      <div class="section">
        <div class="row">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text">
                <i class="large material-icons">access_time</i>
              </h2>
              <h5 class="center">Aprenda mais rápido</h5>
              <p class="light">Confira os assuntos estudados em sala de aula, só que agora, de uma forma prática. Teste seus conhecimetos e conclua que com a prática, a perfeição fica mais fácil de ser alcançada.</p>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text">
                <i class="large material-icons">aspect_ratio</i>
              </h2>
              <h5 class="center">Brinque com os objetos</h5>
              <p class="light">Se divirta movendo os sólidos, analisando suas dimensões e usufruindo das animações</p>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text">
                <i class="large material-icons">settings</i>
              </h2>
              <h5 class="center">Configure a forma que desejar</h5>
              <p class="light">Liberdade para muudar os valores dos sólidos e conferir o resultado, em tempo real.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="parallax-container valign-wrapper">
      <div class="section no-pad-bot">
        <div class="container">
          <div class="row center">
            <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
          </div>
        </div>
      </div>
      <div class="parallax">
        <img class="imgConserto" src="<?php echo $caminhoServidor . '/view/img/cover2.jpg'; ?>" alt="Unsplashed background img 2">
      </div>
    </div>

    <div class="container">
      <div class="section">
        <div class="row">
          <div class="col s12 center">
            <h4>Quem somos</h4>
            <p class="left-align light">Somos um grupo composto pelos seguintos alunos: Jefferson de Jesus Santos, Kaione Oliveira, Djair Maikon, João Felipe e Matheus Santos Carvalho, esses advindos do Instituto Federal de Educação, Ciência e Tecnologia da Bahia, campus Jequié. O programa foi feito no intuito de diversificar os modos de estudo, relacionados aos assuntos de Geometria Espacial. Suportado em ambientes web e mobile.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="parallax-container valign-wrapper">
      <div class="section no-pad-bot">
        <div class="container">
          <div class="row center">
            <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
          </div>
        </div>
      </div>
      <div class="parallax">
        <img class="imgConserto" src="<?php echo $caminhoServidor . '/view/img/cover3.jpg'; ?>" alt="Unsplashed background img 3">
      </div>
    </div>

    <footer class="page-footer teal">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">SideForm</h5>
            <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Settings</h5>
            <ul>
              <li><a class="white-text" href="#!">Link 1</a></li>
              <li><a class="white-text" href="#!">Link 2</a></li>
              <li><a class="white-text" href="#!">Link 3</a></li>
              <li><a class="white-text" href="#!">Link 4</a></li>
            </ul>
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Connect</h5>
            <ul>
              <li><a class="white-text" href="#!">Link 1</a></li>
              <li><a class="white-text" href="#!">Link 2</a></li>
              <li><a class="white-text" href="#!">Link 3</a></li>
              <li><a class="white-text" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        @2018 Todos os direitos reservados</div>
      </div>
    </footer>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="<?php echo $caminhoServidor . '/view/js/materialize.min.js'; ?>"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.parallax').parallax();
        $(".dropdown-trigger").dropdown();
        $('.scrollspy').scrollSpy();
        $('.sidenav').sidenav();
      });
    </script>
  </body>
</html>
