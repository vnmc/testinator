$(document).ready(function()
{
	var $elt = $('.s-pipes');

	var $canvas = $elt.find('canvas');
	var ctx = $canvas[0].getContext('2d');

	function getRandomColor()
	{
		return 'hsl(120,' + (40 + Math.random() * 20) + '%,' + (60 + Math.random() * 20) + '%)';
	}

	function drawBackground()
	{
		if (!ctx)
			return;

		var width = $canvas.width();
		ctx.canvas.width = width;
		ctx.canvas.height = $canvas.height();

		var startX = width / 2 - 50;
		startX -= Math.ceil(startX / 100) * 100;

		for (var y = 0; y < 300; y += 100)
		{
			for (var x = startX; x <= width; x += 100)
			{
				ctx.fillStyle = getRandomColor();
				ctx.fillRect(x, y, 100, 100);
			}
		}
	}

	/**
	 *  +----+----+----+ 
	 *  | 00 | 10 | 20 <--- position
	 *  +----+----+----+
	 *  | 01 | 11 | 21 |
	 *  +----+----+--a-+
	 *  | 02 | 12 d 22 b <--- connectors
	 *  +----+----+-c--+
	 */

	function getNext(pos, outflow)
	{
		var x = parseInt(pos.charAt(0), 10);
		var y = parseInt(pos.charAt(1), 10);
		var inflow;

		switch (outflow)
		{
		case 'a':
			--y;
			inflow = 'c';
			break;
		case 'b':
			++x;
			inflow = 'd';
			break;
		case 'c':
			++y;
			inflow = 'a';
			break;
		case 'd':
			--x;
			inflow = 'b';
			break;
		}

		return {
			pos: String(x) + String(y),
			inflow: inflow
		};
	}

	$elt.find('.container').css('background-color', getRandomColor);

	$(window).resize(drawBackground);
	drawBackground();

	var $svgs = $elt.find('svg');
	document.addEventListener('scroll', function(event)
	{
		if (event.target === document)
			return;

		$svgs.removeClass('flowing');

		var visibleElements = [];
		$svgs.each(function()
		{
			var $container = $(this).closest('.container');
			if ($container.length === 0)
				return;

			var containerBounds = $container[0].getBoundingClientRect();
			var svgBounds = this.getBoundingClientRect();

			if (Math.abs(svgBounds.left - containerBounds.left) <= 5 && Math.abs(svgBounds.top - containerBounds.top) <= 5)
				visibleElements.push(this);
		});

		var $visibleElements = $(visibleElements);

		var pos = '10';
		var inflow = 'd';
		var $e;

		for ( ; ; )
		{
			$e = $visibleElements.filter('[data-pos=' + pos + '][data-connectors*=' + inflow + ']');
			if ($e.length === 0)
				break;

			$e.addClass('flowing');

			var connectors = $e.attr('data-connectors');
			var outflow = connectors.replace(inflow, '');

			var next = getNext(pos, outflow);
			pos = next.pos;
			inflow = next.inflow;
		}

		$elt.find('.flower').toggleClass('flowering', $('[data-pos=22]').is('.flowing'));
	}, true);

	// disable scrolling the document if the mouse is in this app
	if (!('ontouchstart' in window) && !navigator.maxTouchPoints)
	{
		$scrollables = $elt.find('.horz, .vert');

		$scrollables.on('mouseenter', function()
		{
			$('body').css('overflow', 'hidden');
		});

		$scrollables.on('mouseleave', function()
		{
			$('body').css('overflow', 'scroll');
		});
	}
});
