<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
    <div id="largeurSite">
        <section id="User" class="container-fluid">
            <div class="row">
           <!-- debut de la info du profil -->
                <div id="thumbnail" class="col-xs-12">
                    <img src="http://lorempixel.com/1200/300" alt="photo du profil" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7">
                    <h2><?=$thisUser['greeting']?></h2>
                    <?php if($w_user['id'] == $thisUser['id']):?>
                    <p><a href="<?= $this->url('updateProfile')?>" class="btn btn-default" role="button">Compléter mon profil</a></p>
                    <?php endif ?>
                    <p> Membre depuis le : <?=$this->e($thisUser['create_time'])?></p>
                    <p> Repas organisé(s) : <?= $this->e(count($thisUser['eventsOrg']))?> </br>
                            Repas participé(s) : <?= $this->e(count($thisUser['eventsPart']))?></p>
                    <p>Présentation: <?=$this->e($thisUser['user_desc'])?></p>

                    <p>Communautés favorites: </p>
                    <ul>
                        <?php  foreach($thisUser['communities'] as $com) {
                           echo "<li>".$com['com_name']."</li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>

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

            <!-- tableau d'exemple en placement -->

            <section id="evenementProfile" class="row container-fluid">
                <h2>Les prochains événements <?php if($w_user['id'] !== $thisUser['id']) echo 'de '.$this->e($thisUser['user_name'])?></h2>
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

            <!-- fin du tableau de placement -->
        </section>
    </div>

<?php $this->stop('main_content') ?>
