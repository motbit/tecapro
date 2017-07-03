 $(document).ready(function () {
	   $('body').toggleClass('TouchMobile');
     var url = window.location;  
      $('ul.sub-menu a[href="' + url + '"]').parent().addClass('active');
       $('ul.sub-menu a').filter(function () {
          return this.href == url;		
     }).parent().addClass('active').parent().parent().addClass('active');
	
	 $('ul.ul-home a').filter(function () {
          return this.href == url;		
     }).parent().addClass('active');
	 
	  $('ul.ul-gt a').filter(function () {
          return this.href == url;		
     }).parent().addClass('active');
	 
	   $('ul.ul-thanhvien a').filter(function () {
          return this.href == url;		
     }).parent().addClass('active');
	 
	  $('ul li.category a[href="' + url + '"]').parent().addClass('active');
       $('ul li.category a').filter(function () {
          return this.href == url;		
     }).parent().addClass('active');
	 
 $(function(){

	    (function( $ ){
         $.fn.slideToPos = function() {
           var left = $(this).position().left + ($(this).width() / 2) - ($(".menu1 a.knob").width() / 2) - 2;
           $(".menu1 a.knob").css("left", left);
           
		  $(".before").css("width", left+10);
           return this;
         }; 
      })( jQuery );
	 	  
	 	$("li.category.active a").slideToPos();     
    $(".li.category a").click(function(e) {
      e.preventDefault();
      $(this).slideToPos();
      
    });
     
	}); // end of document ready
   
   $('ul.ul-max li a[href="' + url + '"]').parent().addClass('active');
       $('ul.ul-max li a').filter(function () {
          return this.href == url;		
     }).parent().addClass('active');
	 /**/
	
	  $(function () {
    var url = window.location.pathname,
        urlRegExp = new RegExp(url.replace(/\/$/, '') + "$");
    $('ul.ul-thanhvien li a').each(function () {
        if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
            $(this).addClass('active');
            $(this).parent().previoussibling().find('a').removeClass('active');
        }
    });    
});
	 /**/
	
	 $('#ul.li-img').click(function () {		  		  
		   	
		     	
			   $("#slider").toggleClass("slidedown content-video ");	
			   $("#ul").toggleClass("none");				 
		
	   });  
	   $('#ul1.li-img').click(function () {		  		  
		   	
		     $("#slider").toggleClass("slidedown content-video ");	
			  $("#ul1").toggleClass("none");
			  
		
	   });  
	   /**/
	  $('img.img-search.flag-show').click(function () {	
 	   $('img.img-search.flag-hidden').removeClass("active");
	    $('img.img-search.flag-show').removeClass("none");
		   	$('img.img-search.flag-hidden').addClass('active');
				$('img.img-search.flag-show').addClass('none');
 	
	
		
	   });    
  // tuyen dung
  $('.click').click (function() {
	  $(this).removeClass("active");
	  $(this).addClass("active");
	  
$('.p-left').slideToggle("slow");
$('.scroll-bottom').slideToggle("slow");
})
 $(".scroll-bottom button").click(function(){
        $(".p-left").slideUp();
		 $(".scroll-bottom").slideUp();
		   $('.click').removeClass("active");
    });
	//hover
	$(".click").hover(function () {
 
    $(this).addClass("open");
},
 function () {
         $(this).removeClass("open");
     }
);
//hover tai lieu
$(".tailieu").hover(function () {
 
    $(this).addClass("open");
},
 function () {
         $(this).removeClass("open");
     }
);
  });
  
  /*hover*/
$(document).ready(function(){
$("ul.ul-sp2 li").hover(function () {
 
    $(this).addClass("open");
},
 function () {
         $(this).removeClass("open");
     }
);
   
});
$(document).ready(function(){
$("ul.sub-menu li").hover(function () {
 
    $(this).parent().parent().addClass("open");
},
 function () {
         $(this).parent().parent().removeClass("open");
     }
);
   
});
(function($){
	$(function(){

	  // Slider functionality
	  
	    // slide knob to position function
		 var widthWinfirst = window.innerWidth;
     if (widthWinfirst > 1060){
	    (function( $ ){
         $.fn.slideToPos = function() {
           var left = $(this).position().left + ($(this).width() / 2) - ($(".menu1 a.knob").width() / 2) - 2;
           $(".menu1 a.knob").css("left", left);
           // var before = $(this).parent().parent().parent().children(".bar").first().children(".before").first();
           // before.css("width", left + 20).css("backgroundColor", $($(this).attr("href")).css("backgroundColor","#68301A"));
		  $(".before").css("width", left+10);
           return this;
         }; 
      })( jQuery );
	 	  
	 	$("li.category.active a").slideToPos();     
    $(".li.category a").click(function(e) {
      e.preventDefault();
      $(this).slideToPos();
      // $('html, body').animate({ scrollTop: $(this.hash).offset().top }, 400);
    });
    
    
    }
	}); // end of document ready
	
})(jQuery); // end of jQuery name space

 
	// ipad menu
$(document).ready(function () {
     var widthWinfirst = window.innerWidth;
	 var url = window.location;  
     if (widthWinfirst < 1060){
		 $("nav ul li.category a.parent").click(function(){
		 $(this).attr('href','javascript:void(0)');
		  });
		  $("ul li.init-arrow-down a.parent").click(function(){
     $(this).attr('href','javascript:void(0)');
     
    });
    }	
  });
  
  // menu mobile 
$(document).ready(function() {
		$menuLeft = $('.pushmenu-left');
		$nav_list = $('#nav_list');
		
		$nav_list.click(function() {	
			var classActive=$menuLeft.attr('class');
			var classact='active';
			if(classActive.indexOf('pushmenu-open')>0)
			{
				$('body').addClass('TouchMobile');
			}
			else
			{
				$('body').removeClass('TouchMobile');	
			}
			$(this).toggleClass(classact);
			$('.pushmenu-push').toggleClass('pushmenu-push-toright');
			$menuLeft.toggleClass('pushmenu-open');
		});
	});
	// end mobile
	// trang thai mobile
	$(document).ready(function () {
     var url = window.location;  
      $('.pushmenu ul li a[href="' + url + '"]').parent().addClass('active');
       $('.pushmenu ul li a').filter(function () {
          return this.href == url;		
     }).addClass('active').parent().addClass('active').parent().css('display','block').parent().addClass('active');
  });
  // end trang thai mobile