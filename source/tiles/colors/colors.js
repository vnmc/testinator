$(document).ready(function()
{
	//var colors = ["greenyellow","yellow","mintcream","white","white","snow","seashell","ivory","beige","cornsilk","lightyellow","honeydew","aquamarine","aqua","cyan","chartreuse","lemonchiffon","floralwhite","white","ghostwhite","lavenderblush","linen","oldlace","papayawhip","blanchedalmond","lightgoldenrodyellow","palegreen","springgreen","mediumaquamarine","turquoise","lawngreen","palegoldenrod","whitesmoke","azure","aliceblue","lavender","gainsboro","antiquewhite","bisque","wheat","moccasin","lightgreen","mediumspringgreen","limegreen","mediumseagreen","lime","khaki","mistyrose","lightcyan","paleturquoise","lightgray","lightgrey","peachpuff","navajowhite","tan","burlywood","yellowgreen","mediumturquoise","skyblue","lightskyblue","gold","orange","pink","lightblue","powderblue","silver","thistle","lightsalmon","sandybrown","darkorange","goldenrod","darkkhaki","darkturquoise","lightsteelblue","deepskyblue","salmon","lightcoral","lightpink","violet","plum","darkgrey","darkgray","darksalmon","coral","peru","darkgoldenrod","darkseagreen","lightseagreen","cornflowerblue","dodgerblue","deeppink","palevioletred","hotpink","magenta","orchid","gray","rosybrown","tomato","orangered","chocolate","olive","olivedrab","cadetblue","lightslategray","lightslategrey","mediumslateblue","mediumpurple","mediumorchid","fuchsia","slategrey","grey","indianred","crimson","red","forestgreen","green","seagreen","darkcyan","steelblue","slategray","slateblue","blueviolet","darkorchid","mediumvioletred","dimgray","dimgrey","sienna","brown","firebrick","darkolivegreen","darkgreen","darkslateblue","rebeccapurple","royalblue","teal","blue","darkviolet","darkmagenta","purple","darkslategray","darkslategrey","saddlebrown","darkred","maroon","midnightblue","navy","darkblue","indigo","mediumblue","black"];
	var colors = ["mintcream","floralwhite","ivory","white","white","white","snow","whitesmoke","linen","seashell","cornsilk","lemonchiffon","navajowhite","gold","yellow","honeydew","beige","lightyellow","lightcyan","azure","aliceblue","ghostwhite","lavenderblush","antiquewhite","oldlace","papayawhip","lightgoldenrodyellow","wheat","palegoldenrod","khaki","aquamarine","palegreen","greenyellow","cyan","aqua","paleturquoise","lavender","mistyrose","bisque","blanchedalmond","moccasin","lightgray","lightgrey","lightblue","powderblue","springgreen","lime","chartreuse","mediumspringgreen","turquoise","mediumturquoise","gainsboro","pink","peachpuff","burlywood","tan","silver","thistle","lightsteelblue","skyblue","limegreen","yellowgreen","lawngreen","lightgreen","mediumaquamarine","darkturquoise","lightpink","darksalmon","lightsalmon","sandybrown","peru","darkgray","darkgrey","cadetblue","lightseagreen","darkorange","orange","goldenrod","darkkhaki","lightskyblue","deepskyblue","lightcoral","salmon","tomato","coral","darkgoldenrod","grey","lightslategrey","darkseagreen","mediumseagreen","hotpink","orchid","violet","plum","cornflowerblue","lightslategray","rosybrown","chocolate","red","orangered","olive","gray","darkcyan","seagreen","olivedrab","fuchsia","magenta","mediumorchid","mediumpurple","dodgerblue","slategray","palevioletred","indianred","crimson","deeppink","mediumvioletred","slategrey","teal","forestgreen","green","darkorchid","blueviolet","slateblue","mediumslateblue","dimgray","darkslategray","saddlebrown","sienna","firebrick","purple","darkmagenta","darkslateblue","steelblue","darkolivegreen","darkgreen","darkviolet","blue","rebeccapurple","royalblue","dimgrey","darkslategrey","maroon","darkred","brown","indigo","mediumblue","darkblue","navy","midnightblue","black"];
	var hypenationRegex = /(dark|midnight|medium|light|pale|blanched|golden|spring|saddle|sandy|navajo|ghost|antique|powder|corn|flower|cadet|dodger|royal|slate|rebecca|forest|olive|deep|sky|aqua|papaya|lemon|lavender|white|yellow|orange|red|blue|green)/g;

	var $elt = $('.s-colors .app-wrapper');
	var len = colors.length;
	
	for (var i = 0; i < len; i++)
		$elt.append('<div class="color-tile" style="background-color:' + colors[i] + '"><div>' + colors[i].replace(hypenationRegex, '$1&shy;') + '</div></div>');
});
