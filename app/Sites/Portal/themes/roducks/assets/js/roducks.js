/**
 * Roducks Theme
 */
(function ($) {
  $roducks.theme = (function() {
    function anchor(){
      var width = $(window).width();
    
      if (width < 720) {
        $(".nav-top").toggle();
      }
    }

    function polygon(id, type, color) {
      var ns = 'http://www.w3.org/2000/svg',
          width = $(window).width(),
          height = (width < 1000) ? 100 : 200,
          polygon = document.createElementNS(ns, "polygon"),
          svg = document.createElementNS(ns, "svg"),
          points = (type == 'top') 
          ? `${width},0 0,${height} ${width},${height}`
          : `0,0 0,${height} ${width},0`;

          polygon.setAttributeNS(null, 'points', points);
          polygon.setAttributeNS(null, 'style', `fill:${color};`);

          svg.setAttributeNS(null, 'class', 'diagonal');
          svg.setAttributeNS(null, 'width', `${width}px`);
          svg.setAttributeNS(null, 'height', `${height}px`);
          svg.appendChild(polygon);

          if (document.getElementById(id)) {
            document.getElementById(id).innerHTML = '';
            document.getElementById(id).appendChild(svg);
          }

      $(".vector").height(height);
      $(".dialog").height(height);
    }

    function init() {
      var width = $(window).width();
    
      if (width < 1100) {
        $(".nav-top").hide();
      }
      else {
        $(".nav-top").show();
      }

      polygon('polygon', 'top', '#24b2b0');
      polygon('polygon2', 'bottom', '#24b2b0');
      polygon('polygon3', 'top', '#eee');
      polygon('polygon4', 'bottom', '#eee');
    }

    return {
      init: function() {
        init();
      },
      resize: function() {
        $(window).resize(function(){
          init();
        });
      },
      ready: function() {
        $(".menu-toggle").click(function(e){
          e.preventDefault();
          $(".nav-top").toggle();
        });
      },
      anchor: function() {
        anchor();
      }
    };
  })();
})(jQuery);
