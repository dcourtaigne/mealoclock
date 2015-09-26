<input type="checkbox" value="<?=$this->e($community['id'])?>"
<?php foreach ($userCom as $com):?>
  <?php if($community['id'] == $com['id']):?>
  checked = "checked"
  <?php endif ?>
<?php endforeach ?>
> <?=$this->e($community['com_name'])?>

