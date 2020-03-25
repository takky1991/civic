var counterRun = false;

$.fn.jQuerySimpleCounter = function( options ) {
    var settings = $.extend({
        start:  0,
        end:    100,
        easing: 'swing',
        duration: 300,
        complete: ''
    }, options );

    var thisElement = $(this);

    $({count: settings.start}).animate({count: settings.end}, {
      duration: settings.duration,
      easing: settings.easing,
      step: function() {
         var mathCount = Math.ceil(this.count);
         thisElement.text(mathCount);
      },
      complete: settings.complete
   });
};


window.addEventListener("scroll", () => {
   if(document.getElementById('projectFactsWrap')) {
      var bounding = document.getElementById('projectFactsWrap').getBoundingClientRect();
      
      if (!counterRun && (bounding.top < window.innerHeight || bounding.top < document.documentElement.clientHeight)) {
         $('#number1').jQuerySimpleCounter({end: 110, duration: 3000});
         $('#number2').jQuerySimpleCounter({end: 100,duration: 3000});
         $('#number3').jQuerySimpleCounter({end: 50,duration: 3000});
         $('#number4').jQuerySimpleCounter({end: 500,duration: 3000});
         counterRun = true;
      }
   }
});
