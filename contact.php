<!-- header start-->
<?php require_once('inc/head.inc.php');  ?>

<!-- header end -->

<body> 
     <div class="super_container">
        <!-- header start-->
          <?php $page = 'contact'; require_once('inc/header.inc.php'); ?>
        <!-- header end-->
        <div class="content_container">
            <div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

            <!-- general info start -->
                <?php require_once('inc/general_info.inc.php'); ?>
            <!-- general info end -->

              <!-- Main Content -->
                <div class="main_content">
                    <section id="contact">
                        <div class="container">
                            <div class="main_title">CONTACTEZ MOI</div>
                            <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-4 my-5">
                                <div class="card border-0">
                                <div class="card-body text-center">
                                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                                    <h4 class="text-uppercase mb-5">Appelez Moi</h4>
                                    <p>+33(0)6 46 52 76 17</p>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4 my-5">
                                <div class="card border-0">
                                <div class="card-body text-center">
                                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                                    <h4 class="text-uppercase mb-5">Localisation</h4>
                                    <a href="https://goo.gl/maps/yse5vyFG8Kx"><address>12, Rue Anatole France 92000 Nanterre </address></a> 
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-4 my-5">
                                <div class="card border-0">
                                <div class="card-body text-center">
                                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                                    <h4 class="text-uppercase mb-5">email</h4>
                                    <a href="mailto:hyunsuk@ynov.com"><p>hyunsuk.kim@ynov.com</p></a> 
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </section>         
                </div>
            </div>
        </div>

          <!-- Footer start -->
        <?php require_once('inc/footer.inc.php'); ?>
        <!-- Footer End -->

     </div>

    

    <!-- scripts start-->
	<?php require_once('inc/scripts.inc.php');  ?>
	<!-- scripts end -->
</body>
</html>