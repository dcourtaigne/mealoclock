<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
  <div id="largeurSite">
    <section id="User">



       <!-- debut de la info du profil -->

        <div class="container-fluid">
          <div class="row">

            <div class="col-xs-12 col-sm-2 col-md-2 avatar marginTop20">
                <img src="http://lorempixel.com/100/100" alt="photo du profil" class="img-thumbnail Responsive image">
            </div>

            <div class="col-xs-12 col-sm-6 col-md-7">
                <h2> Bienvenue, <?=$this->e($thisUser['user_name'])?></h2>
                <p><a href="#" class="btn btn-default" role="button">Compléter mon profil</a></p>
                <p> Membre depuis le : <?=$this->e($thisUser['create_time'])?></p>
                <p> Repas organisé(s) : <?= $this->e(count($thisUser['eventsOrg']))?> </br>
                Repas participé(s) : <?= $this->e(count($thisUser['eventsPart']))?></p>
            </div>


        </div>

        <hr>

        <!-- commentaires -->

        <article>
            <span><img class="img-thumbnail" src="http://lorempixel.com/80/80"><a href="#"><em>Un utilisateur</em></a></span>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p></br>
        </article>
        <!-- tableau d'exemple en placement -->

        <section id="evenement" class="row container-fluid">
            <h3>Les prochains événements</h3>
                <ul class="list-unstyled list-inline">
                    <li><a href="#" class="btn btn-default" role="button">Gérer mes événements</a></li>
                    <li><a href="#" class="btn btn-primary" role="button">Créer un nouvel événement</a></li>
                </ul>
            <article>
                <h4 class="col-xs-12">J'organise</h4>
                    <section id="events">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section id="event_list" class="marginTB20">
                                <div class="col-xs-12">
                                    <ul class="list-unstyled">
                                    <hr class="marginTop10 bordeauNav">
                                    <?php foreach ($thisUser['eventsOrg'] as $event){
                                           $this->insert('partials/events-list-profile',['event'=>$event,'userName'=>$thisUser['user_name']]);
                                     }
                                     ?>
                                    </ul>
                                </div>
                        
                            </section>
                        </div>
                    </section>
                
            </article>
            <article>
                <h4 class="col-xs-12">Je participe</h4>
                    <section id="events">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section id="event_list" class="marginTB20">
                                <div class="col-xs-12">
                                    <ul class="list-unstyled">
                                    <hr class="marginTop10 bordeauNav">
                                    <?php foreach ($thisUser['eventsPart'] as $event){
                                           $this->insert('partials/events-list-profile',['event'=>$event,'userName'=> '']);
                                     }
                                     ?>
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </section>
            </article>

        </section>

        <!-- fin du tableau de placement -->

    </section>
 </div>
<?php $this->stop('main_content') ?>
