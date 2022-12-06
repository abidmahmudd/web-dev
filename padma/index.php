<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
   <!-- header part start -->
   <header class="container-fluid slider">
    <div class="row">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php 
    $x=0;
    while(have_posts()){the_post();
    $x++;
    ?>
    <div class="carousel-item <?= ($x==1)?'active':''?> active">
        <?php the_post_thumbnail();?>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
    <?php }?>
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div> -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
   </header>
   <!-- header part end -->
   <!-- logo part start  -->
   <section class="logo container-fluid ">
    <div class="row">
        <div class="col-sm-6 logo_left">
            <?php the_custom_logo(); ?>
        </div>
        <div class="col-sm-6 logo_right text-end">
            <?php dynamic_sidebar('bdlogo');?>
        </div>
    </div>
   </section>
   <!-- logo part end -->
   <!-- menu part start -->
   <section class="container-fluid menu ">
        <div class="container menu-1 navbar-expand">
            <?php wp_nav_menu(array(
                'theme_location' =>'tm',
                'menu_class'=>'navbar-nav '
            ) )?>
        </div>
   </section>
   <!-- menu part end -->
   <!-- hero part -->
   <section class="container hero text-center">
    <div class="row hero_top ">
       
        
        <h3>Welcome to <span>PADMA MULTIPURPOSE BRIDGE PROJECT</span></h3>
        <p>The Padma Bridge is a multipurpose road-rail bridge across the Padma River to be constructed in Bangladesh. When completed it will be the largest bridge in Bangladesh and the first fixed river crossing for road traffic. It will connect Louhajong, Munshiganj to Shariatpur and Madaripur, linking the south-west of the country, to northern and eastern regions.</p>
    </div>
    <div class="row hero_bottom">

        <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                    <?php dynamic_sidebar('hbimg');?>
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
            <?php dynamic_sidebar('hbbody');?>
                <!-- <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
            </div>
        </div>
        <div class="col-sm-4">2</div>
        <div class="col-sm-4">3</div>
    </div>
   </section>
   <!-- hero part -->
<?php wp_footer(); ?>
</body>
</html>