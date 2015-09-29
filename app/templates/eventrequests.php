<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
	<section id="requests" class="largeurSite paddingTB20">

		<h2 class='text-center'>Les demandes de participations votre événement: <?=$this->e($requests[0]['event_title'])?> </h2>

		<?php foreach ($requests as $request) {
			$this->insert('partials/single-event-request',['request'=>$request]);
		}
		?>

	</section>
<script type="text/javascript" src="<?= $this->assetUrl('js/gererutilisateurs.js')?>"></script>
<?php $this->stop('main_content') ?>
