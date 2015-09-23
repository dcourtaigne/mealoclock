<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
        <!-- section des communautés -->
            <!-- section de présentation générale des communautés -->
        <section id="events" class="container-fluid">
          <section>
            <label>Date: </label>
            <input type="text" id="datepicker"></button>
            <input type="button" value="Liste complète" id="resetDate" /></span>
          </section>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <section id="event_list" class="marginTB20">

       <!--                <?php
       /*foreach ($events as $event) {
         $eventDate=explode('-',$event['event_date']);
         $year = $eventDate[0];
         $month = $eventDate[1];
         $day = $eventDate[2];
         $this->insert('partials/events-list',['event'=>$event,'year'=>$year,'month'=>$month,'day'=>$day]);
       }*/
       ?> -->
            </section>
          </div>
        </section>

    <script type="text/javascript" src="<?= $this->assetUrl('js/datepicker_moc.js')?>"></script>

<?php $this->stop('main_content') ?>
