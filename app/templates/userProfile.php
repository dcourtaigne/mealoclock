<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
    <div id="largeurSite">
        <section id="User" class="container-fluid">
                <div class="col-xs-12">
                    <div class="row">
                   <!-- debut de la info du profil -->
                        <div id="thumbnail" class="col-xs-4 marginTB20 text-center">
                            <img src="http://lorempixel.com/250/250" alt="photo du profil" class="img-responsive thumbnail">
                        </div>    
                        <div class="col-xs-8">
                            <h2><?=$thisUser['greeting']?></h2>
                            <?php if($w_user['id'] == $thisUser['id']):?>
                            <ul class="list-unstyled list-inline">
                                <li><a href="<?= $this->url('updateProfile')?>" class="btn btn-default" role="button">Compléter mon profil</a></li>
                                <li><a href="" class="btn btn-default" role="button">Modifier ma photo</a></li>                    
                            </ul>

                            <?php endif ?>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">   
                            <p> Membre depuis le : <?=$this->e($thisUser['create_time'])?></p>
                            <p> Repas organisé(s) : <?= $this->e(count($thisUser['eventsOrg']))?> </br>
                                    Repas participé(s) : <?= $this->e(count($thisUser['eventsPart']))?></p>
                        </div>     
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-xs-12">
                            <blockquote><?=$this->e($thisUser['user_desc'])?></blockquote>
                            <p>Communautés favorites: </p>
                            <ul class="list-unstyled list-inline">
                                <?php  foreach($thisUser['communities'] as $com) {
                                   echo "<li><img src='".$this->assetUrl('img/'.$com['com_shortname'].'_thumb.png')."'class='img-thumbnail'></li>";
                                    }
                                    ?>     
                            </ul>
                        <hr>
                            <!-- commentaires -->

                            <section id="comments" class="row container-fluid">
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
                <section id="evenementProfile" class="row container-fluid">
                    <h3>Les prochains événements <?php if($w_user['id'] !== $thisUser['id']) echo 'de '.$this->e($thisUser['user_name'])?></h3>
                    <?php if($w_user['id'] == $thisUser['id']):?>
                        <ul class="list-unstyled list-inline">
                            <li><a href="#" class="btn btn-default" role="button">Gérer mes événements</a></li>
                            <li><a href="<?=$this->url('editEvent', ['action' => 'create'])?>" class="btn btn-primary" role="button">Créer un nouvel événement</a></li>
                        </ul>
                    <?php endif ?>
                    <section>
                        <h4 class="col-xs-12"><?= $this->e($thisUser['orgTitle'])?></h4>
                            <article id="events">
                                <div class="col-xs-12">
                                    <section id="event_list" class="marginTB20">
                                        <ul class="list-unstyled">
                                        <hr class="marginTop10 bordeauNav">
                                            <?php foreach ($thisUser['eventsOrg'] as $event){
                                                   $this->insert('partials/events-list-profile',['event'=>$event,'userName'=>$thisUser['user_name']]);
                                             }
                                             ?>
                                        </ul>
                                    </section>
                                </div>
                            </article>
                    </section>

                    <section>
                        <h4 class="col-xs-12"><?= $this->e($thisUser['partTitle'])?></h4>
                            <article id="events">
                                <div class="col-xs-12">
                                    <section id="event_list" class="marginTB20">
                                        <ul class="list-unstyled">
                                        <hr class="marginTop10 bordeauNav">
                                            <?php foreach ($thisUser['eventsPart'] as $event){
                                                   $this->insert('partials/events-list-profile',['event'=>$event,'userName'=> $event['user_name']]);
                                             }
                                             ?>
                                        </ul>
                                    </section>
                                </div>
                            </article>
                    </section>
                </section>
            </div>  
            <!-- fin du tableau de placement -->
        </section>
    </div>

<?php $this->stop('main_content') ?>
