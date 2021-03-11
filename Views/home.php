<?php if (isset($pesquisa)) { ?>
  <?php if (empty($pesquisa)) { ?>
     <div class="d-flex flex-row align-items-center mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <span class="display-6 d-block h2">Sua pesquisa não retornou resultados :/</span>
                    <div class="mb-4 lead">Você pesquisou por "<strong class="font-weight-bold "><?= $error; ?></strong>"  Tente outros termos.</div>
                    <a href="<?= url(); ?>" class="btn btn-link">Voltar</a>
                </div>
            </div>
        </div>
    </div>
    <section class="pt-5 pb-5">
    <div class="container">
 
         <div class="col-6">
            <h3 class="mb-3 text-primary">Links Relacionados:  </h3>
        </div>
        <hr>
       
        <div class="container ">
          <div class="row justify-content-center mb-4">
              <!-- 728x90 -->
              <iframe width=728 height=90 src='https://anuncieaqui.top/ads.php?ref=2&anun=5&tamanho=728x90' scrolling=no frameborder=0 marginwidth=0 marginheight=0 name=AnuncieAqui></iframe>

          </div>
        </div>

        <div class="row">
            <?php foreach ($relacionados as $post) { ?>
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm  mb-4">
                    <div  class="position-relative">
                        <?php if(!empty($post['image'])){ ?>
                        <a href="<?= BASE_URL; ?>/post/go/<?= $post['slugUrl'];?>">
                            <img src="<?= BASE_URL; ?>/storage/images/<?= $post['image'];?>" class="card-img-top" alt="image" width="350" height="250">
                                 
                        <?php }else{ ?>
                            <img src="<?= BASE_URL; ?>/assets/images/no-img.gif" class="card-img-top" alt="image" width="350" height="250">
                        <?php } ?>
                        </a>
                        <div class="category"><?= $post['category'];?></div>
                    </div>
                      <div class="card-body">
                        <a href="<?= BASE_URL;?>/post/go/<?= $post['slugUrl'];?>">
                            <p class="font-weight-normal text-dark"><?= $post['titulo'];?></p>
                        </a>
                       
                        <div class="row">
                            <div class="col-md-6 d-flex">
                               <button class="btn btn-sm btn-dark">Cliques: <?= $post['visitas'];?></button>
                            </div>
                            <div class="col-md-4 d-flex ">
                                <a class=" border-0 ml-1" href="">
                                   <img src="<?= url("/assets/images/twitter.png");?>" width="25" >
                                </a>
                                <a class=" border-0 ml-1" href="">
                                    <img src="<?= url('/assets/images/whatsapp.png');?>" width="25" >
                                </a>
                                <a class=" border-0 ml-1" href="">
                                    <img src="<?= url('/assets/images/facebook.png');?>" width="25">
                                </a>
                                <a class=" border-dark ml-1" href="https://api.whatspapp.com/send?text=">
                                    <img src="<?= url('/assets/images/link.png');?>" width="25">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div> 
       
        
        </div>
    </div>
</section>

<?php }else{ ?> 
     
<section class="pt-5 pb-5"> 
    <div class="container">
        <div class="row justify-content-center">
              <!-- 728x90 -->
              <iframe width=728 height=90 src='https://anuncieaqui.top/ads.php?ref=2&anun=5&tamanho=728x90' scrolling=no frameborder=0 marginwidth=0 marginheight=0 name=AnuncieAqui></iframe>

          </div><br>
         <div class="col-6">
            <h3 class="mb-3 text-primary">Pesquisa Por :  </h3>
        </div>
        <hr>
        
        
        <div class="row">
            <?php foreach ($pesquisa as $post) { ?>
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm  mb-4">
                    <div  class="position-relative">
                        <?php if(!empty($post['image'])){ ?>
                        <a href="<?= BASE_URL; ?>/post/go/<?= $post['slugUrl'];?>">
                            <img src="<?= BASE_URL; ?>/storage/images/<?= $post['image'];?>" class="card-img-top" alt="image" width="350" height="250">
                                 
                        <?php }else{ ?>
                            <img src="<?= BASE_URL; ?>/assets/images/no-img.gif" class="card-img-top" alt="image" width="350" height="250">
                        <?php } ?>
                        </a>
                        <div class="category"><?= $post['category'];?></div>
                    </div>
                      <div class="card-body">
                        <a href="<?= BASE_URL;?>/post/go/<?= $post['slugUrl'];?>">
                            <p class="font-weight-normal text-dark"><?= $post['titulo'];?></p>
                        </a>
                       
                        <div class="row">
                            <div class="col-md-6 d-flex">
                               <button class="btn btn-sm btn-dark">Cliques: <?= $post['visitas'];?></button>
                            </div>
                            <div class="col-md-4 d-flex ">
                                <a class=" border-0 ml-1" href="">
                                   <img src="<?= url("/assets/images/twitter.png");?>" width="25" >
                                </a>
                                <a class=" border-0 ml-1" href="">
                                    <img src="<?= url('/assets/images/whatsapp.png');?>" width="25" >
                                </a>
                                <a class=" border-0 ml-1" href="">
                                    <img src="<?= url('/assets/images/facebook.png');?>" width="25">
                                </a>
                                <a class=" border-dark ml-1" href="https://api.whatspapp.com/send?text=">
                                    <img src="<?= url('/assets/images/link.png');?>" width="25">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div> 
       
        </div>
    </div>
</section>
  <?php } ?>  
<?php }else{ ?> 
        
<section class="pt-5 pb-5">
   
          
       
    <div class="container">
        <div class="row justify-content-center">
              <!-- 728x90 -->
              <iframe width=728 height=90 src='https://anuncieaqui.top/ads.php?ref=2&anun=5&tamanho=728x90' scrolling=no frameborder=0 marginwidth=0 marginheight=0 name=AnuncieAqui></iframe>

          </div><br>
         <div class="col-6">
            <h3 class="mb-3 text-primary">Links em Destaques:  </h3>
        </div>
        <hr>
        <div class="row mb-md-2">
            <?php foreach ($fixed as $post) { ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm border-light mb-4">
                        <div  class="position-relative">
                            
                            <?php if(!empty($post['image'])){ ?>
                            <a href="<?= BASE_URL; ?>/post/go/<?= $post['slugUrl'];?>">
                                <img src="<?= BASE_URL; ?>/storage/images/<?= $post['image'];?>" class="card-img-top" alt="image" width="350" height="250"></a> 
                            <?php }else{ ?>
                                <a href="<?= BASE_URL; ?>/post/go/<?= $post['slugUrl'];?>">
                                <img src="<?= BASE_URL; ?>/assets/images/no-img.gif" class="card-img-top" alt="image" width="350" height="250"> </a>
                            <?php } ?>
                           
                            <div class="category"><?= $post['category'];?></div>
                        </div>
                          <div class="card-body">
                            <a href="<?= BASE_URL;?>/post/go/<?= $post['slugUrl'];?>">
                                <p class="font-weight-normal text-dark"><?= $post['titulo'];?></p>
                            </a>
                           
                            <div class="row">
                                <div class="col-md-6 d-flex">
                                   <button class="btn btn-sm btn-dark">Cliques: <?= $post['visitas'];?></button>
                                </div>
                                <div class="col-md-4 d-flex ">
                                    <a class=" border-0 ml-1" href="">
                                       <img src="<?= url("/assets/images/twitter.png");?>" width="25" >
                                    </a>
                                    <a class=" border-0 ml-1" href="">
                                        <img src="<?= url('/assets/images/whatsapp.png');?>" width="25" >
                                    </a>
                                    <a class=" border-0 ml-1" href="">
                                        <img src="<?= url('/assets/images/facebook.png');?>" width="25">
                                    </a>
                                    <a class=" border-dark ml-1" href="https://api.whatspapp.com/send?text=">
                                        <img src="<?= url('/assets/images/link.png');?>" width="25">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="container ">
          <div class="row justify-content-center mb-4">
              <!-- 728x90 -->
              <iframe width=728 height=90 src='https://anuncieaqui.top/ads.php?ref=2&anun=5&tamanho=728x90' scrolling=no frameborder=0 marginwidth=0 marginheight=0 name=AnuncieAqui></iframe>

          </div>
        </div>

        <div class="row">
            <?php foreach ($listagem as $post) { ?>
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm  mb-4">
                    <div  class="position-relative">
                        <?php if(!empty($post['image'])){ ?>
                        <a href="<?= BASE_URL; ?>/post/go/<?= $post['slugUrl'];?>">
                            <img src="<?= BASE_URL; ?>/storage/images/<?= $post['image'];?>" class="card-img-top" alt="image" width="350" height="250">
                                 
                        <?php }else{ ?>
                            <img src="<?= BASE_URL; ?>/assets/images/no-img.gif" class="card-img-top" alt="image" width="350" height="250">
                        <?php } ?>
                        </a>
                        <div class="category"><?= $post['category'];?></div>
                    </div>
                      <div class="card-body">
                        <a href="<?= BASE_URL;?>/post/go/<?= $post['slugUrl'];?>">
                            <p class="font-weight-normal text-dark"><?= $post['titulo'];?></p>
                        </a>
                       
                        <div class="row">
                            <div class="col-md-6 d-flex">
                               <button class="btn btn-sm btn-dark">Cliques: <?= $post['visitas'];?></button>
                            </div>
                            <div class="col-md-4 d-flex ">
                                <a class=" border-0 ml-1" href="">
                                   <img src="<?= url("/assets/images/twitter.png");?>" width="25" >
                                </a>
                                <a class=" border-0 ml-1" href="">
                                    <img src="<?= url('/assets/images/whatsapp.png');?>" width="25" >
                                </a>
                                <a class=" border-0 ml-1" href="">
                                    <img src="<?= url('/assets/images/facebook.png');?>" width="25">
                                </a>
                                <a class=" border-dark ml-1" href="https://api.whatspapp.com/send?text=">
                                    <img src="<?= url('/assets/images/link.png');?>" width="25">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div> 
       
        <div class="row py-4 mt-md-5">
            <div class="col text-center">
               <ul class="pagination justify-content-center mb-4">
                <?php if($total != $maximo){ ?> 
                     <?php if($total > $maximo){ ?> 
                    <?php if ($pagina != 1) { ?>
                         <li class="page-item">
                            <a class="page-link" href="?pagina=1">&larr; Primeira</a>
                        </li>
                    <?php }else{ ?>
                        <li class="page-item disabled">
                            <a class="page-link" href="?pagina=1">&larr; Primeira</a>
                        </li>
                    <?php } ?>

                    <?php if ($previous != 0) { ?>
                        <li class="page-item">
                            <a class="page-link" href="?pagina=<?= $previous; ?>">&laquo;</a>
                        </li>
                    <?php }else{ ?>
                        <li class="page-item disabled">
                            <a class="page-link" href="#">&laquo; </a>
                        </li>
                    <?php } ?>

                    <?php for($i = $pagina - $range; $i <= $pagina - 1; $i++){ ?>
                        <?php if ($i >= 1) { ?>
                            <li class="page-item">
                                <a class="page-link" href="?pagina=<?= $i; ?>"><?= $i; ?> </a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                <?php } ?> 

                    <li class="page-item active">
                        <a class="page-link disabled" href="?pagina=<?= $pagina; ?>"><?= $pagina; ?> 
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <?php for ($i = $pagina + 1; $i <= $pagina + $range; $i++) { ?>
                        <?php if ($i <= $total_paginas) { ?>
                           <li class="page-item">
                                <a class="page-link" href="?pagina=<?= $i; ?>"><?= $i; ?> </a>
                            </li>
                        <?php } ?>
                     <?php } ?>

                    <?php if($next <= $total_paginas){ ?>
                        <li class="page-item ">
                            <a class="page-link" href="?pagina=<?= $next; ?>">&raquo; </a>
                        </li>
                    <?php }else{ ?>
                        <li class="page-item disabled">
                            <a class="page-link" href="?pagina=<?= $next; ?>">&raquo; </a>
                        </li>
                    <?php } ?>
                
                    <?php if($pagina != $total_paginas){ ?>
                        <li class="page-item ">
                            <a class="page-link" href="?pagina=<?= $total_paginas; ?>">Última &rarr; </a>
                        </li>
                    <?php }else{ ?>
                       <li class="page-item disabled">
                            <a class="page-link" href="?pagina=<?= $total_paginas; ?>">Última &rarr; </a>
                        </li>
                    <?php } ?>
                 <?php }else{ ?>
                   
                 <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php } ?>
