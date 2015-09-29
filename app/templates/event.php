<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>

<section id="event" data-id="<?=$this->e($event[0]['id'])?>" class="container-fluid">
      <section class="row">
      <div id="feedback"></div>

          <article class="col-xs-12 col-sm-6 col-sm-push-3 col-md-6 col-md-push-3 paddingTB25">
            <h2 class="marginTB20"><a href="<?=$this->url('event',['id'=>$event[0]['id']])?>"><?=$this->e($event[0]['event_title'])?></a></h2>
              <p>Organisé par <a href="<?=$this->url('userProfile',['id'=>$event[0]['user_id']])?>"><strong><?=$this->e(ucfirst($event[0]['user_name']))?></strong></a></p> <br>
              <p><?=$this->e($event[0]['event_date'])?> à <?=$this->e($event[0]['event_time'])?></p>
              <p>Paris, <?=$this->e($event[0]['event_location'])?>e</p>
              <p>Participants : <?=$this->e(count($event['guests']))?>/<?=$this->e($event[0]['event_guests'])?></p>
          </article>

          <article class="col-xs-12 col-sm-3 col-sm-push-3 col-md-3 col-md-push-3 paddingTB25 text-center">
            <?php if($event[0]['event_image']): ?>
            <img src="<?=$this->assetUrl('img/event/'.$event[0]['event_image'])?>" class="img-responsive">
          <?php else:?>
            <img src="<?=$this->assetUrl('img/event/default.jpg')?>" class="img-responsive">
          <?php endif ?>
          <?php if($w_user['id'] == $event[0]['user_id']): ?>
            <div class="col-xs-12 col-sm-2 form-group photoUpload">
              <form method='POST' action='<?=$this->url('uploadPhotoEvent',['id'=>$event[0]['id']])?>' enctype="multipart/form-data">
               <!--  <label for="photo">Photo</label>-->
                <input type="file" name="photo">
                <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                <button type="submit" class="btn btn-primary btn-xs">Ok</button>
              </form>
            </div>
            <?php endif ?>
          </article>


          <div class="col-xs-12 col-sm-3 col-sm-pull-9 paddingTB20 vertical-center">
            <?php if($w_user):?>
            	<?php if(!in_array($w_user['id'], $event['guestsId'])):?>
              <button type="button" name="Participer" class="btn btn-primary btn-block marginTop10 paddingTB20 green buttonEvent" id="buttonmsg"><a id="attend"><strong>Participer à l'événement</strong></a></button>
              <?php else :?>
              <button type="button" name="Participer" class="btn btn-primary btn-block marginTop10 paddingTB20 red buttonEvent"><a id="cancel"><strong>Annuler ma participation</strong></a></button>
              <?php endif ?>
            <?php else:?>
            <button type="button" name="Participer" class="btn btn-primary btn-block marginTop10 paddingTB20 green buttonEvent" id="open_register_form"><a id="inscription"><strong>Inscriver vous pour participer!</strong></a></button>
            <?php endif?>
            <button type="button" name="Participer" class="btn btn-primary btn-block marginTop10 green buttonEvent"><a href="#"><strong>Poser une question</strong></a></button>
            <button type="button" name="Participer" class="btn btn-primary btn-block marginTop10 green buttonEvent"><a href="<?= $this->url('eventsbycom',['com'=>$event[0]['com_shortname']])?>"><strong>Evénements de la communauté</strong></a></button>
            <button type="button" name="Participer" class="btn btn-primary btn-block marginTop10 green buttonEvent"><a href="<?= $this->url('events')?>"><strong>Tous les événements</strong></a></button>
        </div>
      </section>

      <section class="row ">

        <article class="col-xs-12 col-sm-8 col-sm-push-3 marginTB10">
            <p class="text-left"><?=nl2br($event[0]['event_desc'])?></p>
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
<div class="overlay">
  <div id="modale_participation">
    <form id="participation" method="POST" action="<?=$this->url('eventRequest')?>">
      <button class="fermer_modale_p">x</button>
      <h4>Demande de participation</h4>
      <p>Envoyez un message à l'organisateur avec votre demande participation</p>
      <div class="text-danger" id="error"></div>
      <textarea id="champ_message" name="message" placeholder="Cliquer pour saisir"></textarea>
      <input type="hidden" value="<?=$w_user['id']?>" name="guest_id">
      <input type="hidden" value="<?=$event[0]['id']?>" name="event_id">
      <input type="submit" id="submit_button_p" label="Envoyer" value="Envoyer">
    </form>
  </div>
</div>

<div class="overlay2">
  <div id="modale_annulation">
    <form id="annulation" method="POST" action="<?=$this->url('eventCancelRequest')?>">
      <button class="fermer_modale_2">x</button>
      <p>Etes vous sûr de vouloir annuler votre participation à cet événement?</p>
      <div class="text-danger" id="error"></div>
      <input type="hidden" value="<?=$w_user['id']?>" name="guest_id">
      <input type="hidden" value="<?=$event[0]['id']?>" name="event_id">
      <input type="submit" label="Envoyer" name="cancel" value="OK">
    </form>
  </div>
</div>

<script type="text/javascript" src="<?= $this->assetUrl('js/modale_participation.js')?>"></script>

<?php $this->stop('main_content') ?>
