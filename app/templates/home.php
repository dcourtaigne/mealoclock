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
                        <img src="<?= $this->assetUrl('img/vege_fruit.jpg')?>" />
                        <div class="carousel-caption">
                            <h1 class="carousel-caption-header">Végétarien</h1>
                            <p class="carousel-caption-text hidden-xs">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?= $this->assetUrl('img/vegan_frie.jpg')?>" />
                        <div class="carousel-caption">
                            <h1 class="carousel-caption-header">Vegan</h1>
                            <p class="carousel-caption-text hidden-xs">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?= $this->assetUrl('img/gluten_cake.jpg')?>" />
                        <div class="carousel-caption">
                            <h1 class="carousel-caption-header">Sans gluten</h1>
                            <p class="carousel-caption-text hidden-xs">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
                            </p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?= $this->assetUrl('img/lactose_cake.jpg')?>" />
                        <div class="carousel-caption">
                            <h1 class="carousel-caption-header">Sans lactose</h1>
                            <p class="carousel-caption-text hidden-xs">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
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
        <p class="text-center">Meal'o clock regroupe 4 régimes alimentaires principaux. Choisissez celui qui vous correspond ou bien celui que vous souhaitez découvrir, consultez les évènements à venir, le profil de nos membres, etc !</p>
      </article>
    </section>

    <section class="row text-center">

      <a href="#">
        <article class="col-xs-6 col-sm-3 vege color-white paddingTB20">
          <img src="<?= $this->assetUrl('img/vege.png')?>" alt="logo communauté végétariens" class="img-responsive center-block social">
        </article>
      </a>


      <a href="#">
        <article class="col-xs-6 col-sm-3 vegan color-white paddingTB20">
          <img src="<?= $this->assetUrl('img/vegan.png')?>" alt="logo communauté végans" class="img-responsive center-block social">
        </article>
      </a>

      <a href="#">
        <article class="col-xs-6 col-sm-3 ssgluten color-white paddingTB20">
          <img src="<?= $this->assetUrl('img/ssgluten.png')?>" alt="logo communauté sans gluten" class="img-responsive center-block social">
        </article>
      </a>


      <a href="#">
        <article class="col-xs-6 col-sm-3 sslactose color-white paddingTB20">
          <img src="<?= $this->assetUrl('img/sslactose.png')?>" alt="logo communauté sans lactose" class="img-responsive center-block social">
        </article>
      </a>

    </section>
    </div>
    <hr>

    <section id="blog" class="row anthracite">
        <div class="col-xs-12 col-md-8 noPadding">
          <img src="<?= $this->assetUrl('img/cake_crop.jpg')?>" class="img-responsive" alt='cake miel noisttes sans gluten'>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 color-white">
          <h4 class="text-left">Sans Gluten... c'est bon quand même</h4>
          <p>Retrouvez toutes nos recettes sur le blog !</p>
          <a class="btn btn-info btn-lg marginTB20" href="http://jecuisinesansgluten.com/" role="button">J'y vais !</a>
        </div>

    </section>
    <hr>
  </section>
  


<?php $this->stop('main_content') ?>
