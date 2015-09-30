<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>

  <section id="<?= $this->e($community['com_shortname'])?>" data-type="com" data-id="<?= $this->e($community['id'])?>" data-class="<?= $this->e($community['com_shortname'])?>" class="container-fluid">

     <section class="row <?= $this->e($community['com_shortname'])?>">
        <div class="col-xs-2 marginTB20 ">
          <i class="glyphicon <?=$this->e($community['icon'])?> logo hidden-sm hidden-md hidden-lg img-responsive marginTop10
        "></i>
          <img src="<?= $this->assetUrl('img/'.$community['com_shortname'].'.png')?>" class="hidden-xs img-responsive thumbnail">
        </div>

        <article class="col-xs-10 color-white marginTB20">
          <h2 class="marginTB20">Bienvenue dans l'espace <?= $this->e($community['com_name'])?></h2>
          <p class='hidden-xs marginTB20 text-left'><?= $this->e($community['com_desc'])?></p>
        </article>
    </section>
    <section class="row marginTop20">
      <article class="col-xs-6 col-sm-4">
      <h3>Evénements à venir</h3>
      </article>

      <div class="col-xs-10 col-sm-5 marginTop10">
        <section class="pull-left">
            <label>Rechercher par date: </label>
            <input type="text" id="datepicker"></button>
            <button type="button" id="resetDate" class="btn btn-default btn-round-xs btn-xs glyphicon glyphicon-refresh"></button>
        </section>
      </div>

      <div class="col-xs-2 col-sm-3 h4 ">
        <button type="button" name="créer un événement" class="btn btn-default pull-right marginTop10"><a href="<?=$this->url('editEvent', ['action' => 'create'])?>"><i class="glyphicon glyphicon-plus"></i><strong class="hidden-xs"> créer un événement</strong></a></button>
      </div>

    </section>

        <!--<section id="events" class="container-fluid">-->
    <div class="col-xs-12">
      <section id="event_list" class="marginTB20">
        <ul class="list-unstyled">
          <?php foreach($events as $event):?>
            <li class="row center " id="<?= $this->e($event[0]['event_date'])?>">
              <div class='col-xs-12 <?= $this->e($community['com_shortname'])?>'>
                <p class='text-center h4 color-white'><?= $this->e($event[0]['dateFR'])?></p>
              </div>
              <?php foreach($event as $singleEvent){
                $this->insert('partials/events-list',['singleEvent'=>$singleEvent]);
              }?>
            </li>
          <?php endforeach ?>
            </ul>
      </section>
    </div>
  </section>

  <script type="text/javascript" src="<?= $this->assetUrl('js/datepicker_moc_com.js')?>"></script>
  <script type="text/javascript" src="<?= $this->assetUrl('js/datepicker_fr.js')?>"></script>


<?php $this->stop('main_content') ?>
