<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title></title>

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
            <a class="nav-link" href="<?= url("/envie"); ?>">Envie seu link</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?= url("/sobre"); ?>">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?= url("/contato"); ?>">Contato</a>
          </li>
           
        </ul>
        <form class="form-search form-inline my-2 my-lg-0">
            <div class="form-group has-search">
              <i class="fas fa-search form-control-feedback"></i>
              <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
    </div>
  </nav>

    
    


<footer>
  <div class="container">
    <p class="nav-link">
      <a href="<?= url(); ?>">Home</a> &nbsp;|&nbsp;
      <a href="<?= url("/sobre"); ?>">Sobre</a> &nbsp;|&nbsp; 
      <a href="<?= url("/envie"); ?>">Envie</a> &nbsp;|&nbsp;
      <a href="<?= url("/contato"); ?>">Contato</a> &nbsp;|&nbsp; 
     </p>
      <p class="copy-right">Copyright &copy; 2045 
        <a href="<?= url(); ?>">Mega Link</a>, All rights reserved. | Designed By : 
        <a target="_blank" rel="nofollow noopener" href="">Carlos</a>
      </p>
  </div>
</footer>

<script src='<?= url("/assets/js/jquery.js"); ?>'></script>
<script src='<?= url("/assets"); ?>'></script>
</body>
</html>