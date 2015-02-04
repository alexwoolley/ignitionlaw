function equalise_bio_div_height () {

	var height = Math.max($("#carousel-text-0").height(), $("#carousel-text-1").height(), $("#carousel-text-1").height());

	for (i=0; )

    $("#carousel-text-0").height(height);
    $("#carousel-text-1").height(height);
    $("#carousel-text-2").height(height);
}


	// var divHeight = $('#carousel-text-0').height(); 
	// $('#carousel-text-1').css('height', divHeight+'px');


	// var slideHeight = [];
 //    $('.item').each(function()
 //    {
 //        // add all slide heights to an array
 //        slideHeight.push($(this).height());
 //    });

 //    // find the tallest item
 //    max = Math.max.apply(null, slideHeight);

 //    // set the slide's height
 //    $('.carousel-text').each(function()
 //    {
 //        $(this).css('height',max+'px');
 //    });