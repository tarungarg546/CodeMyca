$(document).ready(function(){

	//on scroll, show the back to top button
	$(window).scroll(function(){
		if($(window).scrollTop() >= 5){ //if user has scrolled the window
			$('#back2top').fadeIn(500); // show the back to top button
		}else { // else if user is at the top already
			$('#back2top').fadeOut(500); //hide the back to top button
		}
	});

	//scroll the page to the top if user clicks on the back to top button
	$('#back2top').click(function(){
		$('html,body').animate({ scrollTop: 0 }, 'slow');
	});

	//checks if page was already scrolled down before load
	if($(window).scrollTop() >= 1){
		$('#back2top').show(); // show the back to top button
	}
});