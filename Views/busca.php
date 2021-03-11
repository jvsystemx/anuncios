<section class="pt-5 pb-5">
    <div class="container">
         <div class="col-6">
            <h3 class="mb-3 text-primary">Buscando por <?= isset($_GET['query']) && is_string($_GET['query']) ? $_GET['query'] : ''; ?>  resultados encontrados </h3>
        </div>
        <hr>
        <div class="row mb-md-2">
            <?php foreach ($fixed as $post) { ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-sm border-light mb-4">
                        <div  class="position-relative">
                            
                            <?php if(!empty($post['image'])){ ?>
                            <a href="<?= BASE_URL; ?>/post/go/<?= $post['slugUrl'];?>">
                                <img src="<?= BASE_URL; ?>/storage/images/<?= $post['image'];?>" class="card-img-top" alt="image" width="350" height="250">
                            </a> 
                            <?php }else{ ?>
                                <a href="<?= BASE_URL; ?>/post/go/<?= $post['slugUrl']; ?>">
                                    <img src="<?= BASE_URL; ?>/assets/images/no-img.gif" class="card-img-top" alt="image" width="350" height="250">
                                </a>
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
        <div class="row justify-content-center py-2">
            <!-- 728x90 -->
           <iframe width=728 height=90 src='https://anuncieaqui.top/ads.php?ref=2&anun=5&tamanho=728x90' scrolling=no frameborder=0 marginwidth=0 marginheight=0 name=AnuncieAqui></iframe>
        </div><br>
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
    </div>
</section>
