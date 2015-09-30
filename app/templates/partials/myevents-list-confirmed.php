<li class="center">
  <div class="vege col-xs-12">
    <p class=" h4 color-white"><?= $this->e($singleEvent['dateFR'])?></p>
    <button class="gerer_event">Annuler mon inscription</button>
  </div>

  <div class="col-xs-12 col-sm-3 bg-success marginTB20  ">
    <h4 class="noMargin"><?= $this->e($singleEvent['time'])?></h4>
  </div>

  <article class="col-xs-12 col-sm-9">
    <H3 class="noMargin marginTop20">
      <strong><?= $this->e($singleEvent['event_title'])?></strong>
    </H3>

    <p class="noMargin">
        Chez <a href="#"><?= $this->e($singleEvent['user_name'])?></a>, Paris <?= $this->e($singleEvent['event_location'])?>
    </p>
    <p class="marginTop20">
      <?= nl2br($singleEvent['event_desc'])?>
    </p>
  </article>
  </li>
