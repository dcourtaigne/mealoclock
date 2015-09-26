    <div class='col-xs-12 col-sm-3 col-md-3 col-lg-3 bg-success marginTB20'>
        <h4 class='text-center noMargin'><?= $this->e($singleEvent['event_time'])?></h4>
    </div>

    <article class='col-xs-12 col-sm-7 col-md-7 col-lg-7'>
        <h3 class='noMargin marginTop20'><a href='#'><strong><?= $this->e($singleEvent['event_title'])?></strong></a></h3>
        <p class='noMargin'>Chez <a href='#'><?= $this->e($singleEvent['user_name'])?></a>, Paris <?= $this->e($singleEvent['event_location'])?></p>
        <p class='marginTop20 hidden-xs'><?= $this->e($singleEvent['event_desc'])?></p>
    </article>

    <div class='col-xs-12 col-sm-2 col-md-2 col-lg-2'>
        <div class='text-center marginTop20'>
            <a href='#'><img src='/mealoclock/public/assets/img/saladebis.jpg' class='img-responsive'></a>
        </div>
    </div>



