$(window).scroll(function() {
      parallax();

})

if (matchMedia('only screen and (min-width: 680px)').matches) {
      function parallax() {

            var wScroll = $(window).scrollTop();

            $('.parallax--bg').css('background-position',
            'center '+(wScroll*0.8)+'px')

            $('.parallax--box').css('top', -5+(wScroll*0.008)+'em')

      }
}


$(".button-fill").hover(function () {
   $(this).children(".button-inside").addClass('full');
}, function() {
 $(this).children(".button-inside").removeClass('full');
});

// Fading script for header text
var target = $('#header-widget-area');
      var targetHeight = target.outerHeight();

      $(document).scroll(function(e){
      var scrollPercent = (targetHeight - window.scrollY / 2) / targetHeight;
      if(scrollPercent >= 0){
      target.css('opacity', scrollPercent);
      }
});
