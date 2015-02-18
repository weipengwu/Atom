$(window).load(function(){
		$('.landing').fadeIn('700',function(){
			$(this).addClass('active');
		});
		$('.register').fadeIn('700',function(){
			$(this).addClass('active');
		});
		$('.pagination').fadeIn('700');
		setTimeout(function(){
			$('.about').show();
			$('.persona').show();
			$('.insights').show();
			$('.sandbox').show();
			$('.devices').show();
		},500)
})


var lastAnimation = 0;
var quietPeriod = 1000;

$.fn.moveDown = function(){
	var pages = $('section.showcase');
	var pagelen = pages.length - 1;
	var index = $('section.showcase.active').data('section');
	var current = pages.eq(index);
	var next = pages.eq(index + 1);
	if(index == pagelen){
		return false
	}else{
		current.addClass('inactive');
		next.removeClass('inactive');
		setTimeout(function(){
			current.removeClass('active');
			next.addClass('active');
		},700)
		
		$(".pagination .dot" + "[data-section='" + index + "']").removeClass("active");
		$(".pagination .dot" + "[data-section='" + (index + 1) + "']").addClass("active");
	}
}

$.fn.moveUp = function(){
	var pages = $('section.showcase');
	var index = $('section.showcase.active').data('section');
	var current = pages.eq(index);
	var next = pages.eq(index - 1);
	if(index == 0){
		return false;
	}else{
		next.removeClass('inactive');
		setTimeout(function(){
			next.addClass('active');
			current.removeClass('active');
		},700)
		
		$(".pagination .dot" + "[data-section='" + index + "']").removeClass("active");
		$(".pagination .dot" + "[data-section='" + (index - 1) + "']").addClass("active");
	}
}

function moveToIndex(toIndex){
	var pages = $('section.showcase');
	var pagelen = pages.length - 1;
	var index = $('section.showcase.active').data('section');
	var current = pages.eq(index);
	var to = pages.eq(toIndex);
	if(toIndex > index){
		for (var i = toIndex - 1; i >= index; i--) {
			pages.eq(i).addClass('inactive');
		};
		to.removeClass('inactive');
		setTimeout(function(){
			current.removeClass('active');
			to.addClass('active');
		},700)
	}
	else if(toIndex < index){
		for (var i = toIndex; i <= index; i++) {
			pages.eq(i).removeClass('inactive');
		};
		setTimeout(function(){
			current.removeClass('active');
			to.addClass('active');
		},700)
	}
	
	
	$(".pagination .dot" + "[data-section='" + index + "']").removeClass("active");
	$(".pagination .dot" + "[data-section='" + toIndex + "']").addClass("active");
	
}

$(document).bind('mousewheel DOMMouseScroll MozMousePixelScroll', function(event) {
    event.preventDefault();
    var delta = event.originalEvent.wheelDelta || -event.originalEvent.detail;
    init_scroll(event, delta);
});

function init_scroll(event, delta) {
    deltaOfInterest = delta;
    var timeNow = new Date().getTime();
    // Cancel scroll if currently animating or within quiet period
    if(timeNow - lastAnimation < quietPeriod + 700) {
        event.preventDefault();
        return;
    }

    if (deltaOfInterest < 0) {
        $(this).moveDown()
    } else {
        $(this).moveUp()
    }
    lastAnimation = timeNow;

}

$(document).swipe({
	swipeDown:function(event, direction, distance, duration, fingerCount) {
      $(this).moveDown();  
    },
    swipeUp:function(event, direction, distance, duration, fingerCount) {
      $(this).moveUp();  
    },
    //Default is 75px, set to 0 for demo so any distance triggers swipe
    threshold:0
})

$('body').on('focus','.mobile .signinForm input[name="email"]',function(){
	$('.mobile section.showcase').css('overflow','scroll');
})

$(document).ready(function(){
	$('.pagination .dot').on('click', function(){
		var toIndex = $(this).data('section');
		moveToIndex(toIndex);
		alert('dot');
	})
	$('.menu-mobile').on('click',function(){
		$('.menu-open').show();
		alert('nav');
	})
	$('.menu-open .close').on('click', function(){
		$('.menu-open').hide();
	})
})
