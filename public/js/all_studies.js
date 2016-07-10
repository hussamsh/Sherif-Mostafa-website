
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
});
