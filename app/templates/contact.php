<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>

      <div id="contact" class="largeurSite container-fluid">
          <section class="row">
              <div class="col-md-6 col-md-offset-3">
                     <form role="form" method="POST" action"<?= $this->url('contact') ?>">

                                 <h4 class="text-center paddingTB10 ">
                                  <strong>Ecrivez-nous ! Nous nous ferons un plaisir de répondre.</strong>
                                 </h4>
                                 <p class="text-center"><em>(Tous les champs sont obligatoires)</em></p>


                                 <div class="form-group">
                                      <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
                                 </div>

                                 <div class="form-group">
                                      <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                                 </div>

                                 <div class="form-group">
                                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Titre du message" required>
                                 </div>

                                 <div class="form-group">
                                 <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                                     <span class="help-block"><p id="characterLeft" class="help-block "></p></span>
                                 </div>

                                 <button type="button" id="submit" name="submit" class="btn btn-primary pull-right marginTB20">Envoyer</button>
                     </form>
              </div>
          </section>
      </div>

<?php $this->stop('main_content') ?>
