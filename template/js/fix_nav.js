$(document).scroll(function scroll_fix_nav	() {
	console.log($(window).width());
  if(($(window).width()) >=1001){
  if(window.scrollY >= 143)
  	{
  		if($('[id="k-menu affix"]').attr('class') == 'k-main-navig')
  		{$('[id="k-menu affix"]').toggleClass('k-main-navig navbar-fixed-top');
    	 
  			$('.navbar-fixed-top').css("background-color" , 'rgba(255, 57, 59, 1)');
    	}

    }  
  else{
  	if($('[id="k-menu affix"]').attr('class') == 'navbar-fixed-top')
  	{$('[id="k-menu affix"]').toggleClass('navbar-fixed-top k-main-navig');
	 $('.k-main-navig').css("background-color" , '#FFFFFF')
	 }
		
	}

}

// else {
// 	$(".k-main-navig").css("visibility", "hidden");
// }
});
window.onload = nav_resize;
window.onresize = nav_resize;
function nav_resize(){
if($(window).width()<=900)
{
  $('[id="k-menu affix"]').css("display","none");
}
else{
  $('[id="k-menu affix"]').css("display","block"); 
}
}