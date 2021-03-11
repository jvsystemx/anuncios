<!DOCTYPE html>
<html lang="en">
<head>
  <!-- META SEO-->
  <meta charset="utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

  <title><?= SITE_NAME; ?></title>

  <link rel="stylesheet" href="<?= url("/assets/css/bootstrap.css"); ?>">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet"> 

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?= url("/assets/css/style.css"); ?>">

  <link rel="shortcut icon" type="image/x-icon" href="<?= url('/favicon.ico');?>" />

</head>
<body>

  
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="<?= url(); ?>">
      <img src="<?= url('/assets/images/banner.png'); ?>"  class="logo-image">
    </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?= url(); ?>">Home 
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?= url("/envie"); ?>">Envie seu link</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?= url("/sobre"); ?>">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?= url("/contato"); ?>">Contato</a>
          </li>
           
        </ul>
        <form class="form-search form-inline my-2 my-lg-0" method="GET" action="">
            <div class="form-group has-search">
              <i class="fas fa-search form-control-feedback"></i>
              <input type="text" class="form-control" placeholder="Procurar por ..." name="query">
            </div>
        </form>
    </div>
</nav>
<br><br>


<!-- HOME -->
<?php $this->loadViewInTemplate($viewName, $viewData); ?>


  <!-- Footer-->
<div class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-4 mb-lg-0">
        <img src="<?= url('/assets/images/banner.png'); ?>" width="250" height="90">
        <p class="text-muted">Laborum aute enim consectetur eu laboris commodo.</p>
        <ul class="contact-info list-unstyled">
          <li><a href="mailto:sales@landy.com" class="text-dark">teste@hotmail.com</a></li>
          <li><a href="tel:123456789" class="text-dark">+55 (00) 123 456 789</a></li>
        </ul>
        
      </div>
      <div class="col-lg-4 col-md-6 mt-5">
        <h5>Links rápidos</h5>
        <ul class="links list-unstyled">
          <li> <a href="#" class="text-muted">Home</a></li>
          <li> <a href="#" class="text-muted">Envie seu link</a></li>
          <li> <a href="#" class="text-muted">Contato</a></li>
           <li> <a href="#" class="text-muted">Contato</a></li>
          <li> <a href="#" class="text-muted">Privacidade</a></li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-6 mt-5">
        <h5>Categorias</h5>
        <ul class="links list-unstyled">
          <li> <a href="#" class="text-muted">Minim labore nulla</a></li>
          <li> <a href="#" class="text-muted">Nulla qui nisi</a></li>
          <li> <a href="#" class="text-muted">Iris Vor Arnim</a></li>
          <li> <a href="#" class="text-muted">Consectetur cupidatat</a></li>
          <li> <a href="#" class="text-muted">Consectetur cupidatat</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="py-3 bg-dark text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-7 text-center text-md-left">
        <p class="mb-md-0">&copy; <?=  Date("Y"); ?> . All rights reserved. </p>
      </div>
      <div class="col-md-5 text-center text-md-right">
        <p class="mb-0">Desenvolvido por <a href="" class="external text-white">Carlos</a> </p>
      </div>
    </div>
  </div>
</div>



<script src="<?= url('/assets/js/jquery-3.3.1.slim.min.js'); ?>"></script>
<script src="<?= url('/assets/js/bootstrap.min.js'); ?>"></script>


</body>
</html>