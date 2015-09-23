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
        <article class="col-xs-6 col-sm-3 col-md-3 vertClair color-white paddingTB20">
          <img src="<?= $this->assetUrl('img/vegetarien.png')?>" alt="logo communauté végétariens" class="img-responsive center-block social">
            <div class="caption hidden-xs">
              <h3>5 fruits & légumes</h3>
              <p>Sed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natus</p>
            </div>
        </article>
      </a>


      <a href="#">
        <article class="col-xs-6 col-sm-3 col-md-3 vertFonce color-white paddingTB20">
          <img src="<?= $this->assetUrl('img/vegan.png')?>" alt="logo communauté végans" class="img-responsive center-block social">
          <div class="caption hidden-xs">
            <h3>Animals friends</h3>
            <p>Sed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natus</p>
          </div>
        </article>
      </a>

      <a href="#">
        <article class="col-xs-6 col-sm-3 col-md-3 orange color-white paddingTB20">
          <img src="<?= $this->assetUrl('img/ss_gluten.png')?>" alt="logo communauté sans gluten" class="img-responsive center-block social">
          <div class="caption hidden-xs">
            <h3>Mort au gluten</h3>
            <p>Sed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natus</p>
          </div>
        </article>
      </a>


      <a href="#">
        <article class="col-xs-6 col-sm-3 col-md-3 bleuLactose color-white paddingTB20">
          <img src="<?= $this->assetUrl('img/ss_lactose.png')?>" alt="logo communauté sans lactose" class="img-responsive center-block social">
          <div class="caption hidden-xs">
            <h3>Mort aux vaches</h3>
            <p>Sed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natus</p>
          </div>
        </article>
      </a>

    </section>

    <section id="blog" class="row">
        <div class="col-xs-12 col-md-8 noPadding">
          <img src="<?= $this->assetUrl('img/cake_blog.jpg')?>" class="img-responsive" alt='cake miel noisttes sans gluten'>
        </div>
        <div class="col-xs-12 col-md-4 color-white">
          <h2>Sans Gluten... c'est bon quand même</h2>
          <p>Retrouvez toutes nos recettes sur le blog !</p>
          <a class="btn btn-info btn-lg marginTB20" href="http://jecuisinesansgluten.com/" role="button">J'y vais !</a>
        </div>

      </section>
  </section>


<?php $this->stop('main_content') ?>
