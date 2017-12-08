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
	$('.letters-list .message-list_row').click(function() {
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
    
	
	$('.message-header_nav-btn').click(function() {
		$(this).toggleClass('active');
		$('.message-header_nav-drop').toggleClass('active');
	})
	
	// chat test
	$('.chat-dialog-list .message-list_row').click(function() {
		$('.chat-dialog-list').css('display', 'none');
		$('.chat-dialog').css('display', 'block');
		$('.btn-header_nav').css('display', 'none');
		$('.btn-header_chat').css('display', 'none');
		$('.header-mob_title').html('<g><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ico-left-arrow"></use></svg></g><span>Chat</span>').addClass('wrap');
		$('.btn-header-mob_chat').addClass('active').html('<button class="btn-chat cancel-chat">Stop chat</button>');
	});
	
	$('.btn-header_chat').click(function() {
		$('.letters-mob').css('display', 'none');
		$('.chat-mob').css('display', 'block');
        $('.header-mob_title').html('<div class="header-mob_title"><span>Chat</span></div>');
	});
	
	
	//btn chat
	$('.btn-chat').click(function() {
		$(this).toggleClass('cancel-chat');
	});
	
	//input empty
	$(".message-input").keyup(function(){
		  if ($(this).val()) {
			$('.btn-send').addClass('active');
		  } else {
			$('.btn-send').removeClass('active');
		  }
        });
	
	//Log out
	$('.btn-log-out').click(function() {
		$(this).css('display', 'none');
		$('.sidebar-user-wrap').css('display', 'none');
		$('.sidebar').addClass('logged-out');
	});
	
	// slick carousel
	$(".notifications-slider").slick({
		arrows: false,
		infinite: false,
		focusOnSelect: true,
		slidesToShow: 1,
		variableWidth: true
	});
	
});


$(window).on('load', function() {
	$('.page-preloader_wrapper').delay(1000).fadeOut('slow');
});

