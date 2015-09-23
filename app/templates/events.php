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
            <!--  <ul class="list-unstyled">
                        <?php /*foreach($events as $event)
                  for($i=0;$i<count($events);$i++):?>
                    <?php if($events[$i]['event_date'] !== $events[$i-1]['event_date'] || $i == 0): ?>
                      <li class="row center">
                        <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 vertClair'>
                          <p class='text-center h4 color-white'><?= $this->e($events[$i]['dateFR'])?></p>
                        </div>
                    <?php endif ?>
                  <?php $this->insert('partials/events-list',['event'=>$event]);?>
                  </li>
                        <?php endfor */?>
            </ul> -->
            </section>
          </div>
        </section>

    <script type="text/javascript" src="<?= $this->assetUrl('js/datepicker_moc.js')?>"></script>

<?php $this->stop('main_content') ?>
