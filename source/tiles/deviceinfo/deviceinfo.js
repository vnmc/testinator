$(document).ready(function()
{
	function gcd(a, b)
	{
		return b === 0 ? a : gcd(b, a % b);
	}

	function reduceRatio(numerator, denominator)
    {
	    if (numerator === denominator)
    		return '1/1';

    	var tmp = undefined;
		if (numerator < denominator)
		{
      		tmp = numerator;
      		numerator = denominator;
      		denominator = tmp;
    	}

		var divisor = gcd(numerator, denominator);
 		return tmp === undefined ?
      		(numerator / divisor) + '/' + (denominator / divisor) :
      		(denominator / divisor) + '/' + (numerator / divisor);
    }


    var $elt = $('.s-deviceinfo');
	var docW = document.documentElement.clientWidth;
	var docH = document.documentElement.clientHeight;
	var w = screen.width;
	var h = screen.height;
	var ratio = ('devicePixelRatio' in window) ? window.devicePixelRatio : 'unsupported';
	var sav = screen.availHeight;

	$elt.find('.app-wrapper').html(
		'<table>' +
			'<tr><td>width</td><td>' + docW + 'px</td><td>' + docW / 16 + 'em</td></tr>' +
			'<tr><td>height</td><td>' + docH + 'px</td><td>' + docH / 16 + 'em</td></tr>' +
			'<tr><td>available screen height</td><td>' + sav + 'px</td><td>' + sav / 16 + 'em</td></tr>' +
			'<tr><td>device-width</td><td>' + w + 'px</td><td>' + w / 16 + 'em</td></tr>' +
			'<tr><td>device-height</td><td>' + h + 'px</td><td>'  + h / 16 + 'em</td></tr>' +
			'<tr><td>device-pixel-ratio</td><td>' + ratio + '</td><td></td></tr>' +
			'<tr><td>aspect-ratio</td><td>' + reduceRatio(docW, docH) + '</td><td></td></tr>' +
			'<tr><td>device-aspect-ratio</td><td>' + reduceRatio(w, h) + '</td><td></td></tr>' +
		'</table>'
	);
});
