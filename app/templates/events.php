<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
        <!-- section des communautés -->
            <!-- section de présentation générale des communautés -->
        <section id="events" class="container-fluid">

          <section class="row">
            <article class="col-xs-11">
              <h3 class="marginTop20">Evénements à venir</h3>
              <p>Retrouvez l'ensemble des événements à venir toutes communautés confondues, par ordre chronologique ou en recherchant une date précise.</p>
            </article>
          </section>

          <hr>

          <section class="pull-left">
            <label>Rechercher par date: </label>
            <input type="text" id="datepicker"></button>
            <button type="button" id="resetDate" class="btn btn-default btn-round-xs btn-xs glyphicon glyphicon-refresh"></button>
          </section>

          <div>
            <a href="<?=$this->url('editEvent', ['action' => 'create'])?>"><i class="btn btn-default glyphicon glyphicon-plus pull-right marginTop10"></i></a>
          </div>

          <section id="event_list" class="col-xs-12 marginTB20">
            <ul class="list-unstyled">
              <?php foreach($events as $event):?>
                <li class="row center" id="<?= $this->e($event[0]['event_date'])?>">
                  <div class='col-xs-12 vege'>
                    <p class='text-left h4 color-white'><?= $this->e($event[0]['dateFR'])?></p>
                  </div>
                  <?php foreach($event as $singleEvent){
                    $this->insert('partials/events-list',['singleEvent'=>$singleEvent]);
                  }?>
                </li>
              <?php endforeach ?>
            </ul>
          </section>

        </section>


    <script type="text/javascript" src="<?= $this->assetUrl('js/datepicker_moc.js')?>"></script>
    <script type="text/javascript" src="<?= $this->assetUrl('js/datepicker_fr.js')?>"></script>


<?php $this->stop('main_content') ?>
