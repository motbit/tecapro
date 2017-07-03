(function($){
	$(function(){
	 
	    (function( $ ){
         $.fn.slideToPos = function() {
			  
           var left = $(this).position().left + ($(this).width() / 2) - ($(".menu1 a.knob").width() / 2) - 2;
           $(".menu1 a.knob").css("left", left);
          
		  $(".before").css("width", left+10);
           return this;
         }; 
      })( jQuery );
	 	   var url = window.location;  
      $('ul.sub-menu a[href="' + url + '"]').parent().addClass('active');;
	   $('ul.sub-menu a').filter(function () {
          return this.href == url;		
     }).parent().addClass('active').parent().parent().addClass('active').slideToPos(); 	    
      e.preventDefault();
      $(this).slideToPos();
 
	 
	}); // end of document ready
})(jQuery); // end of jQuery name space

