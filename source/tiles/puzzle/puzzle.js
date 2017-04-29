$(document).ready(function()
{
	var $puzzle = $('#puzzle');
    $puzzle.sortable({
        'ui-floating': true,

        start: function(e, ui)
        {
            $puzzle.sortable('refreshPositions');
        },

        stop: function()
        {
            var solved = true;
            var $tiles = $puzzle.find('li[data-idx]');
            var len = $tiles.length;

            for (var i = 0; i < len; i++)
            {
                if (parseInt($($tiles[i]).attr('data-idx'), 10) !== i)
                {
                    solved = false;
                    break;
                }
            }

            if (solved)
                $('.won').addClass('visible');
        }
    }).disableSelection();

    var tiles = [
        { pos: '0% 0%', idx: 0 },
        { pos: '-100% 0%', idx: 1 },
        { pos: '-200% 0%', idx: 2 },
        { pos: '-300% 0%', idx: 3 },
        { pos: '0% -100%', idx: 4 },
        { pos: '-100% -100%', idx: 5 },
        { pos: '-200% -100%', idx: 6 },
        { pos: '-300% -100%', idx: 7 },
        { pos: '0% -200%', idx: 8 },
        { pos: '-100% -200%', idx: 9 },
        { pos: '-200% -200%', idx: 10 },
        { pos: '-300% -200%', idx: 11 }
    ];

    function random(seed)
    {
        var x = Math.sin(seed) * 10000;
        return x - Math.floor(x);
    }

    function scramble()
    {
        var len = tiles.length;
        var seed = Math.floor(new Date().getTime() / 1000);

        while (len > 0)
        {
            var idx = (random(seed) * len) | 0;
            --len;

            var tmp = tiles[len];
            tiles[len] = tiles[idx];
            tiles[idx] = tmp;
        }

        $puzzle.empty();
        $('.won').removeClass('visible');
        len = tiles.length;

        for (var i = 0; i < len; i++)
        {
            var tile = tiles[i];
            $puzzle.append('<li style="background-position:' + tile.pos + '" data-idx="' + tile.idx + '"></li>');
        }
    }

    $('#btnScramble').click(scramble);
    scramble();
});
