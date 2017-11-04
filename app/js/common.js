$(document).ready(function() {
	console.log('Ready!');
	
	// Sidebar
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
	
	$('.sidebar-dropdown').click(function() {
		$(this).toggleClass('active');
	});
	
	// Chat and message navigation
	$('.btn-message-nav').click(function() {
		$('.btn-message-nav').removeClass('active');
		$(this).addClass('active');
	});
	
	// test letters
	$('.message-list_row').click(function() {
		$('.letters-list').css('display', 'none');
		$('.letters-message').css('display', 'block');
		$('.btn-header_nav').css('display', 'none');
		$('.header-mob_title').html('<g><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ico-left-arrow"></use></svg></g><span>Letters</span>').addClass('wrap');
	});
	
	$('.header-mob_title').click(function() {
		$('.letters-list').css('display', 'block');
		$('.letters-message').css('display', 'none');
		$('.btn-header_nav').css('display', 'block');
		$('.header-mob_title').html('<span>Letters</span>').removeClass('wrap');
	});
    
	$('.btn-header_chat').click(function() {
		$('.letters-mob').css('display', 'none');
		$('.chat-mob').css('display', 'block');
        $('.header-mob_title').html('<div class="header-mob_title"><span>Chat</span></div>');
	});
	
	$('.message-header_nav-btn').click(function() {
		$(this).toggleClass('active');
		$('.message-header_nav-drop').toggleClass('active');
	})
	
});

