<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
    <div id="largeurSite">
        <section id="User" class="row container-fluid">
           <!-- debut de la info du profil -->
            <div id="thumbnail" class="col-xs-12">
                <img src="http://lorempixel.com/1200/300" alt="photo du profil" class="img-responsive">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-7">
                <h2> Bienvenue, <?=$this->e($thisUser['user_name'])?></h2>
                <p><a href="#" class="btn btn-default" role="button">Compléter mon profil</a></p>
                <p> Membre depuis le : <?=$this->e($thisUser['create_time'])?></p>
                <p> Repas organisé(s) : <?= $this->e(count($thisUser['eventsOrg']))?> </br>
                        Repas participé(s) : <?= $this->e(count($thisUser['eventsPart']))?></p>
            </div>
        </section>
        <hr> 
        <!-- commentaires -->
        
        <section id="comments" class="row container-fluid">
            <div class="col-xs-4">
                <img class="img-thumbnail" src="http://lorempixel.com/80/80">
            </div>
            <div class="col-xs-8">
                <p>"Super soirée fondue avec Gaston, on remet ça bientôt!"</p>
                <a href="#"><strong> - Barbe Bleue</strong></a>
            </div>
        </section>
        
        <!-- tableau d'exemple en placement -->

        <section id="evenement" class="row container-fluid">
            <h2>Les prochains événements</h2>
                <ul class="list-unstyled list-inline">
                    <li><a href="#" class="btn btn-default" role="button">Gérer mes événements</a></li>
                    <li><a href="#" class="btn btn-primary" role="button">Créer un nouvel événement</a></li>
                </ul>
            <section>
                <h4 class="col-xs-12">J'organise</h4>
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
                <h4 class="col-xs-12">Je participe</h4>
                    <article id="events">
                        <div class="col-xs-12">
                            <section id="event_list" class="marginTB20">
                                <ul class="list-unstyled">
                                <hr class="marginTop10 bordeauNav">
                                    <?php foreach ($thisUser['eventsPart'] as $event){
                                           $this->insert('partials/events-list-profile',['event'=>$event,'userName'=> '']);
                                     }
                                     ?>
                                </ul>
                            </section>
                        </div>
                    </article>
            </section>
        </section>

        <!-- fin du tableau de placement -->
    </div>
<?php $this->stop('main_content') ?>
