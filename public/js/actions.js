// Globals
var minTextSize = '16px';
var maxTextSize = '34px';
var timer = false;
var scrollSpeed = 100;
var minScrollSpeed = 140;
var maxScrollSpeed = 0;
var playing = false;

/**
 * 
 * Refreshes the beon and loads the page again.
 * Scrolls to the very page top and triggers a manual window reload.
 * 
 * @param void
 * @return void
 * 
 */
// Refresh page
function refresh() {
    $("#book").scrollTop(0);
    window.location.reload();
}

/**
 * 
 * Resizes text by a given multiplier.
 * Refreshes all waypoints ASAP to be tracked again.
 * 
 * @param int
 * @return void
 * 
 */
function resizeText(multiplier) {
    var textSize = $(".book").css('font-size');
    if( (textSize > minTextSize && multiplier < 0) || (textSize < maxTextSize && multiplier > 0) ){
        $(".book").css('font-size', parseFloat(textSize) + (multiplier * 2) + 'px');
        Waypoint.refreshAll();
    }
}

/**
 * 
 * Changes autoscroll speed by a given multiplier.
 * 
 * @param int
 * @return void
 * 
 */

function changeSpeed(multiplier) {
    var wasPlaying = playing;
    if( (scrollSpeed > maxScrollSpeed && multiplier < 0) || (scrollSpeed < minScrollSpeed && multiplier > 0) ){
        stopScroll();
        scrollSpeed += multiplier * 10;
        if(wasPlaying) startScroll();
    }
}

/**
 * 
 * Mute/Unmute button function.
 * Calls global object "Howler" and checks for private property "_muted" property to toggle.
 * 
 * @param void
 * @return void
 * 
 */
function mute() {
    if (Howler._muted) {
        Howler.mute(false);
    } else {
        Howler.mute(true);
    }
}

/**
 * 
 * Moves scroll automatically and recursively by adding 1 to.
 * 
 * @param void
 * @return void
 * 
 */
function scrollText() {
    var destination = $('.book').scrollTop() + 1;
    $(".book").scrollTop(destination);
}

/**
 * 
 * Starts the chain of functions to autoscroll.
 * 
 * @param void
 * @return void
 * 
 */
function startScroll() {
    if (timer === false) {
    	timer = setInterval(scrollText, scrollSpeed);
	    playing = true;
    }
}

/**
 * 
 * Stops the autoscroll from moving.
 * 
 * @param void
 * @return void
 * 
 */
function stopScroll() {
    clearInterval(timer);
    timer = false;
    playing = false;
}

/**
 * 
 * I have no f*cking idea of what this f*cking function does.
 * F*ck.
 * 
 * @param void
 * @return void
 * 
 */
function fixHoverFx() {
    var el = this;
    var par = el.parentNode;
    var next = el.nextSibling;
    par.removeChild(el);
    setTimeout(function() {par.insertBefore(el, next);}, 0)
}


/**
 * 
 * On document ready.
 * 
 */
$( document ).ready(function() {
    // Scroll
    var winHeight = $(window).height(), 
    docHeight = $(".text").height(),
    headerHeight = $("header").height(),
    bookHeight = winHeight - headerHeight,
    isFirefox = typeof InstallTrigger !== 'undefined';

    $(".book").css('height', bookHeight );
    $(".book").css('padding-top', bookHeight/2);
    $(".follower").css('top', headerHeight );
    $(".follower").css('height', bookHeight );
    // Support for Firefox padding rules
    if(isFirefox) {
        $(".text").css('padding-bottom', bookHeight/2);
    } else {
        $(".book").css('padding-bottom', bookHeight/2);
    }

    // Support for window resize
    $(window).on('resize', function() {
        winHeight = $(window).height(),
        docHeight = $(".text").height();

        bookHeight = winHeight - headerHeight;

        $(".book").css('height', bookHeight );
        $(".book").css('padding-top', bookHeight/2);
        $(".follower").css('height', bookHeight );
        // Support for Firefox padding rules
        if(isFirefox) {
            $(".text").css('padding-bottom', bookHeight/2);
        } else {
            $(".book").css('padding-bottom', bookHeight/2);
        }
    });

    //Mute icons
    $( "#switch-volume" ).click(function() {
        $( "#on-volume" ).toggle();
        $( "#off-volume" ).toggle();
    });

    // Start/Stop scroll and HTML Toggle
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

    //Settings panel
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

    // Prevent right click
    // $(document).on("contextmenu",function(e){
    //     if(e.target.nodeName != "INPUT" && e.target.nodeName != "TEXTAREA")
    //     e.preventDefault();
    // });
});
