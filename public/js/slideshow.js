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
	/*
	$(function() { 
			setTimeout(function(){
			//display the first image
			$('#slideshow > div:first')
			.setDivSize(30, 40)
			.center(false)
		.fadeIn(1000);
    
		//loop through the remaining images
		setInterval(function() {
		$('#slideshow > div:first')
			.fadeOut(1000)
			.next()
			.setDivSize(30,40)
			.center(false)
			.fadeIn(1000)
			.end()
			.appendTo('#slideshow');
		},  5000);
	}, 500 );
	});
	*/