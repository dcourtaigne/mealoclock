<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>

<section id="event" class="container-fluid">
      <section class="row">

        <div class="col-xs-12 col-sm-3 paddingTB20 vertical-center">
            <button type="button" name="Participer" class="btn btn-primary btn-block marginTop10 paddingTB20 green"><a href="#"><strong>Participer à l'événement</strong></a></button>
            <button type="button" name="Participer" class="btn btn-primary btn-block marginTop10 green"><a href="#"><strong>Poser une question</strong></a></button>
            <button type="button" name="Participer" class="btn btn-primary btn-block marginTop10 green"><a href="<?= $this->url('eventsbycom',['com'=>$event[0]['com_shortname']])?>"><strong>Evénements de la communauté</strong></a></button>
            <button type="button" name="Participer" class="btn btn-primary btn-block marginTop10 green"><a href="<?= $this->url('events')?>"><strong>Tous les événements</strong></a></button>
        </div>

          <article class="col-xs-12 col-sm-6 paddingTB25">
            <h2 class="marginTB20"><?=$this->e($event[0]['event_title'])?></h2>
              <p>Organisé par <a href="#"><strong><?=$this->e($event[0]['user_name'])?></strong></a></p> <br>
              <p><?=$this->e($event[0]['event_date'])?> à <?=$this->e($event[0]['event_time'])?></p>
              <p>Paris, <?=$this->e($event[0]['event_location'])?>e</p>
              <p>Participants : <?=$this->e(count($event['guests']))?>/<?=$this->e($event[0]['event_guests'])?></p>
          </article>

          <article class="col-xs-12 col-sm-3 marginTB10">
            <img src="img/croque-monsieur.jpg" class="img-responsive">
          </article>
      </section>

      <section class="row ">

        <article class="col-xs-12 col-sm-8 col-sm-push-3 marginTB10">
            <p class="text-left"><?=$this->e(count($event[0]['event_desc']))?></p>
        </article>

         <article class="col-xs-12 col-sm-3 col-sm-pull-8 marginTB10">
            <div class=" row thumbnail noMargin text-center">

                <p>Membres participants</p>

              <ul class="list-unstyled list-inline marginTop10">
                <?php foreach ($event['guests'] as $guest){
               $this->insert('partials/event-guests',['guest'=>$guest]);
                }
                ?>

              </ul>

            </div>
          </article>


      </section>

</section>
<?php $this->stop('main_content') ?>
