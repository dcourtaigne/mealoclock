<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
    <div class="largeurSite">
        <section id="User" class="container-fluid">
                <div class="col-xs-12">
                    <div class="row">
                   <!-- debut de la info du profil -->
                        <div class="col-xs-5 col-sm-3 marginTB20 text-center">
                             <?php if($thisUser['user_photo']): ?>
                            <img src="<?=$this->assetUrl('img/avatar/'.$thisUser['user_photo'])?>" alt="photo du profil" class="img-responsive thumbnail">
                            <?php else:?>
                            <img src="<?=$this->assetUrl('img/avatar/avatar.png')?>" alt="photo du profil" class="img-responsive thumbnail">
                            <?php endif ?>
                        </div>
                        <div class="col-xs-7 col-sm-9">
                            <h2><?=$thisUser['greeting']?></h2>
                            <?php if($w_user['id'] == $thisUser['id']):?>
                            <ul class="list-unstyled list-inline">
                                <li><a href="<?= $this->url('updateProfile')?>" class="btn btn-default" role="button">Compléter mon profil</a></li>
                                <li class="btn btn-default" role="button">Modifier ma photo
                                    <form method='POST' action='<?=$this->url('uploadPhotoProfile',['id'=>$thisUser['id']])?>' enctype="multipart/form-data">
                                    <!--  <label for="photo">Photo</label>-->
                                    <input style="opacity:0;position:absolute;z-index:99" type="file" name="photo">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                                </li>
                                <li>
                                    <input type="submit" class="btn btn-primary btn-xs" value="ok">
                                </form>
                                </li>
                            </ul>

                            <?php endif ?>
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <p> Membre depuis le : <?=$this->e($thisUser['create_time'])?></p>
                            <p> Repas organisé(s) : <?= $this->e(count($thisUser['eventsOrg']))?> </br>
                                    Repas participé(s) : <?= $this->e(count($thisUser['eventsPart']))?></p>
                        </div>
                    </div>

                </div>

                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-xs-12">
                            <blockquote><?=nl2br($thisUser['user_desc'])?></blockquote>
                            <p>Communautés favorites: </p>
                            <ul class="list-unstyled list-inline">
                                <?php  foreach($thisUser['communities'] as $com) {
                                   echo "<li><img src='".$this->assetUrl('img/'.$com['com_shortname'].'_thumb.png')."'class='img-thumbnail'></li>";
                                    }
                                    ?>
                            </ul>

                            <!-- commentaires -->

                            <section id="comments" class="row container-fluid marginTB20">
                                <h4>Les avis des gens</h4><br>
                                <ul class="list-unstyled list-inline">
                                    <li><img class="img-rounded" src="http://lorempixel.com/50/50"></li>
                                    <li><a href="#"><strong>Barbe Bleue</strong></a>
                                    <br><p>"Super soirée fondue avec Gaston, on remet ça bientôt!"</p></li>
                                </ul>
                            <hr>
                                <ul class="list-unstyled list-inline">
                                    <li><img class="img-rounded" src="http://lorempixel.com/50/50"></li>
                                    <li><a href="#"><strong>ChouFleur</strong></a><br>
                                    <p>"C'était génial, comme d'habitude :) Vivement VeggGiving!"</p></li>
                                </ul>
                            <hr>
                                <ul class="list-unstyled list-inline">
                                    <li><img class="img-rounded" src="http://lorempixel.com/50/50"></li>
                                    <li><a href="#"><strong>Grand Schtroumpf</strong></a><br>
                                    <p>"J'ignorais qu'on pouvait à ce point savourer des brocolis!"</p></li>
                                </ul>
                            </section>

                        </div>
                    </div>
                </div>

            <!-- tableau d'exemple en placement -->
            <div class="col-sm-5 col-sm-offset-1">
                <section id="evenementProfile" class="row container-fluid gris marginTB20">
                    <h3>Les prochains événements <?php if($w_user['id'] !== $thisUser['id']) echo 'de '.$this->e($thisUser['user_name'])?></h3>
                        <ul class="list-unstyled list-inline">
                    <?php if($w_user['id'] == $thisUser['id']):?>
                            <li><a href="<?=$this->url('myEvents')?>" class="btn btn-default" role="button">Gérer mes événements</a></li>
                    <?php endif ?>
                            <li><a href="<?=$this->url('editEvent',['action'=>'create'])?>" class="btn btn-primary" role="button">Créer un événement</a></li>
                        </ul>
			            <?php if(empty($thisUser['eventsOrg']) && empty($thisUser['eventsPart'])):?>
			            <p>Vous n'avez pas d'événements planifiés</p>
			            <?php endif?>
                    <?php if(!empty($thisUser['eventsOrg'])):?>
                    <section>
                        <h4 class="col-xs-12"><?= $this->e($thisUser['orgTitle'])?></h4>
                            <article id="events">
                                <div class="col-xs-12">
                                    <section id="event_list" class="marginTB20">
                                        <ul class="list-unstyled">

                                            <?php foreach ($thisUser['eventsOrg'] as $event){
                                                   $this->insert('partials/events-list-profile',['event'=>$event,'userName'=>$thisUser['user_name']]);
                                             }
                                             ?>
                                        </ul>
                                    </section>
                                </div>
                            </article>
                    </section>
                    <?php endif?>
                <?php if(!empty($thisUser['eventsPart'])):?>
                    <section>
                        <h4 class="col-xs-12"><?= $this->e($thisUser['partTitle'])?></h4>
                            <article id="events">
                                <div class="col-xs-12">
                                    <section id="event_list" class="marginTB20">
                                        <ul class="list-unstyled">

                                                <?php foreach ($thisUser['eventsPart'] as $event){
                                                   $this->insert('partials/events-list-profile',['event'=>$event,'userName'=> $event['user_name']]);
                                             }
                                             ?>
                                        </ul>
                                    </section>
                                </div>
                            </article>
                    </section>
                    <?php endif?>
                </section>
            </div>
            <!-- fin du tableau de placement -->
        </section>
    </div>

<?php $this->stop('main_content') ?>
