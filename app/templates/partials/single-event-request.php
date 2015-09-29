<div class="conteneur_bis">
        <section class="utilisateur">
          <div class="alignright">
            <div class="image_prenom">
              <img src="http://img15.hostingpics.net/pics/740435visage.jpg">
                <h4><?= $this->e($request['user_name']) ?></h4>
            </div>
            <p class="commentaire wide">
              <?= $this->e($request['message']) ?>
            </p>
            <span class="liste">
              <ul>
                <li><a href="<?=$this->url('confirmEventRequest', ['id'=>$request['event_id'],'iduser'=>$request['id']])?>">Confirmer l'inscription</a></li>
                <li><a href="<?=$this->url('rejectEventRequest', ['id'=>$request['event_id'],'iduser'=>$request['id']])?>">Refuser l'inscription</a></li>
              </ul>
            </span>
          </div>

          <div class="display_bottom_comment">
            <strong>Afficher son message</strong>
          </div>
          <p class="commentaire">
            <?= $this->e($request['message']) ?>
            <br>
          <div class="display_bottom_profile">
          <strong>Apercu du profil</strong>
          </div>
          <article class="profile_preview">
            <p><strong>Introduction:</strong> <?= $this->e($request['user_desc']) ?></p>
            <span><strong>Repas participes: 8</strong></span>
            <br>
            <span><strong>Repas organises: 2</strong></span>
            <br>
            <a href="<?=$this->url('userProfile', ['id'=>$request['id']])?>" target="_blank">Consulter son profil</a>
          </article>
      </section>
    </div>
