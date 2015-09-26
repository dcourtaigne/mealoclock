<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
  <section id="entete" class="container-fluid">
    <div class="row">
      <img src="<?= $this->assetUrl('img/food1.jpg')?>" class="center-block img-responsive" alt="salade">
    </div>

          <!-- rangée pitch communauté -->
    <section id="community" class="row">
      <article class="col-xs-12 text-center paddingTB40">
        <h2> Nos communautés </h2>
        <p class="text-center">Meal'o clock regroupe 4 régimes alimentaires principaux. Choisissez celui qui vous correspond ou bien celui que vous souhaitez découvrir, consultez les évènements à venir, le profil de nos membres, etc !</p>
      </article>
    </section>

    <section class="row text-center">

      <a href="#">
        <article class="col-xs-6 col-sm-3 col-md-3 vege color-white paddingTB20">
          <img src="<?= $this->assetUrl('img/vege.png')?>" alt="logo communauté végétariens" class="img-responsive center-block social">
            <div class="caption hidden-xs">
              <h3>5 fruits</h3>
              <p>Sed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natus</p>
            </div>
        </article>
      </a>


      <a href="#">
        <article class="col-xs-6 col-sm-3 col-md-3 vegan color-white paddingTB20">
          <img src="<?= $this->assetUrl('img/vegan.png')?>" alt="logo communauté végans" class="img-responsive center-block social">
          <div class="caption hidden-xs">
            <h3>Animals</h3>
            <p>Sed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natus</p>
          </div>
        </article>
      </a>

      <a href="#">
        <article class="col-xs-6 col-sm-3 col-md-3 ssgluten color-white paddingTB20">
          <img src="<?= $this->assetUrl('img/ssgluten.png')?>" alt="logo communauté sans gluten" class="img-responsive center-block social">
          <div class="caption hidden-xs">
            <h3>gluten</h3>
            <p>Sed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natus</p>
          </div>
        </article>
      </a>


      <a href="#">
        <article class="col-xs-6 col-sm-3 col-md-3 sslactose color-white paddingTB20">
          <img src="<?= $this->assetUrl('img/sslactose.png')?>" alt="logo communauté sans lactose" class="img-responsive center-block social">
          <div class="caption hidden-xs">
            <h3>vaches</h3>
            <p>Sed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natus</p>
          </div>
        </article>
      </a>

    </section>

    <section id="blog" class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 noPadding">
          <img src="<?= $this->assetUrl('img/cake_blog.jpg')?>" class="img-responsive" alt='cake miel noisttes sans gluten'>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 color-white">
          <h4 class="text-left">Sans Gluten... c'est bon quand même</h4>
          <p>Retrouvez toutes nos recettes sur le blog !</p>
          <a class="btn btn-info btn-lg marginTB20" href="http://jecuisinesansgluten.com/" role="button">J'y vais !</a>
        </div>

      </section>
  </section>


<?php $this->stop('main_content') ?>
