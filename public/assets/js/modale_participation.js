$("#attend").offsetParent().click(function(){
		$(".overlay").toggle()
})

$(".fermer_modale_p").click(function(){
		$(".overlay").toggle()
})

 $('#participation').submit(function ( e ) { // affectation d'un listener sur l'evenement "submit" du formulaire d'inscription
 	console.log('ok');
    e.preventDefault(); // empeche la soumission du formulaire
    var fromData = $(this).serialize();// récupère toutes les données du formulaire et les encode au format URL ( chaine de caracteres )
    // récupère toutes les données du formulaire et les encode au format URL ( chaine de caracteres )
    console.log(fromData);
    $.post( // fonction jQuery pour la requete ajax en utilisant la methode HTTP POST
      $(this).attr('action'), // recupere l'url de soumission du formulaire
      fromData, // les données encodées du formulaire
      function (data) {//fonction callback un fois la requête PHP terminée
        console.log(data);//un ptit console.log pour checker les données renvoyées par PHP dans la fonction de callback
      if(data.status == 1){ // si PHP dit tout est ok (statut = 1) on ferme la modale
          $(".overlay").toggle();
          $('#feedback').html(data.result)
          $('#feedback').addClass("alert alert-success fade in")
      }else{// sinon on affiche les messages d'erreurs dans la modales
          $("#error").html(data.message);
        }
      }
    );
  });

$("#cancel").offsetParent().click(function(){
		$(".overlay2").toggle()
})

$(".fermer_modale_2").click(function(){
		$(".overlay2").toggle()
})

$('#annulation').submit(function ( e ) { // affectation d'un listener sur l'evenement "submit" du formulaire d'inscription
 	console.log('ok');
    e.preventDefault(); // empeche la soumission du formulaire
    var fromData = $(this).serialize();// récupère toutes les données du formulaire et les encode au format URL ( chaine de caracteres )
    // récupère toutes les données du formulaire et les encode au format URL ( chaine de caracteres )
    console.log(fromData);
    $.post( // fonction jQuery pour la requete ajax en utilisant la methode HTTP POST
      $(this).attr('action'), // recupere l'url de soumission du formulaire
      fromData, // les données encodées du formulaire
      function (data) {//fonction callback un fois la requête PHP terminée
        console.log('ko');//un ptit console.log pour checker les données renvoyées par PHP dans la fonction de callback
        console.log(data);//un ptit console.log pour checker les données renvoyées par PHP dans la fonction de callback
        //javascript:window.location.reload();
      if(data.status == 1){ // si PHP dit tout est ok (statut = 1) on ferme la modale
          $(".overlay2").toggle();
          $('#feedback').html(data.result)
          $('#feedback').addClass("alert alert-success fade in")
      }
  }
    );
  });