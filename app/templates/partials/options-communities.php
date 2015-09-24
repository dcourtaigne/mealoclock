<option <?php if($this->e($event['community_id']) == $this->e($community['id'])) echo 'selected '?>value="<?= $this->e($community['id']);?>"><?= $this->e($community['com_name']);?></option>
