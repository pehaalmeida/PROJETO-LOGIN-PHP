<?php
session_start();
include('../php/verificaUser.php');

?>  
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Incursão Food | Home </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/Style.css">
    <script type="text/javascript" src="../js/JavaScripy.js"></script>
</head>

<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="../views/painel.php">
    <h1 class="title is-4 LogoTitle">Sistema de Login Php</h1>
    
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="painel.php">
        Home
      </a>

      <a class="navbar-item">
        Mds
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Outros
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            Permissões 
          </a>
          <a class="navbar-item">
            Cadastro
          </a>
          <a class="navbar-item">
            Outro 3
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Reporta Erro
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-danger" href="../php/logout.php">
            <strong>Sair</strong>
            
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

<button class="js-modal-trigger" data-target="modal-js-example">
  Open JS example modal
</button>


<div class="modal" id="modal-js-example">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Modal title</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <!-- Content ... -->
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success">Save changes</button>
      <button class="button">Cancel</button>
    </footer>
  </div>
</div>

<script>



</script>

</body>

</html>