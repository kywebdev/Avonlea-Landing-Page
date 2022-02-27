$(document).ready(function() {

    // calculate the height of the About and Contact slide-in panels
    function calculatePanelSectionHeight(width) {
        if (width <= 1185) {
            $('.about-section').css('height', '100vh');
			$('.contact-section').css('height', '100vh');
        } else {
            var mainHeight = $('main').innerHeight();
			$('.about-section').css('height', mainHeight);
			$('.contact-section').css('height', mainHeight);
        }
    }
    calculatePanelSectionHeight( $(window).width() );
    $(window).on('resize', function() {
        calculatePanelSectionHeight( $(this).width() );
    });

	// toggle the navigation
	$('.toggle-nav').on('click', function() {
		$(this).toggleClass('open');
		$('nav').toggleClass('open');
		$('nav a').removeClass('active');
		$('body').removeClass('about contact');
	});

	// add active class to nav items when clicked on
	$('nav a').on('click', function(e) {
		e.preventDefault();
		$('nav a').removeClass('active');
		$(this).addClass('active');
	});

	// add body classes when nav items are clicked
	$('nav a.about').on('click', function() {
		$('body').addClass('about').removeClass('contact');
	});
	$('nav a.contact').on('click', function() {
		$('body').addClass('contact').removeClass('about');
	});

	// open the About panel when the teal button is clicked
	$('.btn-teal').on('click', function() {
		$('.toggle-nav').addClass('open');
		$('nav').addClass('open');
		$('nav a.about').addClass('active');
		$('nav a.contact').removeClass('active');
		$('body').addClass('about').removeClass('contact');
	});

	// background image slider
	$('.bg-slider').slick({
		infinite: true,
		fade: true,
		cssEase: 'linear',
		arrows: false,
		autoplay: true,
		autoplaySpeed: 7000,
		speed: 1000
	});

});