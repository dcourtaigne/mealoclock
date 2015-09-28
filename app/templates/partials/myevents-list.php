<li>
  <button class="confirmer_event">Gerer l'evenement</button>
  <div class="vege col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <p class=" h4 color-white"><?= $this->e($singleEvent['dateFR'])?></p>

  </div>

  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 bg-success marginTB20">
    <h4 class="text-center noMargin"><?= $this->e($singleEvent['time'])?></h4>
  </div>

  <article>
    <H3>
      <strong><?= $this->e($singleEvent['event_title'])?></strong>
    </H3>


    <p class="noMargin chez">
        Chez <a href="#"><?= $this->e($singleEvent['user_name'])?></a> , Paris <?= $this->e($singleEvent['event_location'])?>
    </p>
    <p class="marginTop20 comment">
    <?= nl2br($singleEvent['event_desc'])?>
    </p>
  </article>
  </li>
