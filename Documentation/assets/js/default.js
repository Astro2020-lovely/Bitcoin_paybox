/*!
 * rdgDocumenter 1.0
 * http://www.documentation-generator.com
 *
 * Copyright 2014, Abbas Arif
 * http://www.bcstatic.com
 * Theme Version 1.0
 */
!function($) {
	$(function() {
		$('img').addClass('imgresponsive');
		
		var hash = location.hash || null,
		win = $(window),
		scrolloffset = $('div.navbar').height() + 40,
		firstoffset = $('#rdgContainerHeader').offset(),
		iDeviceNotOS4 = (navigator.userAgent.match(/iphone|ipod|ipad/i) && !navigator.userAgent.match(/OS 5/i)) || false,
		badIE = $('html').prop('class').match(/ie(6|7|8)/) || false;
		duration = parseInt(duration, 10);
		
		$('body').attr('data-offset', scrolloffset+10);
		
		$(window).one('scroll', function() {
			$('.navbar-collapse li').removeClass('active');
		});
		
		$('a[href^=http]').bind('click', function() {
			window.open($(this).attr('href'));
			return false;
		});
		
		if (!badIE) {
			window.scroll(0, 0);
			$('a[href^=#]').bind('click touchstart', function() {
				hash = $(this).attr('href');
				$.scrollTo.window().queue([]).stop();
				changeLocation(hash, true);
				return false;
			});
			if (hash) {
				setTimeout(function() {
					changeLocation(hash);
				}, 500);
			}
		}
		$('.brand').on('click', function() {
			changeLocation('#rdgContainer', false);
		});
		
		function hashchange() {
			changeLocation(location.hash, false);
		}
		
		function resetNav() {
			$('#rdgContainer').css('padding-top', scrolloffset + 'px');
		}
		resetNav();
		$( window ).resize(function() {
			resetNav();
		});
		
		function changeLocation(hash, changehash) {
			win.unbind('hashchange', hashchange);
			hash = hash.replace(/!\//, '');
			win.stop().scrollTo(hash, duration, {
				offset: -scrolloffset,
				easing: easing,
				axis: 'y'
			});
			if (changehash !== false) {
				var l = location;
				location.href = (l.protocol + '//' + l.host + l.pathname + '#!/' + hash.substr(1));
				location.hash = hash.substr(1);
			}
			win.bind('hashchange', hashchange);
		}
		
		window.prettyPrint && prettyPrint();
	})
} (window.jQuery);