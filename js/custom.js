$(document).ready(function() {
	
	console.log("Hi Zanya");

	$(".popup_image img").click(function() {
		console.log("Image clicked");

		$("#myModal").css("display", "block");
		var imageSrc = $(this).attr("src");
		$("#myModal img").attr("src", imageSrc);
		console.log("image src: ");
		console.log(imageSrc);
	});

	$("#myModal .close, #myModal").click(function() {
		$("#myModal").css("display", "none");
	});

});