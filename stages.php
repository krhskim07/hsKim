<!-- header start-->
<?php require_once('inc/head.inc.php');  ?>

<!-- header end -->

<body> 
     <div class="super_container">
        <!-- header start-->
          <?php $page = 'stages'; require_once('inc/header.inc.php'); ?>
        <!-- header end-->
        <div class="content_container">
            <div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

            <!-- general info start -->
			  <?php require_once('inc/general_info.inc.php'); ?>
            <!-- general info end -->

                <!-- Main Content -->
                <div class="main_content">
                    <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
                        <div class="main_title">Mes Stages</div>
                    </div>
                    <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
                        
                        

                    </div>
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