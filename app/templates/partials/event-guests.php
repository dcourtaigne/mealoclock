<li> <img src="<?=$this->assetUrl('img/avatar/'.$guest['user_photo_thumb'])?>" alt="avatar" class="img-responsive">
                  <p class="noMargin"><a href="<?= $this->url('userProfile',["id"=>$guest['id']])?>"><?=$this->e($guest['user_name'])?></a></p></li><br>
