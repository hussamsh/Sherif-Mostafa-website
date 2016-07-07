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





 $('.number').counterUp({
	delay: 10,
	time: 1000
});
//$('.gallery').slick();
    /*$('.gallery').slick({*/
        //// dots: true,
        //infinite: true,
        //speed: 300,
        //slidesToShow: 8,
        //slidesToScroll: 1,
        //responsive: [{
            //breakpoint: 1024,
            //settings: {
                //slidesToShow: 6,
                //slidesToScroll: 1,
                //// centerMode: true,

            //}

        //}, {
            //breakpoint: 800,
            //settings: {
                //slidesToShow: 3,
                //slidesToScroll: 2,
                //dots: true,
                //infinite: true,

            //}


        //}, {
            //breakpoint: 600,
            //settings: {
                //slidesToShow: 2,
                //slidesToScroll: 2,
                //dots: true,
                //infinite: true,
                
            //}
        //}, {
            //breakpoint: 480,
            //settings: {
                //slidesToShow: 1,
                //slidesToScroll: 1,
                //dots: true,
                //infinite: true,
                //autoplay: true,
                //autoplaySpeed: 2000,
            //}
        //}]
    //});
});
