<?php for($i=1;$i<=20;$i++):?>
<option <?php if($this->e($event['event_location'] == $i)) echo 'selected ';?>value="<?= $i ?>">
<?php if($i==1):?>
<?= "Paris ".$i."er"?></option>
<?php else :?>
<?= "Paris ".$i."e"?></option>
<?php endif ?>
<?php endfor?>
