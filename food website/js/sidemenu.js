
var main = function(){
	$("#menuButton").click(function(){
		
		$(".directorySlider").animate({
			left: "285px"
		},200);
		
		$("#sidelist").animate({
			left: "0px",
			top: "0px"
		},200);
		
		$('#main').animate({
		left: "535px"
	}, 200);
    
		$("#header").animate({
			left: "285px"
		}, 200);
		
		$("#main1").animate({
			left: "535px"
		},200);
		
		
		$("#menuBody").animate({
			left: "535px"
		}, 200);
		
	});

	$('#slideclose').click(function() {
		
	$('.directorySlider').animate({
		left: "0px"
	},200);
	
	$("#main1").animate({
			left: "250px"
		},200);
	
    $('#sidelist').animate({
      left: "-285px",
	  top:"0px"
    }, 200);
	$('#main').animate({
		left: "0px"
	}, 200);
    $('#header').animate({
      left: "0px"
    }, 200);
	$("#menuBody").animate({
			left: "0px"
		}, 200);
  });
  
	$('#storeName').click(function(){
		$('#store-list').toggle();
	})
	
	}


$(document).ready(main);