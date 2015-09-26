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


$('#inc').click(function(){
	hideAll();
	clearColor();
	$(this).css({"background-color": "darkgreen", "color":"white"})
	$("#inscriptions").show();
})
$('#att').click(function(){
	hideAll();
	clearColor();
	$(this).css({"background-color": "darkgreen", "color":"white"})
	$("#enattente").show();
})
$('#org').click(function(){
	hideAll();
	clearColor();
	$(this).css({"background-color": "darkgreen", "color":"white"})	
	$("#organises").show();
})