(function initialisation(){
		$("#enattente").hide();
		$("#organises").hide();
})();


function hideAll(){
	$('#inscriptions, #enattente, #organises').hide();
}
function clearColor(){
	$('#inc, #att, #org').css({"background-color":"white", "color":"black"});
}
function stepone(){
	hideAll();
	clearColor();
}

$('#inc').click(function(){
	stepone();
	$(this).css({"background-color": "#8C091E", "color":"white"})
	$("#inscriptions").show();
})
$('#att').click(function(){
	stepone();
	$(this).css({"background-color": "#8C091E", "color":"white"})
	$("#enattente").show();
})
$('#org').click(function(){
	stepone();
	$(this).css({"background-color": "#8C091E", "color":"white"})
	$("#organises").show();
})
/*Fin script gestion fenetre
Script gestion modale gerer utilisateur*/
$(".confirmer_event").click(function overlaystatus(){
    var overlaystate = $(".overlay").css("display")
      if (overlaystate == "none") {
        $(".overlay").css({"display":"block"})
        }
    })
$(".fermer_modale").click(function(){
	$(".overlay").toggle();
})
function start(){
	$(".display_bottom_comment").next().hide();
	$(".fa-arrow-up").hide();
	$(".profile_preview").hide();

}
start();
	$(".display_bottom_comment").click(function(){
		var select = $(this);
			$(this).nextUntil(".display_bottom_profile").next().toggle()
			var profile_preview_status = $(this).nextUntil(".profile_preview").next().next().css("display")
			if(profile_preview_status == "block"){
				$(this).nextUntil(".profile_preview").next().next().slideToggle("600", function(){})
			}
			$(this).next().slideToggle("300", function(){})
	})
	$(".display_bottom_profile").click(function(){
		var select = $(this);
			$(this).next().slideToggle("300", function(){})
	})
