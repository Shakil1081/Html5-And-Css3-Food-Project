/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$( document ).ready(function(){
    /* THIS IS FOR  navigatio */
    $('.js--section-features').waypoint( function(direction){
        if(direction === "down"){
            $('nav').addClass('sticky');
        }else{
             $('nav').removeClass('sticky');
        }
    }, {
  offset: '60px'
});

/* scroll on button  */
$('.js-scrll-to-plan').click(function(){
    $('html, body').animate({scrollTop: $('.js-section-plans').offset().top},1000)
});
$('.js-scrll-to-start').click(function(){
    $('html, body').animate({scrollTop: $('.js--section-features').offset().top},1000)
});
    /* var waypoints = $('#handler-first').waypoint(function(direction) {
  notify(this.element.id + ' hit 25% from top of window') 
}, {
  offset: '25%'
}) */
    
    
 // Select all links with hashes
$('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    if (
      location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') 
      && 
      location.hostname === this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
  
  /* animeation */
  $('.ja-wp-1').waypoint( function(direction){
      $('.ja-wp-1').addClass('animated fadeIn');
  }, {
  offset: '50%'
});
  $('.ja-wp-2').waypoint( function(direction){
      $('.ja-wp-2').addClass('animated fadeInUp');
  }, {
  offset: '50%'
});
  $('.ja-wp-3').waypoint( function(direction){
      $('.ja-wp-3').addClass('animated fadeInUp');
  }, {
  offset: '50%'
});
  $('.ja-wp-4').waypoint( function(direction){
      $('.ja-wp-4').addClass('animated fadeIn');
  }, {
  offset: '50%'
});

/* mobail nevigation */ 
$('.jnavicon').click(function(){
    var nav = $('.jmainnav');
    var icon =$('.jnavicon i')
    nav.slideToggle(200);
    
    if(icon.hasClass('ion-navicon-round')){
        icon.addClass('ion-close-round');
        icon.removeClass('ion-navicon-round');    
    }else{
        icon.addClass('ion-navicon-round');
        icon.removeClass('ion-close-round' ); 
        
    }
});
/*  map */
var map=new GMaps({
  div: '#map',
  lat:23.755018,
  lng: 90.381025,
  zoom:15
});

map.addMarker({
  lat:23.755018,
  lng: 90.381025,
  title: 'Lima',
  infoWindow: {
  content: '<p>Testing shakil</p>'
}
});


});
