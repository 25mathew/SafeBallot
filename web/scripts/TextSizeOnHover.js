/*$('#indexButton').hover(
    console.log("Hover engaged"),
    function(){ $("body").find(indexTextR).addClass('grow') },
    function () { $("body").find(indexTextR).removeClass('grow')}
)*/

$(document).ready(function () {
	//var open = false;
	$(document).delegate('.bigButton', 'hover', function (event) {
		$(this).removeClass('grow');
		$(this).addClass('grow');
		event.stopPropagation();
		/*
		if (open) {
			$(this).removeClass('oppenned');
			event.stopPropagation();
			open = false;
		} else {
			$(this).addClass('oppenned');
			event.stopPropagation();
			open = true;
		}*/
	})
	/*$(document).delegate('body', 'click', function (event) {
		$('.open').removeClass('oppenned');
	})
	$(document).delegate('.cls', 'click', function (event) {
		$('.open').removeClass('oppenned');
		event.stopPropagation();
	});*/
});