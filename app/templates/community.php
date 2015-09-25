<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>

  <section id="<?= $this->e($community['css_id'])?>" data-type="com" data-id="<?= $this->e($community['sql_id'])?>" data-class="<?= $this->e($community['css_class'])?>" class="container-fluid">

     <section class="row <?= $this->e($community['css_class'])?>">
        <div class="col-xs-2 col-sm-3 col-md-3 col-lg-3 marginTB20 ">
          <i class="glyphicon glyphicon-leaf logo hidden-sm hidden-md hidden-lg img-responsive marginTop10
        "></i>
          <img src="<?= $this->assetUrl('img/'.$community['css_id'].'.png')?>" class="hidden-xs img-responsive thumbnail">
        </div>

        <article class="col-xs-10 col-sm-9 col-md-9 col-lg-9 color-white marginTB20">
          <h2 class="marginTB20">Bienvenue dans l'espace <?= $this->e($community['name'])?></h2>
          <p class='hidden-xs marginTB20 text-left'>Ami végétarien, par choix ou par obligation, tu rejettes la consommation de viande au profil de végétaux, légumineux, graminés, racines, fruits et autres merveilles que la nature nous offre ! <br>Tu n’es pourtant pas contre un petit oeuf à la coque ou une tartine de miel tant que les poules et les abeilles n’ont pas été maltraitées. Question de principe. Partage ou découvre ce mode alimentaire connu de tous mais pratiqué par peu.</p>
        </article>
    </section>
    <section class="row">
      <article class="col-xs-9 col-sm-10 col-md-10 col-lg-10">
      <h3 class="h4 marginTop20">Evénements à venir</h2>
      </article>

      <div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 h4 ">
        <a href="<?=$this->url('editEvent', ['action' => 'create'])?>"><i class="btn btn-default glyphicon glyphicon-plus pull-right"></i></a>
      </div>
    </section>

        <!--<section id="events" class="container-fluid">-->
    <section>
      <label>Date: </label>
      <input type="text" id="datepicker"></button>
      <input type="button" value="Liste complète" id="resetDate" /></span>
    </section>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <section id="event_list" class="marginTB20">

      </section>
    </div>
  </section>

  <script type="text/javascript" src="<?= $this->assetUrl('js/datepicker_moc_com.js')?>"></script>


<?php $this->stop('main_content') ?>
