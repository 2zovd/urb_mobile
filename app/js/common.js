$(document).ready(function() {
	console.log('Ready!');
	
	$(".sidebar").sidebar({
		side: "left",
		speed: 500
	});

	$(".btn-header_nav").click(function() {
		$(".sidebar").trigger("sidebar:open");
		$(".sidebar").addClass("opened");
		$('.sidebar-opened').css('display', 'block');
	})
	
	$(".btn-close-sidebar, .sidebar-opened").click(function() {
		$(".sidebar").trigger("sidebar:close");
		$('.sidebar-opened').css('display', 'none');
	})

	$(".sidebar").on("sidebar:opened", function () {
		
	});

	$(".sidebar").on("sidebar:closed", function () {
	    $('.sidebar-opened').css('display', 'none');
		$(".sidebar").removeClass('opened')
	});
	
	
});

