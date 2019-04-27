(function($) {
  "use strict";
  // Add "loaded" class when a section has been loaded
  $(window).scroll(function() {
    var scrollTop = $(window).scrollTop();
    $(".section").each(function() {
      var elementTop = $(this).offset().top - $('#header').outerHeight();
      if(scrollTop >= elementTop) {
        $(this).addClass('loaded');
      }
    });
  });

  //Adding classes to WordPress menu
  $('.menu-primary-menu-container').addClass('collapse navbar-collapse').attr('id', 'navbar-collapse-1');
  $('#menu-primary-menu').addClass('nav navbar-nav navbar-right');
  $('.custom-logo-link').addClass('navbar-brand scroll');
  $('.services--intro').children('p').addClass('col-md-7');

  // Smooth Hash Link Scroll
  $('.smooth-scroll').click(function() {
    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

  $('.nav a').on('click', function(){
    if($('.navbar-toggle').css('display') !=='none'){
      $(".navbar-toggle").click();
    }
  });

  // filter items when filter link is clicked
  $('#filters a').click(function(){
    var selector = $(this).attr('data-filter');
    $container.isotope({ filter: selector });
    return false;
  });

  $('#contactform').submit(function() {
    var action = $(this).attr('action');
    var values = $(this).serialize();

    $.post(action, values, function(data) {
      
      $('.results').hide().html(data).slideDown('slow');

      $('#contactform').find('.form-control').val('');
      //$('.main-action').slideDown('slow');
      //$('.main-action').slideDown('slow');
      //$('#submit').removeAttr('disabled');
      /*if (data.match('success') !== null) {
        $('#contactform').slideUp('slow');
      }*/
    });

    /*$(".main-action").slideUp(750, function() {
      $('.main-action').hide();
      $.post(action, values, function(data) {
        $('.main-action').html(data);
        $('.main-action').slideDown('slow');
        $('#submit').removeAttr('disabled');
        if (data.match('success') !== null) {
          $('#contactform').slideUp('slow');
        }
      });
    });*/
    return false;

  });
})(jQuery);