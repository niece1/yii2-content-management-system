$(document).ready(function () {

// Counter 
	function visible(partial) {
		var $t = partial,
		$w = jQuery(window),
		viewTop = $w.scrollTop(),
		viewBottom = viewTop + $w.height(),
		_top = $t.offset().top,
		_bottom = _top + $t.height(),
		compareTop = partial === true ? _bottom : _top,
		compareBottom = partial === true ? _top : _bottom;

		return ((compareBottom <= viewBottom) && (compareTop >= viewTop) && $t.is(':visible'));
	}

	$(window).scroll(function(){

		if(visible($('.count_number')))
		{
			if($('.count_number').hasClass('counter-loaded')) return;
			$('.count_number').addClass('counter-loaded');
			
			$('.count_number').each(function () {
				var $this = $(this);
				jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
					duration: 4000,
					easing: 'swing',
					step: function () {
						$this.text(Math.ceil(this.Counter));
					}
				});
			});
		}
	})

	});