<!-- header start-->
<?php require_once('inc/head.inc.php');  ?>

<!-- header end -->

<body> 
     <div class="super_container">
        <!-- header start-->
          <?php $page = 'projetPerso'; require_once('inc/header.inc.php'); ?>
        <!-- header end-->
        <div class="content_container">
            <div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

            <!-- general info start -->
			  <?php require_once('inc/general_info.inc.php'); ?>
            <!-- general info end -->

                <!-- Main Content -->
                <div class="main_content">
                    <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
                        <div class="main_title">Mes Projets Perso</div>
                    </div>
                    <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
                        
                        <!-- Projet -->

                        <div class="education">
                            
                            <!-- Projet Item -->
                            <div class="edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start">
                                <div><div class="edu_image"><img src="assets/images/nodeproject.png" alt=""></div></div>
                                <div class="edu_content">
                                    <div class="edu_title_container">
                                        <div class="edu_title">Projet Node Js & Vue Js</div>
                                    </div>
                                    <div class="edu_text">
                                        <p>
                                            Création d'un site en Vue Js pour le front et Node Js et Mongo dB pour le back.
                                            Un site pour une entreprise d'informatique de pouvoir gérer leurs projets, leurs clients et leurs salariés. <br>
                                            Avec une page d'accueil où on peut voir les nombres de projets, de salariés et de clients en cours, <br>
                                            Et sur les pages dédiés : de voir des listes, vue détaillée, modification avec ajout, modification ou supprimer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Projet Item -->
                            <div class="edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start">
                                    <div><div class="edu_image"><img src="assets/images/csharpproject.png" alt=""></div></div>
                                    <div class="edu_content">
                                        <div class="edu_title_container">
                                            <div class="edu_title">Projet Mini RPG C#</div>
                                        </div>
                                        <div class="edu_text">
                                            <p>
                                                Création d'un mini jeu RPG sur console en C#.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            

                        </div>

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