$(document).ready(function ($) {

   $('#hamburger-toggler').on('click', function(){
   $('.ideal-remit-mobile-nav').addClass('open');
	   $('body').css({
		'overflow' : 'hidden',
	   });
   });


   $('.close-mobile-navbar').on('click', function(){
   $('.ideal-remit-mobile-nav').removeClass('open');
	   $('body').css({ 
		   'overflow' : 'auto',
	   }); 
   });


   $('#search-history-toggle').on('click', function(){
   $('.search-payment-history').show();
   });


   $('#close-search-form').on('click', function(){
   $('.search-payment-history').hide();
   });


});
