<!-- header start-->
<?php require_once('inc/head.inc.php');  ?>

<!-- header end -->

<body> 
     <div class="super_container">
        <!-- header start-->
          <?php $page = 'formation'; require_once('inc/header.inc.php'); ?>
        <!-- header end-->
        <div class="content_container">
            <div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

            <!-- general info start -->
			  <?php require_once('inc/general_info.inc.php'); ?>
            <!-- general info end -->

                <!-- Main Content -->
                <div class="main_content">
                    <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
                        <div class="main_title">Mes Formations</div>
                    </div>
                    <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
                        
                        <!-- Education -->

                        <div class="education">
                            
                            <!-- Education Item -->
                            <div class="edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start">
                                <div><div class="edu_year">2017-2020</div></div>
                                <div><div class="edu_image"><img src="images/ynov-info.png" alt=""></div></div>
                                <div class="edu_content">
                                    <div class="edu_title_container">
                                        <div class="edu_title">Ingésup Campus YNOV </div>
                                        <div class="edu_subtitle">Développement</div>
                                    </div>
                                    <div class="edu_text">
                                        <p>Ingésup propose un Bachelor en informatique accessible directement après le Bac pour que ses étudiants se construisent un socle solide de connaissances théoriques et découvrent l’ensemble des domaines liés à l’ingénierie informatique. En 3e année, les étudiants ont la possibilité de choisir une spécialisation en développement ou systèmes et réseaux.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Education Item -->
                            <div class="edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start">
                                <div><div class="edu_year">2011</div></div>
                                <div><div class="edu_image"><img src="images/edf.png" alt=""></div></div>
                                <div class="edu_content">
                                    <div class="edu_title_container">
                                        <div class="edu_title">Ecole Dentaire Française</div>
                                        <div class="edu_subtitle">CAP prothèsiste Dentaire</div>
                                    </div>
                                    <div class="edu_text">
                                        <p>L’Ecole Dentaire Française est une école technique privée, régulièrement enregistrée auprès des services académiques. 
                                                Les enseignants de l'école sont tous titulaires de l’autorisation d’enseigner délivrée par le Recteur de l’Académie. 
                                                L'école prépare à tous les diplômes en prothèse dentaire délivrés par l’Etat (BEP, Baccalauréat professionnel et BTS). 
                                                Elle assure également des formations spécifiques, pour répondre aux attentes de la profession dentaire.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Education Item -->
                            <div class="edu_item d-flex flex-lg-row flex-column align-items-start justfy-content-start">
                                <div><div class="edu_year">2010</div></div>
                                <div><div class="edu_image"><img src="images/edgar_quinet_1.png" alt=""></div></div>
                                <div class="edu_content">
                                    <div class="edu_title_container">
                                        <div class="edu_title">Lycée Edgar Quinet</div>
                                        <div class="edu_subtitle">Baccalauréat Professionnel Commerce</div>
                                    </div>
                                    <div class="edu_text">
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