<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>

<section id="event" class="container-fluid">
      <section class="row">

          <article class="col-xs-12 col-sm-6 col-sm-push-3 col-md-6 col-md-push-3 paddingTB25">
            <h2 class="marginTB20"><a href="<?=$this->url('event',['id'=>$event[0]['id']])?>"><?=$this->e($event[0]['event_title'])?></a></h2>
              <p>Organisé par <a href="<?=$this->url('userProfile',['id'=>$event[0]['user_id']])?>"><strong><?=$this->e($event[0]['user_name'])?></strong></a></p> <br>
              <p><?=$this->e($event[0]['event_date'])?> à <?=$this->e($event[0]['event_time'])?></p>
              <p>Paris, <?=$this->e($event[0]['event_location'])?>e</p>
              <p>Participants : <?=$this->e(count($event['guests']))?>/<?=$this->e($event[0]['event_guests'])?></p>
          </article>

          <article class="col-xs-12 col-sm-3 col-sm-push-3 col-md-3 col-md-push-3 paddingTB25 text-center">
            <img src="img/croque-monsieur.jpg" class="img-responsive">
          </article>

          <div class="col-xs-12 col-sm-3 col-sm-pull-9 paddingTB20 vertical-center">
            <button type="button" name="Participer" class="btn btn-primary btn-block marginTop10 paddingTB20 green buttonEvent"><a href="#"><strong>Participer à l'événement</strong></a></button>
            <button type="button" name="Participer" class="btn btn-primary btn-block marginTop10 green buttonEvent"><a href="#"><strong>Poser une question</strong></a></button>
            <button type="button" name="Participer" class="btn btn-primary btn-block marginTop10 green buttonEvent"><a href="<?= $this->url('eventsbycom',['com'=>$event[0]['com_shortname']])?>"><strong>Evénements de la communauté</strong></a></button>
            <button type="button" name="Participer" class="btn btn-primary btn-block marginTop10 green buttonEvent"><a href="<?= $this->url('events')?>"><strong>Tous les événements</strong></a></button>
        </div>
      </section>

      <section class="row ">

        <article class="col-xs-12 col-sm-8 col-sm-push-3 marginTB10">
            <p class="text-left"><?=$this->e($event[0]['event_desc'])?></p>
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
