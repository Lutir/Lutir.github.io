var main = function(){
	$("#menuButton").click(function(){
		$('#header').animate({
			left: "285px"
		},200);
		$("#sidelist").animate({
			left: "0px",
			top: "0px"
		},200);
		$('#main1').animate({
		left: "535px"
	}, 200);
    
		$("#background").animate({
			left: "285px"
		},200);
		
	});

	$('#slideclose').click(function() {
	
	$('#header').animate({
			left: "0px"
		},200);
    $('#sidelist').animate({
      left: "-285px",
	  top:"0px"
    }, 200);
	$('#main1').animate({
		left: "250px"
	}, 200);
    $('#background').animate({
      left: "0px"
    }, 200);
  });
  
	$('#storeName').click(function(){
		$('#store-list').toggle();
	})
	
	}


$(document).ready(main);