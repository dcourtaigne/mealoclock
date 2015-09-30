<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>

<section id="commentForm" class="largeurSite container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form role="form" method='POST' action="<?=$this->url('comment')?>">
				<h4 class="text-center paddingTB10 "><strong>
				Laisser un commentaire</strong>
				</h4>
				<p><em>Tous les champs sont obligatoires</em></p>
			  	
				<div class="form-group form-inline">
					<label>De :</label>
                    <input type="text" class="form-control" name="name">
                </div>

			  	<div class="form-group">		
					<textarea class="form-control" rows="10" name='user_desc' placeholder="Vous avez passé un bon moment ? Vous voulez remercier l'organisateur ? Merci de nous laisser votre avis, et apporter votre pierre à notre édifice!"></textarea>
				</div>

				<div class="marginTB20">
						<input type="submit" class="btn btn-primary pull-right marginTB20" value="Envoyer" name="submit">
					<!-- 	<input type="submit" class="btn btn-default" value="Annuler" name="cancel"> -->
				</div>
			</form>
		</div>
	</div>
</section>


<?php $this->stop('main_content') ?>