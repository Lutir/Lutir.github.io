;(function () {
	
	'use strict';



	// iPad and iPod detection	
	var isiPad = function(){
		return (navigator.platform.indexOf("iPad") != -1);
	};

	var isiPhone = function(){
	    return (
			(navigator.platform.indexOf("iPhone") != -1) || 
			(navigator.platform.indexOf("iPod") != -1)
	    );
	};

	// Go to next section
	var gotToNextSection = function(){
		var el = $('.learn-more'),
			w = el.width(),
			divide = -w/2;
		el.css('margin-left', divide);
	};

	// Loading page
	var loaderPage = function() {
		$(".loader").fadeOut("slow");
	};

	// FullHeight
	var fullHeight = function() {
		if ( !isiPad() && !isiPhone() ) {
			$('.js-fullheight').css('height', $(window).height() - 49);
			$(window).resize(function(){
				$('.js-fullheight').css('height', $(window).height() - 49);
			})
		}
	};

	var toggleBtnColor = function() {

	
		if ( $('#hero').length > 0 ) {	
			$('#hero').waypoint( function( direction ) {
				if( direction === 'down' ) {
					$('.nav-toggle').addClass('dark');
				}
			} , { offset: - $('#hero').height() } );

			$('#hero').waypoint( function( direction ) {
				if( direction === 'up' ) {
					$('.nav-toggle').removeClass('dark');
				}
			} , { 
				offset:  function() { return -$(this.element).height() + 0; }
			} );
		}



	};


	// Scroll Next
	var ScrollNext = function() {
		$('body').on('click', '.scroll-btn', function(e){
			e.preventDefault();

			$('html, body').animate({
				scrollTop: $( $(this).closest('[data-next="yes"]').next()).offset().top
			}, 1000, 'easeInOutExpo');
			return false;
		});
	};

	// Click outside of offcanvass
	var mobileMenuOutsideClick = function() {

		$(document).click(function (e) {
	    var container = $("#offcanvas, .js-nav-toggle");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {

	    	if ( $('body').hasClass('offcanvas-visible') ) {

    			$('body').removeClass('offcanvas-visible');
    			$('.js-nav-toggle').removeClass('active');
				
	    	}
	    
	    	
	    }
		});

	};


	// Offcanvas
	var offcanvasMenu = function() {
		$('body').prepend('<div id="offcanvas" />');
		$('#offcanvas').prepend('<ul id="side-links">');
		$('body').prepend('<a href="#" class="js-nav-toggle nav-toggle"><i></i></a>');

		$('.left-menu li, .right-menu li').each(function(){

			var $this = $(this);

			$('#offcanvas ul').append($this.clone());

		});
	};

	// Burger Menu
	var burgerMenu = function() {

		$('body').on('click', '.js-nav-toggle', function(event){
			var $this = $(this);

			$('body').toggleClass('overflow offcanvas-visible');
			$this.toggleClass('active');
			event.preventDefault();

		});

		$(window).resize(function() {
			if ( $('body').hasClass('offcanvas-visible') ) {
		   	$('body').removeClass('offcanvas-visible');
		   	$('.js-nav-toggle').removeClass('active');
		   }
		});

		$(window).scroll(function(){
			if ( $('body').hasClass('offcanvas-visible') ) {
		   	$('body').removeClass('offcanvas-visible');
		   	$('.js-nav-toggle').removeClass('active');
		   }
		});

	};


	var testimonialFlexslider = function() {
		var $flexslider = $('.flexslider');
		$flexslider.flexslider({
		  animation: "fade",
		  manualControls: ".flex-control-nav li",
		  directionNav: false,
		  smoothHeight: true,
		  useCSS: false /* Chrome fix*/
		});
	}


	var goToTop = function() {

		$('.js-gotop').on('click', function(event){
			
			event.preventDefault();

			$('html, body').animate({
				scrollTop: $('html').offset().top
			}, 500);
			
			return false;
		});
	
	};



	// Animations

	var contentWayPoint = function() {
		var i = 0;
		$('.animate-box').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .animate-box.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							el.addClass('fadeInUp animated');
							el.removeClass('item-animate');
						},  k * 200, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '95%' } );
	};
	
	var createModal = function (title,head1,head2,head3, flag){	
		$('.modal-title').html(title);
		$('.modal-body .mh1').html(head1);
		$('.modal-body .mh2').html(head2);
		$('.modal-body .mh3').html(head3);
		if(flag){
			$('.mfeatures').hide();
		}
		else{
			$('.mfeatures').show();
		}
		$('#modal-main').modal('show');
	}
	var hideShow = function(){
		$('.level-2').hide();
		$('.mback').hide();
		$('.mfeatures').click(() => {
			$('.level-1').hide('slow');
			$('.level-2').show('slow');
			$('.mfeatures').hide('slow');
			$('.mback').show('slow');
		});
		$('.mback').click(() => {
			$('.level-2').hide('slow');
			$('.level-1').show('slow');
			$('.mback').hide('slow');
			$('.mfeatures').show('slow');
		})
		// $('#modal-main').modal('show');
		$('.project-item').click(() => {
			// createModal('loda','lofs');
		});
		$('.p1').click(() =>{
			createModal('Khatabahi 9.01','Desktop Application', 'Rs. 250 per month', 'KhataBahi Accounting Software is the best value for money accounting software for small business. It comes complete with Accounting modules, Sales & Purchasing modules, and also the Inventory modules. KhataBahi Accounting software is powerful, yet easy-to-use business software, and is applicable for any kind of business. This business accounting software will help you process sales and purchases, track receivables, payables and GST.', false);
		});
		$('.p2').click(() => {
			createModal('Khatabahi 9.02','Offline', 'Rs. 300 per month', 'KhataBahi Accounting Software is the best value for money accounting software for small business. It comes complete with Accounting modules, Sales & Purchasing modules, and also the Inventory modules. KhataBahi Accounting software is powerful, yet easy-to-use business software, and is applicable for any kind of business. This business accounting software will help you process sales and purchases, track receivables, payables and GST.', false);
		});
		$('.p3').click(() => {
			createModal('EHCM ERP(HR & PAYROLL)','Crowd Version', 'Free', 'This product basically manages HR Working and payroll system in any organization .This product can be uses for managing multiple company or multiple location all from a single window.', true);
		});
	}
	
	// Document on load.
	$(function(){		
		gotToNextSection();
		loaderPage();
		fullHeight();
		toggleBtnColor();
		ScrollNext();
		mobileMenuOutsideClick();
		offcanvasMenu();
		burgerMenu();
		testimonialFlexslider();
		goToTop();
		hideShow();
		// Animate
		contentWayPoint();
		
		// Modal styles				

	});


}());