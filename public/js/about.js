//$('.gallery').slick();

$(document).ready(function() {

	//Work gallery
	$('.gallery').isotope({
	  itemSelector: '.cell',
	  layoutMode: 'cellsByRow',
	  cellsByRow: {
	    columnWidth: 400,
	    rowHeight: 550
	  }
	});

	//Achievment gallery
	$('.achievements-gallery').isotope({
	  itemSelector: '.cell',
	  layoutMode: 'cellsByRow',
	  cellsByRow: {
	    columnWidth: 400,
	    rowHeight: 500
	  }
	});

	//Counter
	 $('.number').counterUp({
		delay: 10,
		time: 1000
	});
});
