var counter = 0;
var pages = $('section.showcase');
var pagelen = pages.length - 1;

$(window).bind('mousewheel', function(e){
	if(e.originalEvent.wheelDelta < 0) {
		//scroll down
		if(counter == pagelen){
			return false;
		}else{
			pages.eq(counter).removeClass('active');
			pages.eq(counter).addClass('inactive');
			pages.eq(counter + 1).removeClass('inactive');
			pages.eq(counter + 1).addClass('active');
			clearTimeout($.data(this, 'scrollTimer'));
			$.data(this, 'scrollTimer', setTimeout(function() {
				counter ++;
			}, 500))
		}

	}else{
		if(counter == 0){
			return false;
		}else{
			pages.eq(counter - 1).removeClass('inactive');
			pages.eq(counter - 1).addClass('active');
			 pages.eq(counter).removeClass('active');
			
			clearTimeout($.data(this, 'scrollTimer'));
			$.data(this, 'scrollTimer', setTimeout(function() {
				counter --;
			}, 500))
		}
	}

	return false;
})


 //Firefox
 $(window).bind('DOMMouseScroll', function(e){
     if(e.originalEvent.detail > 0) {
         //scroll down
		pages.eq(counter).removeClass('active');
		pages.eq(counter).addClass('inactive');
		pages.eq(counter + 1).removeClass('inactive');
		pages.eq(counter + 1).addClass('active');
		clearTimeout($.data(this, 'scrollTimer'));
		$.data(this, 'scrollTimer', setTimeout(function() {
			counter +=1;
		}, 500))
     }else {
         //scroll up
         console.log('Up');
     }

     //prevent page fom scrolling
     return false;
 });