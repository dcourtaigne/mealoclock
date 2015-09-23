<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>

<section id="updateUser" class="largeurSite container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form role="form">
				<h1>Compléter mon profil</h1>
					<div class="form-group">
						<label for="nom">Nom</label>
						<input type="text" class="form-control" name="nom">
			  		</div>
			  		<div class="form-group">
			  			<label for="prenom">Prénom</label>
						<input type="text" class="form-control" name="prenom">
			  		</div>

			  		<div class="form-group">
			  			<label for="pseudo">Pseudo</label>
						<input type="text" class="form-control" name="pseudo">
			  		</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email">
			  		</div>

			  		<div class="form-group">
						<label for="photo">Photo</label>
						<input type="" class="form-control" name="photo">
			  		</div>

					<div>
						<label for="favcommunaute">Communauté(s) favorite(s)</label></br>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox1" value="option1"> Végétariens
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox2" value="option2"> Vegans
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox3" value="option3"> Sans gluten
						</label>
			    		<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox4" value="option4"> Sans lactose
						</label>
					</div>

			  		<div class="form-group">
			  			<label>Renseignements complémentaires (facultatif)</label>
						<textarea class="form-control"></textarea>
			  		</div>
			  		<div>
						<input type="submit" class="btn btn-default marginTB20" value="Annuler" name="cancel">
					
						<input type="submit" class="btn btn-primary marginTB20" value="Envoyer" name="submit">
					</div>
			</form>
		</div>
	</div>
</section>


<?php $this->stop('main_content') ?>