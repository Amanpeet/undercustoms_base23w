jQuery(document).ready(function( $ ) { //noconflicts
  console.log('plugins initilized.');

  jQuery('#owl-uno').owlCarousel({
    loop: true,
    navRewind: false,
    autoplay: true,
    autoplayTimeout: 6000,
    center: false,
    margin: 30,
    nav: true,
    dots: true,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    responsive: {
      0: { items: 1 },
      640: { items: 1 },
      768: { items: 1 },
      991: { items: 1 },
      1200: { items: 1 }
    }
  });

  jQuery('#owl-duo').owlCarousel({
    loop: true,
    navRewind: false,
    autoplay: true,
    autoplayTimeout: 6000,
    center: false,
    margin: 30,
    nav: true,
    dots: true,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    responsive: {
      0: { items: 1 },
      640: { items: 1 },
      768: { items: 1 },
      991: { items: 2 },
      1200: { items: 2 }
    }
  });

  jQuery('#owl-trio').owlCarousel({
    loop: true,
    navRewind: false,
    autoplay: true,
    autoplayTimeout: 6000,
    center: false,
    margin: 30,
    nav: true,
    dots: true,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    responsive: {
      0: { items: 1 },
      640: { items: 2 },
      768: { items: 2 },
      991: { items: 3 },
      1200: { items: 3 }
    }
  });

  jQuery('#owl-quad').owlCarousel({
    loop: true,
    navRewind: false,
    autoplay: true,
    autoplayTimeout: 6000,
    center: false,
    margin: 30,
    nav: true,
    dots: true,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    responsive: {
      0: { items: 1 },
      640: { items: 2 },
      768: { items: 2 },
      991: { items: 3 },
      1200: { items: 4 }
    }
  });

  jQuery('#owl-penta').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    center: false,
    margin: 20,
    nav: false,
    dots: false,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    responsive: {
      0: { items: 1 },
      640: { items: 2 },
      768: { items: 3 },
      991: { items: 4 },
      1200: { items: 5 }
    }
  });

  //Top Search bar Show Hide function by = custom.js//
  function site_search() {
    jQuery('#search_btn').on('click', function (event) {
      jQuery('#search').addClass('open');
      jQuery('#search > form > input[type="search"]').focus();
      console.log('searching...');
    });

    jQuery('#search, #search button.close').on('click keyup', function (event) {
      if (event.target === this || event.target.className === 'close') {
        jQuery(this).removeClass('open');
      }
    });
  }
  site_search();


  //________graph images moving function above	________//
  $.fn.bgscroll = $.fn.bgScroll = function (options) {
    if (!this.length) return this;
    if (!options) options = {};
    if (!window.scrollElements) window.scrollElements = {};
    for (var i = 0; i < this.length; i++) {
      var allowedChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      var randomId = '';
      for (var l = 0; l < 5; l++) randomId += allowedChars.charAt(Math.floor(Math.random() * allowedChars.length));
      this[i].current = 0;
      this[i].scrollSpeed = options.scrollSpeed ? options.scrollSpeed : 70;
      this[i].direction = options.direction ? options.direction : 'h';
      window.scrollElements[randomId] = this[i];
      eval('window[randomId]=function(){var axis=0;var e=window.scrollElements.' + randomId + ';e.current -= 1;if (e.direction == "h") axis = e.current + "px 0";else if (e.direction == "v") axis = "0 " + e.current + "px";else if (e.direction == "d") axis = e.current + "px " + e.current + "px";$( e ).css("background-position", axis);}');
      setInterval('window.' + randomId + '()', options.scrollSpeed ? options.scrollSpeed : 70);
    }
    return this;
  }
  function bg_moving(){
    jQuery( function() {
    jQuery('.bg-moving').bgscroll({scrollSpeed:20 , direction:'h' });
    });
  }
  bg_moving();


  //Smooth scrolling with links v2
  // $('a.inner-link, .menu-item a[href*=\\#]').on('click', function (event) {
  //   if(this.pathname === window.location.pathname){
  //     event.preventDefault();
  //     $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
  //     // $('#menuModal').modal('hide');
  //   } else {
  //     // $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
  //   }
  // });

  //smooth scroll
  $(document).on('click', 'a.inner-link', function (event) {
    event.preventDefault();
    $('html, body').animate({ scrollTop: $($.attr(this, 'href')).offset().top - 200 }, 500);
  });

  // Simple Parallax
  var parallax_img = document.getElementsByClassName('parallax-img');
  // new simpleParallax(parallax_img);
  new simpleParallax(parallax_img, {
    scale: 1.2
  });

  //destroy on phones
  if( getMobileOS() ){
    // parallax_img.destroy();
    console.log('destroyed');
  }

  //check if phones
  function getMobileOS() {
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;
    // console.log('user agent: '+userAgent);
    if (/windows phone/i.test(userAgent)) {
      return true;
    }
    if (/android/i.test(userAgent)) {
      return true;
    }
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
      return true;
    }
    return false;
  }


  //back to top
  backToTop();
  function backToTop(){
    $(".back-to-top").css("display","none");
    $(window).scroll(function(){
      if($(window).scrollTop() > 0 ){
        $(".back-to-top").fadeIn(300);
      } else {
        $(".back-to-top").fadeOut(300);
      }
    });
    $(".back-to-top").click(function(){
      $("html, body").animate({
        scrollTop: 0
      }, 500);
    });
  };


});