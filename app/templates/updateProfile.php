<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>

<section id="updateUser" class="largeurSite container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form role="form" method='POST' action='<?=$this->url('updateProfile')?>'>
				<h1>Compléter mon profil</h1>

					<div class="form-group">

			  		<div class="form-group">
			  			<label for="pseudo">Pseudo</label>
						<input type="text" class="form-control" name="user_name" value="<?= $this->e($user['user_name'])?>" disabled="true" >
			  		</div>

					<div class="form-group marginTB20">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="user_email" value="<?= $this->e($user['user_email'])?>" disabled="true">
				  	</div>

					<div class="marginTB20">
						<label for="favcommunaute">Communauté(s) favorite(s)</label></br>
						<?php foreach ($communities as $community){
							$this->insert('partials/checkbox-communities',['userCom' => $user['com'], 'community'=>$community]);
						}
						?>
					</div>

				  	<div class="form-group">
				  		<label>Renseignements complémentaires (facultatif)</label>
						<textarea class="form-control" rows="10" name='user_desc' placeholder="N'hésitez à vous présenter! Ce texte s'affichera sur votre profil et permettront aux autres membres de mieux vous connaître"><?= $this->e($user['user_desc'])?></textarea>
				  	</div>

				  	<div class="marginTB20">
						<input type="submit" class="btn btn-primary" value="Envoyer" name="submit">
					<!-- 	<input type="submit" class="btn btn-default" value="Annuler" name="cancel"> -->
					</div>
			</form>
		</div>
	</div>
</section>


<?php $this->stop('main_content') ?>
