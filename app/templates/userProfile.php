<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
  <div id="largeurSite">
    <section id="User">
 
      
 
       <!-- debut de la info du profil -->
 
        <div class="container-fluid">
          <div class="row">
 
            <div class="col-xs-12 col-sm-2 col-md-2 avatar">
                <img src="http://lorempixel.com/100/100" alt="photo du profil" class="img-thumbnail Responsive image">
            </div>
 
            <div class="col-xs-12 col-sm-6 col-md-7">
                <h2> Bienvenue, Gaston</h2>
                <p><a href="#" class="btn btn-default" role="button">Compléter mon profil</a></p>
                <p> Membre depuis le : <?php echo "A INSERER DYNAMIQUEMENT"?></p>
                <p> Repas organisé(s) : <?php echo "A INSERER DYNAMIQUEMENT" ?> </br>
                Repas participé(s) : <?php echo "A INSERER DYNAMIQUEMENT" ?></p>
            </div>
 
            
        </div>
 
        <hr>
 
        <!-- commentaires -->
       
        <article>
            <span><img class="img-thumbnail" src="http://lorempixel.com/80/80"><a href="#"><em>Un utilisateur</em></a></span>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p></br>
        </article>
        <!-- tableau d'exemple en placement -->
 
        <section id="evenement">
            <h3>Les prochains événements</h3>
                <div class="col-xs-12 col-sm-4 col-md-3">
                <a href="#" class="btn btn-default" role="button">Gérer mes événements</a><br></br>
                </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <a href="#" class="btn btn-primary" role="button">Créer un nouvel événement</a><br></br>
            </div>              
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="list-unstyled">
                <hr class="marginTop10 bordeauNav">
                 
                    <li class="row">
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          <strong class="h3">2</strong></br>septembre
                        </div>
                 
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                            <h3>Soirée Salade</h3>
                            <p>19h30</p>
                            <p>Chez <a href="#">Gaston</a>, Paris 14e</p>
                        </div>
                    </li>
 
                <hr class="bordeauNav">
 
                    <li class="row">
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                          <strong class="h3">25</strong></br>octobre
                        </div>
             
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                          <h3>Soirée Radis</h3>
                          <p>19h30</p>
                          <p>Chez <a href="#">Lulu</a>, Paris 5e</p>
                        </div>
                    </li>
 
                </ul>
            </div>
        </section>
 
        <!-- fin du tableau de placement -->
 
    </section>
 </div>
<?php $this->stop('main_content') ?>