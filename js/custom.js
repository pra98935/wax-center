$(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'fade-in',
    outClass: 'fade-out',
    inDuration: 1500,
    outDuration: 800,
    linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^=#])'
    loading: true,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }
  });

 
  
  
  /*** for windows height ***/
  function setHeight() {
		windowHeight = $(window).innerHeight();
		$('.bannerinnr_sec').css('height', windowHeight);
	  };
	  setHeight();
	  
	  $(window).resize(function() {
		setHeight();
	 });
   
    /* Loader js start */
    $(window).load(function() {
        $(".loader-item").delay(800).fadeOut();
        $("#loader, #loader2, #loader3").delay(1500).fadeOut("slow");
    });
    /* Loader js end */
  
});


 

