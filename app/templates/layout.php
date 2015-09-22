<?php $this->insert('partials/header',['title'=>$this->e($title)]) ?>

			<?= $this->section('main_content') ?>

<?php $this->insert('partials/footer') ?>
