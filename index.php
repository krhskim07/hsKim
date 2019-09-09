<!-- header start-->
<?php require_once('inc/head.inc.php');  ?>

<!-- header end -->


<body>
  <div class="super_container">
      <!-- header start-->
          <?php $page ='home'; require_once('inc/header.inc.php'); ?>
      <!-- header end-->
    <div class="content_container">
      <div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">
        <!-- general info start -->
          <?php require_once('inc/general_info.inc.php'); ?>
        <!-- general info end -->

        <!-- Main Content -->
        <div class="main_content">
          <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
            <div class="main_subtitle">Développeur Web Fullstack</div>
            <div class="main_title">Hyunsuk KIM</div>
          </div>
          <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
            <div class="about_content">
              <div class="about_title">Description</div>
              <div class="about_text">
                <p>Actuellement en 3ème année de Bachelor Informatique, <br>
                    Je développe surtout en Html / CSS / JS / PHP / Bootstrap
                </p>
                <p>
                  Extrêmement motivé pour développer constamment mes compétences <br>
                  et à évoluer professionnellement. <br>
                  Je suis confiant dans mes capacités pour les mettre au service.
                </p>
              </div>

              <!-- Loaders -->
              <div class="loaders clearfix">

                <!-- Loader -->
                <div class="loader_container">
                  <div class="loader" data-perc="0.90"></div>
                  <div class="loader_content text-center">
                    <div class="loader_title">Esprit d'équipe</div>
                  </div>
                </div>
                
                <!-- Loader -->
                <div class="loader_container">
                  <div class="loader" data-perc="0.87"></div>
                  <div class="loader_content text-center">
                    <div class="loader_title">Adaptation</div>
                  </div>
                </div>

                <!-- Loader -->
                <div class="loader_container">
                  <div class="loader" data-perc="0.75"></div>
                  <div class="loader_content text-center">
                    <div class="loader_title">Prise d'initiative</div>
                  </div>
                </div>

                <!-- Loader -->
                <div class="loader_container">
                  <div class="loader" data-perc="0.85"></div>
                  <div class="loader_content text-center">
                    <div class="loader_title">Organistaion</div>
                  </div>
                </div>

              </div>
              <!-- End Loaders -->
            </div>
          </div>
        </div>
        <!-- End Main Content -->
      </div>
    </div>
      <!-- footer start-->
      <?php require_once('inc/footer.inc.php');  ?>
      <!-- footer end -->
  
  </div>
    
  <!-- scripts start-->
	<?php require_once('inc/scripts.inc.php');  ?>
	<!-- scripts end -->
</body>

</html>