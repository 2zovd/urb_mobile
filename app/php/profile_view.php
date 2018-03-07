<main class="profile">

	<div class="profile_top">
		<div class="profile-add added">
			<span>
				<svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ico-star"></use></svg>
			</span>
		</div>

		<div class="profile-top_counter">10</div>

		<div class="profile-top_nav">

			<a class="profile-top_nav-item" href="#">
				<i class="profile-top_nav-ico ico-letter"></i>
				<span class="profile-top_nav-title">Send letter</span>
			</a>

			<a class="profile-top_nav-item" href="#">
				<i class="profile-top_nav-ico ico-chat"></i>
				<span class="profile-top_nav-title">Invite to chat</span>
			</a>

			<button class="profile-top_nav-item btn-subnav-drop" type="button">
				<svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ico-profile-nav"></use></svg>
			</button>

			<ul class="message-header_nav-drop">
				<li>
					<a href="#">
						<span class="ico-profile-nav ico-gift"></span>
						<span class="nav-profile_title">Send Gift</span>
					</a>
				</li>

				<li>
					<a href="#">
						<span class="ico-profile-nav ico-sticker"></span>
						<span class="nav-profile_title">Send a Sticker</span>
					</a>
				</li>

				<li>
					<a href="#">
						<span class="ico-profile-nav ico-video"></span>
						<span class="nav-profile_title">Video chat</span>
					</a>
				</li>

			</ul>

		</div>

		<div class="profile-slider">

			<div class="profile-slide">
				<div class="profile-slide_holder">
					<img src="img/profile-photo.jpg" alt="Profile photo">
				</div>

			</div>

			<div class="profile-slide">
				<div class="profile-slide_holder">
					<img src="img/profile-photo.jpg" alt="Profile photo">
				</div>
			</div>

			<div class="profile-slide">
				<div class="profile-slide_holder">
					<img src="https://beebom-redkapmedia.netdna-ssl.com/wp-content/uploads/2016/01/Reverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg" alt="Profile photo">
				</div>
			</div>

			<div class="profile-slide">
				<div class="profile-slide_holder">
					<img src="https://demo.phpgang.com/crop-images/demo_files/pool.jpg" alt="Profile photo">
				</div>
			</div>



		</div>
	</div>

	<div class="profile-view_content">
		<div class="profile-view_info">
			<strong class="profile-view_info-name">Alexandra, 24</strong>
			<p class="profile-view_info-matchmaking">Matchmaking tour participant</p>
			<div class="profile-view_info-indicator">
				<span class="profile-view_info-id">ID 31</span>
				<div class="profile-view_info-status online">
					<i><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ico-heart-status"></use></svg></i>
					<span>Online</span>
				</div>
			</div>
			<span class="profile-view_location">Ukraine, Kharkiv</span>
		</div>

		<div class="profile-view_tabs">

			<ul class="profile-view_tabs-nav">
				<li class="btn-about-me active">
					<button type="button">About me</button>
				</li>
				<li class="btn-about-partner">
					<button type="button">About partner</button>
				</li>
			</ul>

			<div class="profile-view_tabs-content about-me active">
				<div class="tabs-content_row">
					<strong>Height</strong>
					<p>172 cm (5' 8'')</p>
				</div>
				<div class="tabs-content_row">
					<strong>Weight</strong>
					<p>58 kg (127.9 lbs)</p>
				</div>
				<div class="tabs-content_row">
					<strong>Eyes color</strong>
					<p>Gray</p>
				</div>
				<div class="tabs-content_row">
					<strong>Hair color</strong>
					<p>Chestnut</p>
				</div>
				<div class="tabs-content_row">
					<strong>Children</strong>
					<p>None</p>
				</div>
				<div class="tabs-content_row">
					<strong>Smoking</strong>
					<p>No</p>
				</div>
				<div class="tabs-content_row">
					<strong>Drinking</strong>
					<p>No</p>
				</div>
			</div>

			<div class="profile-view_tabs-content about-partner">
				<div class="tabs-content_row">
					<strong>Height</strong>
					<p>155 cm (5' 8'')</p>
				</div>
				<div class="tabs-content_row">
					<strong>Weight</strong>
					<p>45 kg (127.9 lbs)</p>
				</div>
				<div class="tabs-content_row">
					<strong>Eyes color</strong>
					<p>Blue</p>
				</div>
				<div class="tabs-content_row">
					<strong>Hair color</strong>
					<p>Red</p>
				</div>
				<div class="tabs-content_row">
					<strong>Children</strong>
					<p>4</p>
				</div>
				<div class="tabs-content_row">
					<strong>Smoking</strong>
					<p>Yes</p>
				</div>
				<div class="tabs-content_row">
					<strong>Drinking</strong>
					<p>Yes</p>
				</div>
			</div>
		</div>

		<div class="profile-view_description">
			<div class="profile-view_description-row">
				<strong>About me:</strong>
				<p>I am serious, confident, calm, purposeful, persistent, smart. I am outgoing and independent, intense and focused by nature. But fitness is my passion, and I love to be outdoors and do fitness and jogging with music.</p>
			</div>
			<div class="profile-view_description-row">
				<strong>My hobbies:</strong>
				<p>Fashion, art, travelling, different cultures, movies, theatre, music, dancing, and keeping fit.</p>
			</div>
			<div class="profile-view_description-row">
				<strong>My profession:</strong>
				<button class="btn-ask-info" type="button">Ask information</button>
			</div>
		</div>

	</div>

</main>

<script>

	$(".profile-slider").slick({
		arrows: false,
		infinite: false,
		focusOnSelect: true,
		slidesToShow: 1,
	});

	$('.message-header_nav-btn, .btn-subnav-drop').click(function() {
		$(this).toggleClass('active');
		$('.message-header_nav-drop').toggleClass('active');
	})

	$('.btn-about-me').on('click', function() {
		$('.btn-about-partner, .about-partner').removeClass('active');
		$(this).addClass('active');
		$('.about-me').addClass('active');
	})

	$('.btn-about-partner').on('click', function() {
		$('.btn-about-me, .about-me').removeClass('active');
		$(this).addClass('active');
		$('.about-partner').addClass('active');
	})

</script>