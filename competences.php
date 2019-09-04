<!-- header start-->
<?php require_once('inc/head.inc.php');  ?>

<!-- header end -->

<body> 
     <div class="super_container">
        <!-- header start-->
          <?php $page = 'competences'; require_once('inc/header.inc.php'); ?>
        <!-- header end-->
        <div class="content_container">
            <div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

            <!-- general info start -->
			  <?php require_once('inc/general_info.inc.php'); ?>
            <!-- general info end -->

              <!-- Main Content -->

              <div class="main_content">
				<div class="main_title_container d-flex flex-column align-items-start justify-content-end">
					<div class="main_title">Mes Compétences</div>
				</div>
				<div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

					<!-- Skills Content -->
					<div class="skills">
						<div class="skills_text">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xl-6">
										<p>Actuellement en 2ème année de Bachelor informatique, la plus part du temps je fais du développement web avec des languages comme HTML/CSS, Javascript, JQuery, Boostrap, et Vue Js. <br>
										Et côté back avec le framework Node Js et Mongo dB pour la base de donné </p>
									</div>
									<div class="col-xl-6">
										<p>
											J'ai développé aussi en C#, Java, PHP avec framework Laravel, et des connaissances de réseaux et systèmes comme Linux, Active Directory, VM. 
										</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Progress Bars -->
						<div class="progress_bars">
							<div class="container-fluid">
								<div class="row">

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">HTML/CSS/Bootstrap/JQuery</div>
											<div id="skill_1_pbar" class="skill_bars" data-perc="0.80" data-name="skill_1_pbar" data-color-start="#79ccff" data-color-end="#9b74ff"></div>
										</div>
									</div>

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Vue Js</div>
											<div id="skill_2_pbar" class="skill_bars" data-perc="0.65" data-name="skill_2_pbar" data-color-start="#ff4646" data-color-end="#ff26d9"></div>
										</div>
									</div>

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Node Js</div>
											<div id="skill_3_pbar" class="skill_bars" data-perc="0.65" data-name="skill_3_pbar" data-color-start="#0054ff" data-color-end="#ff23d3"></div>
										</div>
									</div>

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Java</div>
											<div id="skill_4_pbar" class="skill_bars" data-perc="0.45" data-name="skill_4_pbar" data-color-start="#79ff7c" data-color-end="#ffbd4a"></div>
										</div>
									</div>

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">C#</div>
											<div id="skill_5_pbar" class="skill_bars" data-perc="0.45" data-name="skill_5_pbar" data-color-start="#79ff8f" data-color-end="#7b74ff"></div>
										</div>
									</div>

									<!-- Progress Bar -->
									<div class="col-xl-4 col-lg-6 pb_col">
										<div class="pb_item">
											<div class="p_bar_title">Python</div>
											<div id="skill_6_pbar" class="skill_bars" data-perc="0.3" data-name="skill_6_pbar" data-color-start="#ff2d72" data-color-end="#ffab79"></div>
										</div>
									</div>

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