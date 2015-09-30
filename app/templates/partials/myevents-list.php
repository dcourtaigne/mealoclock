
<li class="center">

  <div class="vege col-xs-12">
    <p class=" h4 color-white"><?= $this->e($singleEvent['dateFR'])?></p>
    <div class="buttons_gerer_event">
      <button class="confirmer_event" data-id="<?=$singleEvent['id']?>"><a href="<?= $this->url('getEventRequests',['id'=>$singleEvent['id']])?>">Gerer l'evenement</a></button>
      <button class="update_event"><a href="<?= $this->url('editEvent',['action'=>'edit','id'=>$singleEvent['id']])?>">Modifier l'evenement</a></button>
      <button class="cancel_event">Annuler l'evenement</button>
    </div>
    <div class="dropdown_menu">
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="<?= $this->url('getEventRequests',['id'=>$singleEvent['id']])?>">Gerer l'évenement</a></li>
        <li><a href="<?= $this->url('editEvent',['action'=>'edit','id'=>$singleEvent['id']])?>">Modifier l'évenement</a></li>
        <li><a href="#">Annuler l'évenement</a></li>
      </ul>
    </div>
  </div>

  <div class="col-xs-12 col-sm-3 bg-success marginTB20">
    <h4 class="noMargin"><?= $this->e($singleEvent['time'])?></h4>
  </div>

  <article class="col-xs-12 col-sm-9">
    <H3>
      <strong><?= $this->e($singleEvent['event_title'])?></strong>
    </H3>

    <p class="noMargin">
        Chez <a href="#"><?= $this->e($singleEvent['user_name'])?></a> , Paris <?= $this->e($singleEvent['event_location'])?>
    </p>
    <p class="marginTop20 comment_field">
    <?= nl2br($singleEvent['event_desc'])?>
    </p>
  </article>
  </li>
