<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>

<section id="event" data-id="<?=$this->e($event[0]['id'])?>" class="container-fluid">
      <section class="row marginTop10">
      <div id="feedback"></div>

          <article class="col-xs-12 col-sm-6 col-sm-push-3 col-md-6 col-md-push-3 paddingTB25">
            <h2 class="marginTop10"><a href="<?=$this->url('event',['id'=>$event[0]['id']])?>"><?=$this->e($event[0]['event_title'])?></a></h2>
              <p>Organisé par <a href="<?=$this->url('userProfile',['id'=>$event[0]['user_id']])?>"><strong><?=$this->e(ucfirst($event[0]['user_name']))?></strong></a></p> <br>
              <p><i class="glyphicon glyphicon-time"></i> <?=$this->e($event[0]['event_date'])?> à <?=$this->e($event[0]['event_time'])?></p>
              <p><i class="glyphicon glyphicon-map-marker"></i> Paris, <?=$this->e($event[0]['event_location'])?>e</p>
              <p><i class="fa fa-child"></i> Participants : <?=$this->e(count($event['guests']))?>/<?=$this->e($event[0]['event_guests'])?></p>
          </article>

          <article class="col-xs-12 col-sm-3 col-sm-push-3 col-md-3 col-md-push-3 paddingTB20 text-center">
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


          <div class="col-xs-12 col-sm-3 col-sm-pull-9">
            <?php if($w_user):?>
            <?php if($w_user['id'] == $event[0]['user_id']):?>
            <button type="button" name="Participer" class="btn btn-primary btn-block marginTop20 color-white"><a href="<?=$this->url('myEvents')?>" class="color-white"><i class="glyphicon glyphicon-user color-white"></i><strong>  Gérer mes événements</strong></a></button>
            <?php endif ?>
              <?php if(!in_array($w_user['id'], $event['guestsId']) && $w_user['id'] !== $event[0]['user_id']):?>
              <button type="button" name="Participer" class="btn btn-primary btn-block marginTop20 color-white" id="buttonmsg"><a href="#" id="attend" class="color-white"><i class="glyphicon glyphicon-user color-white"></i><strong>  Participer</strong></a></button>
              <?php elseif(in_array($w_user['id'], $event['guestsId']) && $w_user['id'] !== $event[0]['user_id']):?>
              <button type="button" name="Participer" class="btn btn-primary btn-block marginTop20"><a href="#" id="cancel" class="color-white"><strong>Annuler ma participation</strong></a></button>
              <?php endif ?>
            <?php else:?>
            <button type="button" name="Participer" class="btn btn-primary btn-block marginTop20" id="open_register_form"><a href="#" id="inscription" class="color-white"><strong>Inscrivez-vous pour participer !</strong></a></button>
            <?php endif?>
            <button type="button" name="Participer" class="btn btn-primary btn-block marginTop10"><a href="#" class="color-white"><i class="glyphicon glyphicon-pencil"></i><strong>   Question</strong></a></button>
            <div class="btn-group btn-block">
              <button type="button" class="btn-group btn btn-primary dropdown-toggle btn-block marginTop10" name="events" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-search"></i>
                    <strong>  Evénements</strong> <span class="caret"></span>
              </button>
                <ul class="dropdown-menu">
                  <li><a href="<?= $this->url('eventsbycom',['com'=>$event[0]['com_shortname']])?>">Evénements de la communauté</a></li>
                  <li><a href="<?= $this->url('events')?>">Tous les événements</a></li>
                </ul>
             </div>
          </div>
      </section>

      <section class="row ">

        <article class="col-xs-12 col-sm-8 col-sm-push-3 marginTB20">
            <p class="text-left"><?=nl2br($event[0]['event_desc'])?></p>
        </article>

         <article class="col-xs-12 col-sm-3 col-sm-pull-8 marginTB20">
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
