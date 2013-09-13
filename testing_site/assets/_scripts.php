<!-- Scripts -->

<?php ?>

<!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->
<script src="js/jquery1.8.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.gpop.js"></script>

<!-- menu -->

<script>
$(document).ready(function(){
  
  
//   $('#main-nav-check').change(function(){
//     var c = this.checked ? '#f00' : '#09f';
//     $('body').css('color', c);
// });


  $('#main-nav-check').change(function(){
    var c = this.checked ? '30%' : '0%';
    $('.main-nav').css('width', c);
});


});

</script>

<!-- mq test mqtest.io-->

<script type="text/javascript">
function reduceRatio(numerator, denominator) {
  var gcd, temp, divisor;

  gcd = function (a, b) {
    if (b === 0) {
      return a;
    }
    return gcd(b, a % b);
  };

  if (numerator === denominator) {
    return '1/1';
  }

  if (+numerator < +denominator) {
    temp = numerator;
    numerator = denominator;
    denominator = temp;
  }

  divisor = gcd(+numerator, +denominator);

  return 'undefined' === typeof temp ? (numerator / divisor) + '/' + (denominator / divisor) : (denominator / divisor) + '/' + (numerator / divisor);
}
</script>


<script> 
$(window).load(function() {


  var docW = document.documentElement.clientWidth;
  var docH = document.documentElement.clientHeight;
  var w = screen.width;
  var h = screen.height;
  var ratio = ('devicePixelRatio' in window) ? window.devicePixelRatio : 'unsupported';
  var sav = screen.availHeight;

  var mqInfo = '<ul>' +
  	'<li>width <b>' + docW + 'px / ' + docW / 16 + 'em</b></li>' +
  	'<li>height <b>' + docH + 'px / ' + docH / 16 + 'em</b></li>' +
  	'<li class="">Screen available height <b>' + sav + ' px / ' + sav / 16 + ' em</b></li>' +
  	'<li>device-width <b>' + w + 'px / ' + w / 16 + 'em</b></li>' +
  	'<li>device-height <b>' + h + 'px / '  + h / 16 + 'em</b></li>' +
  	'<li>device-pixel-ratio <b>' + ratio + '</b></li>' +
  	'<li class="aspect-ratio">aspect-ratio <b>' + reduceRatio(docW, docH) + '</b></li>' +
  	'<li class="aspect-ratio">device-aspect-ratio <b>' + reduceRatio(w, h) + '</b></li>' +
  	'</ul>';
  	var mqTest = $('#mqTest');
  	mqTest.html(mqInfo);

    document.getElementById('timer').innerHTML = '<p>' + '<strong>' + 'Loaded on ' + '</strong>' + '<br>' + new Date() + '</p>';       

	$('.gPop-gallery').each(function(){
		$(this).gpop();
	});
});
</script>

<!-- /mqtest -->


