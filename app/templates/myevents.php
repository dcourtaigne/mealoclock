<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>


	<div id="gererevenements">
			<div id="gerer">
				<div class="tabbable-line">

					<div class="panel-header">

						<ul class="nav-justified" id="tabs">
							<li>
								<a id="inc">
									Inscriptions confirmees
								</a>
							</li>
							<li>
								<a id="att">
									Inscriptions en attente
								</a>	
							</li>
							<li>
								<a id="org">
									Evenements organises
								</a>
							</li>
						</ul>
					</div>

					<div class="tab-content">
						<div id="inscriptions" class="active">
							<div id="evenement">
								<section>
									<h4> Soiree Salade </h4> 
									<span> Le 28/08/15 a 19h </span><br>
									<span> Paris 12 - <a href=""> afficher l'adresse</a></span>
								</section>
								<section class="right" id="right">			
									<button> Se desinscrire </button> <br>
									<span>Participants:<a href=""> 3/5</a></span>
								</section>							
							</div>
							<div id="evenement">
								<section>
										<h4> Soiree Salade </h4> 
										<span> Le 28/08/15 a 19h </span><br>
										<span> Paris 12 - <a href=""> afficher l'adresse</a></span>
								</section>
								<section class="right" id="right">			
									<button> Se desinscrire </button> <br>
									<span>Participants:<a href=""> 3/5</a></span>
								</section>							
							</div>
						</div>

						<div id="enattente">
							<div id="evenement">
								<section>
										<h4> Soiree Poireau </h4> 
										<span> Le 28/08/15 a 19h </span><br>
										<span> Paris 12 - <a href=""> afficher l'adresse</a></span>
								</section>
								<section class="right" id="right">			
									<button> Se desinscrire </button> <br>
									<span>Participants:<a href=""> 3/5</a></span>
								</section>							
							</div>
						</div>

						<div id="organises">
							<div id="evenement">
								<section>
									<h4> Soiree champignon </h4> 
									<span> Le 28/08/15 a 19h </span><br>
									<span> Paris 12 - <a href=""> afficher l'adresse</a></span>
								</section>
								<section class="right" id="right">			
									<button> Se desinscrire </button> <br>
									<span>Participants:<a href=""> 3/5</a></span>
								</section>							
							</div>
						</div>	
					</div>
				</div>
			</div>
	</div>



<script type="text/javascript" src="<?= $this->assetUrl("js/gerertableau.js") ?>"></script>

<?php $this->stop('main_content') ?>