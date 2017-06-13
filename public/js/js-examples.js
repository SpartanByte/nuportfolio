/**
 * ==== JQUERY AND JAVASCRIPT FOR ANY FUNCTIONALITY IN JAVASCRIPT EXAMPLE PAGES
 * ==== This .js file only loads on 'coding/javascript' and 'programs/js/.....' pages
 */

/*
	jQuery for JavaScript color changing slideshow example
 */
	$("#slideshow > div:first").hide();
	
	setInterval(function(){

		$('#slideshow > div:first')
			.fadeOut(5000)
			.next()
			.fadeIn(5000)
			.end()
			.appendTo('#slideshow');
	}, 5000);
		
	/* centering the images with extra WxH for the text below the images */
	jQuery.fn.setDivSize = function(extraHeight, extraWidth){
		var img = new Image();
		img.src = this.children('img').attr('src');
		
		this.height(img.height + extraHeight)
			.width (img.width + extraHeight);
		return this;
	}
