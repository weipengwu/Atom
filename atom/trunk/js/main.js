
var lastAnimation = 0;
var quietPeriod = 300;

$.fn.moveDown = function(){
	var pages = $('section.showcase');
	var pagelen = pages.length - 1;
	var index = $('section.showcase.active').data('section');
	var current = pages.eq(index);
	var next = pages.eq(index + 1);
	if(index == pagelen){
		return false
	}else{
		current.removeClass('active');
		current.addClass('inactive');
		next.removeClass('inactive');
		next.addClass('active');
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
		next.addClass('active');
		current.removeClass('active');
	}
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
