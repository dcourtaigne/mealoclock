
    $(".toggle-button").click(function() {
    $(".top, #mid, #registerform" ).slideToggle(300, function(){});
  });
    function overlay(){
    var overlaystate = $("#overlay").css("display");
      if (overlaystate = "none") {
        $("#overlay").css({"display":"initial"})
        }
    };
    $("li.navbar-right").click(function(){
      $("#overlay").animate({top:'125px'});
      overlay();
    });
    $("#close button").click(function(){
      $("#overlay").css({"display":"none"})
    })


   $('#registerform').submit(function ( e ) { // affectation d'un listener sur l'evenement "submit" du formulaire

    e.preventDefault(); // empeche la soumission du formulaire
    var fromData = $(this).serialize();
    //console.log(fromData); // récupère toutes les données du formulaire et les encode au format URL ( chaine de caracteres )
    $.post( // fonction jQuery pour la requete ajax en utilisant la methode HTTP POST
      $(this).attr('action'), // recupere l'url de soumission du formulaire
      fromData, // les données encodées du formulaire
      function (data) {
      if(data.status == 1){
          $("#overlay").css({"display":"none"});
      }else{
          $("#errorName").html(data.name);
          $("#errorEmail").html(data.email);
          $("#errorPass").html(data.password);
          $("#errorPassRepeat").html(data.passwordrepeat);
          $("#errorPassRepeat").html(data.passwords);
        }
      }
    );
  });

