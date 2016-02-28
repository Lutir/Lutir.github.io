$('.details').click(function(){
			
		});
			$('.details-r').show();
			$('.rewards-r').hide();
			$('.register-r').hide();
			$('.rules-r').hide();
		$('.rules').click(function(){
			//alert("helo");
			$('.details-r').hide("slow");
			$('.rewards-r').hide("slow");
			$('.register-r').hide("slow");
			$('.rules-r').show("slow");
		});
		$('.details').click(function(){
			//alert("helo");
			$('.rules-r').hide("slow");
			$('.rewards-r').hide("slow");
			$('.register-r').hide("slow");
			$('.details-r').show("slow");
		});
		$('.register').click(function(){
			//alert("helo");
			$('.rules-r').hide("slow");
			$('.rewards-r').hide("slow");
			$('.details-r').hide("slow");
			$('.register-r').show("slow");
			
		});
		$('.rewards').click(function(){
			//alert("helo");
			$('.rules-r').hide("slow");
			$('.details-r').hide("slow");
			$('.register-r').hide("slow");
			$('.rewards-r').show("slow");
			
		});