<li>
<?php if($guest['user_photo_thumb']): ?>
    <img src="<?=$this->assetUrl('img/avatar/'.$guest['user_photo_thumb'])?>" alt="avatar" class="img-responsive">
<?php else:?>
    <img src="<?=$this->assetUrl('img/avatar/avatar_thumbnail.png')?>" alt="avatar" class="img-responsive">
<?php endif?>
                  <p class="noMargin"><a href="<?= $this->url('userProfile',["id"=>$guest['id']])?>"><?=$this->e($guest['user_name'])?></a></p></li><br>
