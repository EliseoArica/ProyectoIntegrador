  $(document).on("scroll", function(){
	if
  ($(document).scrollTop() > 1){
	  $("#banner").addClass("shrink");
	}
	else
	{
		$("#banner").removeClass("shrink");
	}
});