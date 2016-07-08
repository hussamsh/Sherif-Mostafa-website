//$('.gallery').slick();

$(document).ready(function() {

	//Work gallery
	$('.gallery').isotope({
	  itemSelector: '.cell',
	  layoutMode: 'cellsByRow',
	  cellsByRow: {
	    columnWidth: 400,
	    rowHeight: 550
	  },
	  masonryHorizontal: {
	    rowHeight: 110
	  }
	});

	//Achievment gallery
	$('.achievements-gallery').isotope({
	  itemSelector: '.cell',
	  layoutMode: 'cellsByRow',
	  cellsByRow: {
	    columnWidth: 400,
	    rowHeight: 500
	  },
	  masonryHorizontal: {
	    rowHeight: 110
	  }
	});

	//Counter
	 $('.number').counterUp({
		delay: 10,
		time: 1000
	});
});
