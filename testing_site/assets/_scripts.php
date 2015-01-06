<!-- Scripts -->

<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>

<script src="js/jquery.gpop.js"></script>

<!-- lightbox -->
<script src="js/lightbox-2.6.min.js"></script>

<!-- menu -->
<script>
	$(document).ready(function()
	{
		$('#main-nav-check').change(function()
		{
			var c = this.checked ? '30%' : '0%';
			$('.navbar').css('width', c);
		});


		// jQuery UI samples

		$('#sort-lyrics, #puzzle').sortable().disableSelection();
		$('#jqui-tabs').tabs();
		$('#jqui-accordion').accordion();
		$('#jqui-datepicker').datepicker();

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

		$('.gPop-gallery').each(function()
		{
			$(this).gpop();
		});
	});

	$('.collapse').collapse()
</script>

<!-- /mqtest -->