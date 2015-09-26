<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
        <!-- section des communautés -->
            <!-- section de présentation générale des communautés -->
        <section id="events" class="container-fluid">
          <section class="row">
            <article class="col-xs-9 col-sm-10 col-md-10 col-lg-10">
            <h3 class="h4 marginTop20">Evénements à venir</h2>
            </article>

            <div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 h4 ">
              <a href="<?=$this->url('editEvent', ['action' => 'create'])?>"><i class="btn btn-default glyphicon glyphicon-plus pull-right"></i></a>
            </div>
          </section>
          <section>
            <label>Date: </label>
            <input type="text" id="datepicker"></button>
            <input type="button" value="Liste complète" id="resetDate" /></span>
          </section>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <section id="event_list" class="marginTB20">
              <ul class="list-unstyled">
                <?php foreach($events as $event):?>
                  <li class="row center" id="<?= $this->e($event[0]['event_date'])?>">
                    <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 vege'>
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


    <script type="text/javascript" src="<?= $this->assetUrl('js/datepicker_moc.js')?>"></script>
    <script type="text/javascript" src="<?= $this->assetUrl('js/datepicker_fr.js')?>"></script>


<?php $this->stop('main_content') ?>
