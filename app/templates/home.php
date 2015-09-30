<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
  <section id="entete" class="container-fluid">
      <div class="row">
        <!-- The carousel -->
            <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#transition-timer-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#transition-timer-carousel" data-slide-to="1"></li>
            <li data-target="#transition-timer-carousel" data-slide-to="2"></li>
            <li data-target="#transition-timer-carousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
                        <img src="<?= $this->assetUrl('img/vege_fruit.jpg')?>" alt="image d'un mur rempli d'oranges" />
                        <div class="carousel-caption">
                            <h1 class="carousel-caption-header">Végétarien</h1>
                            <p class="carousel-caption-text hidden-xs">
                                Manger 5 fruits et légumes ne date pas d'hier pour les végétariens. Découvrez cette communauté et la variété culinaire qui la caractérise.
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?= $this->assetUrl('img/vegan_frie.jpg')?>" alt="image d'un cornet de frite"/>
                        <div class="carousel-caption">
                            <h1 class="carousel-caption-header">Vegans</h1>
                            <p class="carousel-caption-text hidden-xs">
                             <strong>Un régime alimentaire sans produits d'origine animale, c'est possible et ce n'est pas un sacrifice. Notre communauté végan en est la preuve. Soyez curieux et goûtez !</strong></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?= $this->assetUrl('img/gluten_cake.jpg')?>" alt="image d'une personne pétrissant de la pate sans gluten'"/>
                        <div class="carousel-caption">
                            <h1 class="carousel-caption-header">Sans gluten</h1>
                            <p class="carousel-caption-text hidden-xs">
                               <strong> Les alternatives aux produits contenant du gluten sont nombreuses. Les connaissez-vous ? Venez en apprendre plus dans les repas sans gluten de notre communauté.</strong>
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?= $this->assetUrl('img/lactose_cake.jpg')?>" alt="image de gateau sans lactose" />
                        <div class="carousel-caption">
                            <h1 class="carousel-caption-header">Sans lactose</h1>
                            <p class="carousel-caption-text hidden-xs">
                                <strong>Lait, yaourt, chocolat, fromage et l'ensemble des produits communs existent sans lactose, pour le bien-être de tous. Prenez un repas sans lactose avec nous !</strong>
                            </p>
                        </div>
                    </div>
                </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>

        </div>
      </div>

          <!-- rangée pitch communauté -->
    <div>
      <hr>
    <section id="community" class="row">
      <article class="col-xs-12 text-center paddingTB40 color-white anthracite">
        <h2> Nos communautés </h2>
        <p class="text-center"><strong>Meal o'clock regroupe 4 régimes alimentaires principaux. Choisissez celui qui vous correspond ou bien celui que vous souhaitez découvrir, consultez les événements à venir, le profil de nos membres, etc !</strong></p>
      </article>
    </section>

    <section class="row text-center">

      <a href="#">
        <article class="col-xs-6 col-sm-3 vege color-white paddingTB20">
          <a href="<?= $this->url('eventsbycom',['com'=>'vege']); ?>"><img src="<?= $this->assetUrl('img/vege.png')?>" alt="logo communauté végétariens" class="img-responsive center-block social"></a>
        </article>
      </a>


      <a href="#">
        <article class="col-xs-6 col-sm-3 vegan color-white paddingTB20">
          <a href="<?= $this->url('eventsbycom',['com'=>'vegan']); ?>"><img src="<?= $this->assetUrl('img/vegan.png')?>" alt="logo communauté végans" class="img-responsive center-block social"></a>
        </article>
      </a>

      <a href="#">
        <article class="col-xs-6 col-sm-3 ssgluten color-white paddingTB20">
          <a href="<?= $this->url('eventsbycom',['com'=>'ssgluten']); ?>"><img src="<?= $this->assetUrl('img/ssgluten.png')?>" alt="logo communauté sans gluten" class="img-responsive center-block social"></a>
        </article>
      </a>


      <a href="#">
        <article class="col-xs-6 col-sm-3 sslactose color-white paddingTB20">
          <a href="<?= $this->url('eventsbycom',['com'=>'sslactose']); ?>"><img src="<?= $this->assetUrl('img/sslactose.png')?>" alt="logo communauté sans lactose" class="img-responsive center-block social"></a>
        </article>
      </a>

    </section>
    </div>
    <hr>

    <section id="blog" class="row anthracite">
        <div class="col-xs-12 col-md-8 noPadding">
          <img src="<?= $this->assetUrl('img/vege_crop.jpg')?>" class="img-responsive" alt='cake miel noisttes sans gluten'>
        </div>
        <div class="col-xs-12 col-md-4 color-white paddingLR20">
          <h4 class="text-left">Végé-miam miam</h4>
          <p>Testez toutes nos recettes végétariennes et bien d'autres choses !</p>
          <a class="btn btn-info btn-lg marginTB20" href="http://jecuisinesansgluten.com/" role="button">J'y vais !</a>
        </div>
    </section>
    <hr>

    <section id="blog" class="row anthracite">
        <div class="col-xs-12 col-md-8 col-md-push-4 noPadding">
          <img src="<?= $this->assetUrl('img/cake_crop.jpg')?>" class="img-responsive" alt='cake miel noisttes sans gluten'>
        </div>
        <div class="col-xs-12  col-md-4 col-md-pull-8 color-white paddingLR20">
          <h4 class="text-left">Sans Gluten... c'est bon quand même</h4>
          <p>Retrouvez toutes nos recettes sur le blog !</p>
          <a class="btn btn-info btn-lg marginTB20" href="http://vegemiam.fr/" role="button">J'y vais !</a>
        </div>
    </section>
    <hr>

    <section id="blog" class="row anthracite">
        <div class="col-xs-12 col-md-8 noPadding">
          <img src="<?= $this->assetUrl('img/vegan_crop.jpg')?>" class="img-responsive" alt='cake miel noisttes sans gluten'>
        </div>
        <div class="col-xs-12 col-md-4 color-white paddingLR20">
          <h4 class="text-left"> The Vegan society</h4>
          <p>Découvrez toutes nos recettes et le monde végan !</p>
          <a class="btn btn-info btn-lg marginTB20" href="http://www.vegan-france.fr/recettes-vegan.php/" role="button">J'y vais !</a>
        </div>
    </section>
    <hr>

     <section id="blog" class="row anthracite">
        <div class="col-xs-12 col-md-8 col-md-push-4 noPadding">
          <img src="<?= $this->assetUrl('img/lactose_crop.jpg')?>" class="img-responsive" alt='cake miel noisttes sans gluten'>
        </div>
        <div class="col-xs-12  col-md-4 col-md-pull-8 color-white paddingLR20">
          <h4 class="text-left">Sans lactose... mais pas sans plaisir</h4>
          <p>Retrouvez de surprenantes recettes sans lactose !</p>
          <a class="btn btn-info btn-lg marginTB20" href="http://www.750g.com/recettes_sans_lactose.htm" role="button">J'y vais !</a>
        </div>
    </section>

    <hr>
  </section><i class="fi-torsos-male-female"></i>



<?php $this->stop('main_content') ?>
