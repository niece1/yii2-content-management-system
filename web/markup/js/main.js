$(document).ready(function () {

  //Preloader
  document.body.onload = function() {
  setTimeout(function() {
    var preloader = document.getElementById('gael_preloader');
    if(!preloader.classList.contains('load_end')) {
      preloader.classList.add('load_end');
    }
  }, 1000);
}

 //Slick slider
 $(".main_slider").slick({
 	infinite:true,
 	draggable: false,
 	fade: true,
 	dots: false,
 	
 	autoplay: true,
 	speed: 1200,
 	autoplaySpeed: 4000,
 	pauseOnDotsHover: true,
 	pauseOnHover: false,
 	cssEase: 'ease',
 // vertical: true,
 prevArrow: $('#left_arrow'),
 nextArrow: $('#right_arrow')
});

 $(".footer_slider").slick({
  infinite: true,
  draggable: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  
  autoplay: true,
  speed: 1200,
  autoplaySpeed: 4000,
  pauseOnDotsHover: true,
  pauseOnHover: false,
  cssEase: 'ease',

 prevArrow: $('#twitter_left'),
 nextArrow: $('#twitter_right')
});

// Sticky-kit plugin
$(".about_box").stick_in_parent();

// Load more button

$(".item_load_more").slice(0, 6).show();
$("#loadMore").on('click', function(e){
	e.preventDefault();
	$(".item_load_more:hidden").slice(0, 4).slideDown();
	if($(".item_load_more:hidden").length == 0) {
      $("#loadMore").text("No Content").addClass("noContent");
    }
})

// Accordeon

	var contents = $('.accordeon_content');
  var titles = $('.accordeon_title');
  titles.on('click',function(){
    var title = $(this);
    contents.filter(':visible').slideUp(function(){
    	$(this).prev('.accordeon_title').removeClass('is-opened');
    });  
    
    var content = title.next('.accordeon_content'); 
    
    if (!content.is(':visible')) {
      content.slideDown(function(){title.addClass('is-opened')});
    } 
  });

  var i=0,
      length = $("#imageGallery img").length;
  
  $("#imageGallery img").each(function(){
    
    i++;
    $(this).attr("id", "image" + i);
    
  });
  
  $("#imageGallery img").click(function(){
    
    $("#modal").fadeIn();
    
    i=$(this).index()+1;
    
    $("#myImg").attr("src", $("#image" + i).attr("src"));
    
    $("#imgCounter").html(i + " of " + length);
    
  });
  
  $("#rarr").click(function(){
    
    i++;
    $("#myImg").fadeOut(0, function(){
      
      $("#myImg").attr("src", $("#image" + i).attr("src")).fadeIn(0);
      $("#imgCounter").html(i + " of " + length);
      
    });
    
    if(i>length){
       i=1;
       $("#myImg").fadeOut(0, function(){
      
          $("#myImg").attr("src", $("#image" + i).attr("src")).fadeIn(0);
          $("#imgCounter").html(i + " of " + length);

        });
       }
    
  });
  
  $("#larr").click(function(){
    
    i--;
    $("#myImg").fadeOut(0, function(){
      
      $("#myImg").attr("src", $("#image" + i).attr("src")).fadeIn(0);
      $("#imgCounter").html(i + " of " + length);
      
    });
    
    if(i<1){
       i=length;
       $("#myImg").fadeOut(0, function(){
      
          $("#myImg").attr("src", $("#image" + i).attr("src")).fadeIn(0);
          $("#imgCounter").html(i + " of " + length);

        });
       }
    
  });
  
  $("#close").click(function(){
    
    $("#modal").fadeOut()
    
  })

	//Parallax
$(window).scroll(function() {
	var st = $(this).scrollTop();
	$('.parallax_text').css({
		'transform' : 'translate(0%, ' + st + '%'
	});
});
});

//Menu overlay animation
(function() {
	var triggerBttn = document.getElementById( 'trigger-overlay' ),
	overlay = document.querySelector( 'div.overlay' ),
	closeBttn = overlay.querySelector( 'button.overlay-close' );
	transEndEventNames = {
		'WebkitTransition': 'webkitTransitionEnd',
		'MozTransition': 'transitionend',
		'OTransition': 'oTransitionEnd',
		'msTransition': 'MSTransitionEnd',
		'transition': 'transitionend'
	},
	transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
	support = { transitions : Modernizr.csstransitions };

	function toggleOverlay() {
		if( classie.has( overlay, 'open' ) ) {
			classie.remove( overlay, 'open' );
			classie.add( overlay, 'close' );
			var onEndTransitionFn = function( ev ) {
				if( support.transitions ) {
					if( ev.propertyName !== 'visibility' ) return;
					this.removeEventListener( transEndEventName, onEndTransitionFn );
				}
				classie.remove( overlay, 'close' );
			};
			if( support.transitions ) {
				overlay.addEventListener( transEndEventName, onEndTransitionFn );
			}
			else {
				onEndTransitionFn();
			}
		}
		else if( !classie.has( overlay, 'close' ) ) {
			classie.add( overlay, 'open' );
		}
	}

	triggerBttn.addEventListener( 'click', toggleOverlay );
	closeBttn.addEventListener( 'click', toggleOverlay );
})();

//Input footer newsletter underline animation
const wrapper = document.querySelector(".input-wrapper"),
textInput = document.querySelector("input#newsletter");        
textInput.addEventListener("keyup", event => {
	wrapper.setAttribute("data-text", event.target.value);
});

//Input search sidebar underline animation
const wrap = document.querySelector(".input-search"),
textsearch = document.querySelector("input#search");        
textsearch.addEventListener("keyup", event => {
  wrap.setAttribute("data-text", event.target.value);
});