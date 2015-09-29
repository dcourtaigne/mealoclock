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
								<?php
								if(!empty($events['confirmedEvents'] )){
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
								<?php
								if(!empty($events['pendingEvents'] )){
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
								<?php
								if(!empty($events['orgEvents'] )){
									foreach($events['orgEvents'] as $singleEvent){
                    				$this->insert('partials/myevents-list',['singleEvent'=>$singleEvent]);
                  					}
                  				}else{
                  					echo "<p> Vous n'avez aucune demande de participation en attente</p>";
                  				}
                  				?>
							</ul>
						</section>
					</div>
				</div>
	</div>

</div>
</div>


<script type="text/javascript" src="<?= $this->assetUrl("js/gerertableau.js") ?>"></script>

<?php $this->stop('main_content') ?>
