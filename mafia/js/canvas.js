$(document).ready(function() {
	var canvas = $("#myCanvas");
	var context = canvas.get(0).getContext("2d");
	var canvasWidth = canvas.width();
	var canvasHeight = canvas.height();
	
	$(window).resize(resizeCanvas);//awesome;
	function resizeCanvas() {	
		canvas.attr("width", $(window).get(0).innerWidth-50);
		canvas.attr("height", $(window).get(0).innerHeight);
		canvasWidth = canvas.width();
		canvasHeight = canvas.height();
	};
	resizeCanvas();
	// alert(canvasWidth);
	// alert(canvasHeight);
	context.fillStyle = "rgb(255, 255, 255)";
	context.fillRect(0,0,canvasWidth,canvasHeight);
	var img=document.getElementById('hello');
	
	var playAnimation=true;
	var i=0;
	var count=50;
	
	
	//alert(p);
	
	function bullet(){
		i++;
		var temp=Math.random();
		var x=-100+temp*1200;
		var temp2=Math.random();
		var y=-100+temp2*1000;
		//console.log(x,y);
		
		
		if(i<count){
			context.drawImage(img,x,y);
			playAnimation=false;
		}
		else{
			clearInterval(k);
		}
	};

	if(playAnimation){
	var k= setInterval(bullet,130);
	}
	
	
});