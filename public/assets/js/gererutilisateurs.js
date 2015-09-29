
function start(){
	$(".display_bottom").next().hide();
	$(".fa-arrow-up").hide();
}
start();
	$(".display_bottom").click(function(){
		var select = $(this);
			$(this).next().slideToggle("300", function(){
				var comment_state = select.next().css("display");
					select.find(".fa-arrow-up").toggle()
					select.find(".fa-arrow-down").toggle()	
			})
	})
function startup(){
	$(".display_bottom_comment").next().hide();
	$(".fa-arrow-up").hide();
	$(".profile_preview").hide();

}
startup();
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