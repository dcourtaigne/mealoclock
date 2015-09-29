    <div class='col-xs-12 col-sm-3 bg-success marginTB20'>
        <h4 class='noMargin'><?= $this->e($singleEvent['event_time'])?></h4>
    </div>

    <article class='col-xs-12 col-sm-7'>
        <h3 class='noMargin marginTop20 text-left'><a href="<?=$this->url('event',['id'=>$singleEvent['id']])?>"><strong><?= $this->e($singleEvent['event_title'])?></strong></a></h3>
        <p class='noMargin'>Chez <a href="<?=$this->url('userProfile',['id'=>$singleEvent['user_id']])?>"><?= $this->e(ucfirst($singleEvent['user_name']))?></a>, Paris <?= $this->e($singleEvent['event_location'])?></p>
        <p class='marginTop20 hidden-xs'><?= nl2br($singleEvent['event_desc'])?></p>
    </article>

    <div class='col-xs-12 col-sm-2'>
        <div class='marginTB20'>
            <a href='<?=$this->url('event',['id'=>$singleEvent['id']])?>'><img src="<?=$this->assetUrl('img/event/'.$singleEvent['event_image'])?>" class='img-responsive'></a>
        </div>
    </div>



