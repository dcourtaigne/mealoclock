<script type="text/javascript">
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
</script>