$(document).ready(function() {
	console.log('Ready!');
	
	$(".sidebar").sidebar({
		side: "left",
		speed: 500
	});

	$(".btn-header_nav").click(function() {
		$(".sidebar").trigger("sidebar:open");
	})


	$(".my-sidebar").on("sidebar:opened", function () {
	   // Do something on open
	});

	$(".my-sidebar").on("sidebar:closed", function () {
	   // Do something on close
	});
	
	
});

