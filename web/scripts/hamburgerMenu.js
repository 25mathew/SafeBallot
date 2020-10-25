$(document).ready(function () {
	var open = false;
	$(document).delegate('.sidebar', 'click', function (event) {
		if (open) {
			$(this).removeClass('oppenned');
			event.stopPropagation();
			open = false;
		} else {
			$(this).addClass('oppenned');
			event.stopPropagation();
			open = true;
        }
	})
	$(document).delegate('body', 'click', function (event) {
		$('.open').removeClass('oppenned');
	})
	$(document).delegate('.cls', 'click', function (event) {
		$('.open').removeClass('oppenned');
		event.stopPropagation();
	});
});