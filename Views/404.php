<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title></title>

  <link rel="stylesheet" href="<?= url("/assets/css/bootstrap.css"); ?>">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= url("/assets/css/style.css"); ?>">
  <link rel="shortcut icon" type="image/x-icon" href="<?= url('/favicon.ico');?>" />
 

</head>
<body>
  
<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">404</span>
                <div class="mb-4 lead">A página que você está procurando não foi encontrada.</div>
                <a href="<?= url(); ?>" class="btn btn-link">Voltar</a>
            </div>
        </div>
    </div>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>