<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>

<div id="myevents" class="largeurSite paddingTB20">
	<div id="gererevenements" >
			<div class="">
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
						<section id="inscriptions" class="active">

								<ul>
									<?php if(!empty($events['confirmedEvents'] )){
										 foreach($events['confirmedEvents'] as $singleEvent){
                    	$this->insert('partials/myevents-list-confirmed',['singleEvent'=>$singleEvent]);
                  	}
                  }else{
                  	echo "<p> vous n'êtes inscrit à aucun événement</p>";
                  }
                  	?>
								</ul>
						</section>

						<section id="enattente">
								<ul>
									<?php if(!empty($events['pendingEvents'] )){
										 foreach($events['pendingEvents'] as $singleEvent){
                    	$this->insert('partials/myevents-list-pending',['singleEvent'=>$singleEvent]);
                  	}
                  }else{
                  	echo "<p> Vous n'avez aucune demande de participation en attente</p>";
                  }
                  	?>
								</ul>
						</section>

						<section id="organises">
								<ul>
									<?php if(!empty($events['orgEvents'] )){
										 foreach($events['orgEvents'] as $singleEvent){
                    	$this->insert('partials/myevents-list',['singleEvent'=>$singleEvent]);
                  	}
                  }else{
                  	echo "<p> Vous n'avez organisé aucun événement</p>";
                  }
                  	?>

								</ul>
						</section>
					</div>
				</div>
	</div>
	<div class="overlay paddingTB20 paddingLR20">
		<div class="conteneur_bis ">
			<button class="fermer_modale">X</button>
				<section class="utilisateur">
					<div class="alignright">
						<div class="image_prenom">
							<img src="http://img15.hostingpics.net/pics/740435visage.jpg">
								<h4>Prenom</h4>
						</div>
						<p class="commentaire wide">
							"Bonjour, je suis Christine, j'ai 32 ans, et j'aime cuisiner sans viande. Realiser l'entree me plairait, j'ai en tete une salade de crudites. J'attends votre retour avec impatience :)"
						</p>
						<span class="liste">
							<ul>
								<li>Confirmer l'inscription</li>
								<li>Refuser l'inscription</li>
							</ul>
						</span>
					</div>

					<div class="display_bottom_comment">
						<strong>Afficher son message</strong>
					</div>
					<p class="commentaire">
						"Bonjour, je suis Christine, j'ai 32 ans, et j'aime cuisiner sans viande. Realiser l'entree me plairait, j'ai en tete une salade de crudites. J'attends votre retour avec impatience :)"
						<br>
					<div class="display_bottom_profile">
					<strong>Apercu du profil</strong>
					</div>
					<article class="profile_preview">
						<p><strong>Introduction:</strong> Originaire de franche comte, j'aime le bon vin et le bon fromage. Bonne vivante, je m'apprete a satisfaire vos desirs culinaires divers et varies.</p>
						<span><strong>Repas participes: 8</strong></span>
						<br>
						<span><strong>Repas organises: 2</strong></span>
						<br>
						<a href="#">Consulter son profil</a>
					</article>
			</section>
		</div>

		<div class="conteneur_bis">
			<section class="utilisateur">
				<div class="alignright">
				<div class="image_prenom">
					<img src="http://img15.hostingpics.net/pics/740435visage.jpg">
					<h4>Prenom</h4>
				</div>
				<p class="commentaire wide">
					"Bonjour, je suis Christine, j'ai 32 ans, et j'aime cuisiner sans viande. Realiser l'entree me plairait, j'ai en tete une salade de crudites. J'attends votre retour avec impatience :)"
					<br>

				</p>
				<span class="liste">
					<ul>
						<li>Confirmer l'inscription</li>
						<li>Refuser l'inscription</li>
					</ul>
				</span>

				</div>
				<div class="display_bottom_comment">
					<strong>Afficher son message</strong>
				</div>
				<p class="commentaire">
					"Bonjour, je suis Christine, j'ai 32 ans, et j'aime cuisiner sans viande. Realiser l'entree me plairait, j'ai en tete une salade de crudites. J'attends votre retour avec impatience :)"
					<br>
				<div class="display_bottom_profile">
					<strong>Apercu du profil</strong>
				</div>
				<article class="profile_preview">
					<p><strong>Introduction:</strong> Originaire de franche comte, j'aime le bon vin et le bon fromage. Bonne vivante, je m'apprete a satisfaire vos desirs culinaires divers et varies.</p>
					<span><strong>Repas participes: 8</strong></span>
					<br>
					<span><strong>Repas organises: 2</strong></span>
					<br>
					<a href="#">Consulter son profil</a>
				</article>
				</p>
			</section>
		</div>

		<div class="conteneur_bis">
			<section class="utilisateur">
				<div class="alignright">
				<div class="image_prenom">
					<img src="http://img15.hostingpics.net/pics/740435visage.jpg">
					<h4>Prenom</h4>
				</div>
				<p class="commentaire wide">
					"Bonjour, je suis Christine, j'ai 32 ans, et j'aime cuisiner sans viande. Realiser l'entree me plairait, j'ai en tete une salade de crudites. J'attends votre retour avec impatience :)"
					<br>

				</p>
				<span class="liste">
					<ul>
						<li>Confirmer l'inscription</li>
						<li>Refuser l'inscription</li>
					</ul>
				</span>

				</div>
				<div class="display_bottom_comment">
					<strong>Afficher son message</strong>
				</div>
				<p class="commentaire">
					"Bonjour, je suis Christine, j'ai 32 ans, et j'aime cuisiner sans viande. Realiser l'entree me plairait, j'ai en tete une salade de crudites. J'attends votre retour avec impatience :)"
					<br>
				<div class="display_bottom_profile">
					<strong>Apercu du profil</strong>
				</div>
				<article class="profile_preview">
					<p><strong>Introduction:</strong> Originaire de franche comte, j'aime le bon vin et le bon fromage. Bonne vivante, je m'apprete a satisfaire vos desirs culinaires divers et varies.</p>
					<span><strong>Repas participes: 8</strong></span>
					<br>
					<span><strong>Repas organises: 2</strong></span>
					<br>
					<a href="#">Consulter son profil</a>
				</article>
				</p>
			</section>
		</div>


	</div>
</div>
</div>


<script type="text/javascript" src="<?= $this->assetUrl("js/gerertableau.js") ?>"></script>

<?php $this->stop('main_content') ?>
