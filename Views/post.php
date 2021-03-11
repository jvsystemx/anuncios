
<?php if (!isset($busca) ) { ?>
 <div class="container">
    <div class="row justify-content-center py-2">
    <!-- 728x90 -->
   <iframe width=728 height=90 src='https://anuncieaqui.top/ads.php?ref=2&anun=5&tamanho=728x90' scrolling=no frameborder=0 marginwidth=0 marginheight=0 name=AnuncieAqui></iframe>
</div><br>
 </div>
  <section>
  <div class="container py-3">
    <div class="card">
      <div class="row">
        <div class="col-md-4">
            <?php if(empty($info['image']) and empty($info['image'])){ ?>
               <img src="<?= BASE_URL; ?>/storage/images/<?= $info[0]['image']?>" class="w-100">
            <?php }else{ ?>
               <img src="<?= url('assets/images/no-img.gif'); ?>" class="w-100"> 
            <?php } ?>
           
          </div>
          <div class="col-md-8 px-3">
              <div class="card-block px-3 mt-2">
                <h4 class="card-title">´<a href="<?=  $info[0]['link']; ?>"><?=  $info[0]['titulo']; ?></a></h4>
               <h6>
                <span class="badge badge-secondary"> 
                  <?=  $info[0]['category']; ?>
                </span>
              </h6>
                <p class="card-text"><?=  $info[0]['descricao']; ?></p>
                <div class="col-md-6 d-flex mt-4">
                <strong>Compartilhe: </strong>
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
              <div class="permalink-cliques font-weight-bold ">
                  <?= $info[0]['visitas']; ?> Cliques &nbsp;&nbsp; | &nbsp;&nbsp; Data: 06/03/2021 
              </div><br><br>
                <a href="<?=  $info[0]['link']; ?>" class="btn btn-dark btn-block mb-4">Veja o Conteúdo</a>
                
              </div>
            </div>
          </div>
       </div>
      </div>
  </div>
</section>

<div class="row justify-content-center py-2">
    <!-- 728x90 -->
    <iframe width=728 height=90 src='https://anuncieaqui.top/ads.php?ref=2&anun=5&tamanho=728x90' scrolling=no frameborder=0 marginwidth=0 marginheight=0 name=AnuncieAqui></iframe>
</div><br>



<section class="pt-5 pb-5">
    <div class="container">
         <div class="col-6">
            <h3 class="mb-3 text-primary">Links relacionados:  </h3>
        </div>
        <hr>
        <div class="row">
            <?php foreach ($relatedPosts as $post) { ?>
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
                            <p class="font-weight-normal text-dark">
                              <?= $post['titulo'];?>
                            </p>
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

<?php }else{ ?>

<div class=" d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="mb-4 lead">A página que você está procurando não foi encontrada.</div>
                <a href="<?= url(); ?>" class="btn btn-link">Voltar</a>
            </div>
        </div>
    </div>
</div>


<section class="pt-5 pb-5">
    <div class="container">
         <div class="col-6">
            <h3 class="mb-3 text-primary">Talvez</h3>
        </div>
        <hr>
        <div class="row">
            <?php foreach ($relatedPosts as $post) { ?>
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
                            <p class="font-weight-normal text-dark">
                              <?= $post['titulo'];?>
                            </p>
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

<?php  } ?>
    

<div class="row justify-content-center py-2">
    <!-- 728x90 -->
    <iframe width=728 height=90 src='https://anuncieaqui.top/ads.php?ref=2&anun=5&tamanho=728x90' scrolling=no frameborder=0 marginwidth=0 marginheight=0 name=AnuncieAqui></iframe>
</div><br>