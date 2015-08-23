var click=0;
$('.description.row').hide();
var main = function() {
	
	
	$('.title').click(function(){
		//if(click%2){
		
		//$('.description').hide();
		//$('.description').show();
		//}
		
		
		$(this).parentsUntil('variety').addClass('current');
		if(click%2===0){
		$(this).parentsUntil('variety.current').children('.description').slideDown('slow');
		click++;}
		else{
			$(this).parentsUntil('variety.current').children('.description').slideUp('slow');
		click++;}
		});
}
$(document).ready(main);

/*
var click = 0;
var main = function() 
{
	var click = 0;
	$('.description').hide();
	$('.variety').removeClass('current');
	$('.title').click(function(){
		$('.variety').addClass('current');
	if(click%2 === 0){
		$('.variety current').children('.description').slideDown();
		click++;
		}
		{
			$('.variety current').children('.description').slideUp();
			click++;
		}
	});
}
$(document).ready(main);

*//*
var main = function(){
	$('.description').hide();
	$('.variety').removeClass('current');
	$('.title').click(function(){
		$('.variety').addClass('current');
	
		$('.variety current').children('.description').slideUp();
		
		};

	
}
$(document).ready(main);*/