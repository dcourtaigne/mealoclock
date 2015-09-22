<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
  <section id="entete">
      <img src="<?= $this->assetUrl('img/food1.jpg')?>" alt="salade">
    </section>

        <!-- section des communautés -->

    <section id="bckgrd">

            <!-- section de présentation générale des communautés -->

            <section class="largeurSite paddingTop">
                <h2> Nos communautés </h2>
                <p class="text-center">Meal'o clock regroupe 4 régimes alimentaires principaux. Choisissez celui qui vous correspond ou bien celui que vous souhaitez découvrir, consultez les évènements à venir, le profil de nos membres, etc !</p>
            </section>

            <!-- encart de chaque communauté -->

            <!-- végétarien -->

            <section id="communautes" class="row">
                <div class="col-xs-6 col-sm-3">
                    <div class="thumbnail">
                        <img src="<?= $this->assetUrl('img/vegetarien.png')?>" alt="logo végétariens">

                        <div class="caption">
                                    <h3>5 fruits & légumes</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natus</p>
                                    <a href="communaute_vege.html" class="btn btn-default" role="button">Découvrir la communauté</a>
                        </div>
                    </div>
                </div>

                <!-- végan -->

                <div class="col-xs-6 col-sm-3">
                     <div class="thumbnail">
                         <img src="<?= $this->assetUrl('img/vegan.png')?>" alt="logo végan">

                            <div class="caption">
                        <h3>Animals for life</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natus</p>
                                <a href="#" class="btn btn-default" role="button">Découvrir la communauté</a>
                            </div>
                    </div>
                </div>

                <!-- sans gluten -->

                <div class="col-xs-6 col-sm-3">
                     <div class="thumbnail">
                         <img src="<?= $this->assetUrl('img/ss_gluten.png')?>" alt="logo sans gluten">

                            <div class="caption">
                        <h3>Mort au gluten</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natus</p>
                                <a href="#" class="btn btn-default" role="button">Découvrir la communauté</a>
                            </div>
                    </div>
                </div>

                <!-- sans lactose -->

                <div class="col-xs-6 col-sm-3">
                     <div class="thumbnail">
                         <img src="<?= $this->assetUrl('img/ss_lactose.png')?>" alt="logo sans lactose">

                            <div class="caption">
                        <h3>Mort aux vaches</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus Sed ut perspiciatis unde omnis iste natus</p>
                                <a href="#" class="btn btn-default" role="button">acceder à la communauté</a>
                            </div>
                    </div>
                </div>
            </section>
        </section>


<?php $this->stop('main_content') ?>
