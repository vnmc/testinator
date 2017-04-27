$(document).ready(function()
{
    // initialize swiper when document ready  
    new Swiper('.s-slideshow .swiper-container', {
	    pagination: '.s-slideshow .swiper-pagination',
	    paginationClickable: true,
	    nextButton: '.s-slideshow .swiper-button-next',
	    prevButton: '.s-slideshow .swiper-button-prev'
    });
});
