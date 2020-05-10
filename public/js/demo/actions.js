$( document ).ready(function() {
	// a try to hide the address bar
	window.scrollTo(0, 1);
	
	// Click derecho
	$(document).on("contextmenu",function(e){
		if(e.target.nodeName != "INPUT" && e.target.nodeName != "TEXTAREA")
		e.preventDefault();
	});

	// Animation splash
	$( ".splash_btn" ).click(function() {
		if(loaded === false) {
			$( "#splash1" ).toggleClass('nodisplay');
			$( ".splash_cont" ).slideToggle(200);
		} else {
			$("#splash1").toggleClass('nodisplay');
			$("#splash2").toggleClass('nodisplay');
/* START SCROLL RUNNING WITH THIS */			
            // window.setTimeout(function(){
            //     $("#switch-scroll").click();
            // }, 750);
		}
	});

	// Scroll
	var winHeight = $(window).height(), 
	docHeight = $(".text").height(),
	headerHeight = $("header").height(),
	bookHeight = winHeight - headerHeight,
	isFirefox = typeof InstallTrigger !== 'undefined';

	$(".book").css('height', bookHeight );
	$(".book").css('padding-top', bookHeight/2);
	$(".book").css('margin-top', headerHeight );
	$(".follower").css('top', headerHeight );
	$(".follower").css('height', bookHeight );
	// Support for Firefox padding rules
	if(isFirefox) {
		$(".text").css('padding-bottom', bookHeight/2);
	} else {
		$(".book").css('padding-bottom', bookHeight/2);
	}

	$(window).on('resize', function() {
		winHeight = $(window).height();
		docHeight = $(".text").height();
		headerHeight = $("header").height();

		bookHeight = winHeight - headerHeight;

		$(".book").css('height', bookHeight );
		$(".book").css('padding-top', bookHeight/2);
		$(".book").css('margin-top', headerHeight );
		$(".follower").css('height', bookHeight );
		// Support for Firefox padding rules
		if(isFirefox) {
			$(".text").css('padding-bottom', bookHeight/2);
		} else {
			$(".book").css('padding-bottom', bookHeight/2);
		}
	});

	//Mute iconos
	$( "#switch-volume" ).click(function() {
		$( "#on-volume" ).toggle();
		$( "#off-volume" ).toggle();
	});

	// Start/Stop scroll and HTML Toggle
	// startScroll(); //arranca andando
	$( "#switch-scroll" ).click(function() {
		timer ? stopScroll() : startScroll() ;
		$( "#play" ).toggle();
		$( "#pause" ).toggle();
	});


	// Scroll Speed Management
	$( "#velplus" ).click(function() {
		changeSpeed(-1);
	});
	$( "#velminus" ).click(function() {
		changeSpeed(1);
	});

	// Scroll Speed with Keys
	$(window).bind('keydown', function(e){
		if (e.keyCode==49)
			changeSpeed(-1);
		else if (e.keyCode==50)
			changeSpeed(1);
	});

	// Font Management
	$( "#fontplus" ).click(function() {
		resizeText(1);
	});
	$( "#fontminus" ).click(function() {
		resizeText(-1);
	});

	// Settings panel
	$( "#switch-settings" ).click(function() {
		$( ".settings" ).slideToggle();
		$( "#switch-settings" ).toggleClass('settings_open');
		$( "#switch-settings i" ).toggleClass('md-dark, md-light');
	});

	// Close settings on click outside of it
	$( "#book" ).click(function() {
		if ( $( ".settings" ).css('display') == 'block' )
			$( "#switch-settings" ).click();
	});
});

var minTextSize = '16px',
maxTextSize = '34px';

function resizeText(multiplier) {
	var textSize = $(".book").css('font-size');
	if( (textSize > minTextSize && multiplier < 0) || (textSize < maxTextSize && multiplier > 0) ){
		$(".book").css('font-size', parseFloat(textSize) + (multiplier * 2) + 'px');
		Waypoint.refreshAll();
	}
}

var minScrollSpeed = 140,
maxScrollSpeed = 0;
playing = false;

function changeSpeed(multiplier) {
	var wasPlaying = playing;
	if( (scrollSpeed > maxScrollSpeed && multiplier < 0) || (scrollSpeed < minScrollSpeed && multiplier > 0) ){
		stopScroll();
		scrollSpeed += multiplier * 10;
		if(wasPlaying) startScroll();
	}
}

var myIntervalScroller;
var timer = false;
var scrollSpeed = 70;

function scrollText() {
	var destination = $('.book').scrollTop() + 1;
	$(".book").scrollTop(destination);
}

function startScroll() {
	if (timer === false)
	timer = setInterval(scrollText, scrollSpeed);
	playing = true;
}

function stopScroll() {
	clearInterval(timer);
	timer = false;
	playing = false;
}


function fixHoverFx() {
	var el = this;
	var par = el.parentNode;
	var next = el.nextSibling;
	par.removeChild(el);
	setTimeout(function() {par.insertBefore(el, next);}, 0)
}

// Refresh page
function refresh() {
    loaded = false;

    document.getElementById("book").scrollTop = 0;
    window.location.reload();
}

// Mimic muting/unmuting the audio
function mute() {
    // If non muted
    if(muted === false) {
        muted = true;

        dummy = volume;
        volume = 0;
        for(var i=0; i<tracks.length; i++){
            tracks[i].volume(volume);
        }
    // If clicks again and its muted
    } else if (muted === true) {
        muted = false;

        volume = dummy;
        for(var i=0; i<tracks.length; i++){
            tracks[i].volume(volume);
        }
    }
}

window.onbeforeunload = function(e) {
	refresh();
};