$(document).ready(function(){
  $('#user-agent').html(navigator.userAgent);

  // jQuery UI samples
  $('#sort-lyrics, #puzzle').sortable().disableSelection();
  $('#jqui-tabs').tabs();
  $('#jqui-accordion').accordion();
  $('#jqui-datepicker').datepicker();

  $('.color_tabs > li').hover(
    function(){ $(this).addClass('hover') },
    function(){ $(this).removeClass('hover') }
  )

  // color picker
  var $swatch = $('#swatch');
  var $red = $('#red');
  var $green = $('#green');
  var $blue = $('#blue');
  var refreshSwatch = function()
  {
      var toHex = function(v)
      {
        var hex = v.toString(16);
        return hex.length === 1 ? "0" + hex : hex;
      };
      $('#swatch').css('background-color', '#' + toHex($red.slider('value')) + toHex($green.slider('value')) + toHex($blue.slider('value')));
  };
    
    var sliderOpts = {
      orientation: 'horizontal',
      range: 'min',
      max: 255,
      value: 127,
      slide: refreshSwatch,
      change: refreshSwatch
    };

    $red.slider(sliderOpts);
    $green.slider(sliderOpts);
    $blue.slider(sliderOpts);
    refreshSwatch();
  });

  // mq test mqtest.io
  function reduceRatio(numerator, denominator)
    {
    var gcd, temp, divisor;
    gcd = function (a, b)
    {
      if (b === 0)
      return a;
      return gcd(b, a % b);
    };
    if (numerator === denominator)
    return '1/1';
    if (numerator < denominator)
    {
      temp = numerator;
      numerator = denominator;
      denominator = temp;
    }
      divisor = gcd(numerator, denominator);
      return 'undefined' === typeof temp ?
      (numerator / divisor) + '/' + (denominator / divisor) :
      (denominator / divisor) + '/' + (numerator / divisor);
    }
    
  $(window).load(function()
    {
      var docW = document.documentElement.clientWidth;
      var docH = document.documentElement.clientHeight;
      var w = screen.width;
      var h = screen.height;
      var ratio = ('devicePixelRatio' in window) ? window.devicePixelRatio : 'unsupported';
      var sav = screen.availHeight;
      var mqInfo = '<table>' +
          '<tr><td>width</td><td>' + docW + 'px (' + docW / 16 + 'em)</b></td></tr>' +
          '<tr><td>height</td><td>' + docH + 'px (' + docH / 16 + 'em)</td></tr>' +
          '<tr><td>available screen height</td><td>' + sav + 'px (' + sav / 16 + 'em)</td></tr>' +
          '<tr><td>device-width</td><td>' + w + 'px (' + w / 16 + 'em)</td></tr>' +
          '<tr><td>device-height</td><td>' + h + 'px ('  + h / 16 + 'em)</td></tr>' +
          '<tr><td>device-pixel-ratio</td><td>' + ratio + '</td></tr>' +
          '<tr><td>aspect-ratio</td><td>' + reduceRatio(docW, docH) + '</td></tr>' +
          '<tr><td>device-aspect-ratio</td><td>' + reduceRatio(w, h) + '</td></tr>' +
        '</table>';

      var mqTest = $('#mqTest');
      mqTest.html(mqInfo);
    });


  // http://www.pixelbind.com/make-a-div-stick-when-you-scroll/

  $(document).ready(function() {
    var $window = $(window);
    var s = $("#sticker");

    var updateSticker = function(windowpos)
    {
      // s.html("<h2>You have scrolled</h2> </br>" + "<span class='pixelNumber'>"  + windowpos + "</span>" + "<span>px</span>" + "<span class='scroll-icon'></span>" );
      s.html("<h2>You have scrolled</h2> </br>" + "<span class='pixelNumber'>"  + windowpos + "</span>" + "<span>px</span>" + 
          ' <span class="scroll-icon"> ' +
          ' <svg version="1.1" ' +
          ' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" ' +
          '   x="0px" y="0px" width="34px" height="77px" viewBox="0 0 34 77" overflow="visible" enable-background="new 0 0 34 77" ' +
          '   xml:space="preserve"> ' +
          ' <path id="scroll-wheel" fill="#1D1D1B" d="M17,25.776c-1.05,0-1.901-0.852-1.901-1.901V12.782c0-1.05,0.852-1.901,1.901-1.901 ' +
          '  s1.9,0.852,1.9,1.901v11.093C18.9,24.925,18.05,25.776,17,25.776z"/> ' +
          ' <path id="arrow" d="M22.924,59.884h4.396L17,70.222L6.679,59.884h4.396v-7.742h11.849V59.884z M22.924,50.013v-3.773H11.075 ' +
          '  v3.773H22.924L22.924,50.013z M22.924,44.108v-2.832H11.075v2.832H22.924z M22.924,39.148v-1.887H11.075v1.887H22.924L22.924,39.148 z"/> ' +
          ' <path id="mouse" fill="#1D1D1B" d="M17,0C7.548,0,0,7.662,0,17.114v24.614c0,6.205,3,11.623,8,14.623v-3.069 ' +
          '  c-3-2.668-6-6.849-6-11.554V17.114C2,9.076,8.961,2.536,17,2.536c8.04,0,15,6.54,15,14.579V41.73c0,4.901-3,9.237-7,11.883v3.008 ' +
          '  c6-2.939,9-8.501,9-14.891V17.114C34,7.662,26.452,0,17,0z"/> ' +
          ' </svg> ' +
          ' </span> '

          );
    };

    updateSticker($window.scrollTop());
    var pos = s.position(); 
    var stickermax = $('#scrollStopsHere').offset().top - s.height();

    $window.scroll(function() {
      var windowpos = $window.scrollTop();
      updateSticker(windowpos);
      if (windowpos >= pos.top && windowpos < stickermax) {
        s.attr("style", ""); //kill absolute positioning
        s.addClass("stick"); //stick it
      }   else if (windowpos >= stickermax) {
        s.removeClass(); //un-stick
        s.css({position: "absolute", top: stickermax + "px"}); //set sticker right above the footer
        
      } else {
        s.removeClass(); //top of page
      }
    });
});