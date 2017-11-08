$(document).ready(function(){
	$('.login').click(()=>{
		console.log();
		var name = $('.login-username').val();
		$('.login-button').hide();
		$('.signup-button').hide();
		$('.user-info').text('Welcome '+name);
		$('.user-info').show();
		$('.scan-now').show();		
	})

	$('.register').click(()=>{
		console.log();
		var name = $('.reg-username').val();
		$('.login-button').hide();
		$('.signup-button').hide();
		$('.user-info').text('Welcome '+name);
		$('.user-info').show();
		$('.scan-now').show();		
	})
});