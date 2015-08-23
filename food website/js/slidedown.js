$(document).ready(function(){
	$('div li ul').hide().removeClass('fallback');
$('div li').hover(
  function () {
    $('ul', this).stop().slideDown(100);
  },
  function () {
    $('ul', this).stop().slideUp(100);
  }
);
})