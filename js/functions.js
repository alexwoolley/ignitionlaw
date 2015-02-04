function equalise_bio_div_height () {
	
	//Make array of biography quotes
	carousel_text = $( ".carousel-text" ).toArray()

	//Make array of heights of the biography quotes.
	carousel_text_heights = [];
	i = 0;
	len = carousel_text.length;
	for (i = 0; i < len; i++) {
		carousel_text_heights.push($(carousel_text[i]).height())
	}

	//Sort carousel_text_heights so that largest height comes first.
	carousel_text_heights.sort(function(a, b){return b-a})

	//Assign largest height to a variable.
	var height = carousel_text_heights[0];

	//Set all heights equal to the largest height.
	i = 0;
	for (i = 0; i < len; i++) {
		$(carousel_text[i]).height(height)
	}

}