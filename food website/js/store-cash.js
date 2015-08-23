	var sum = 0;
	var array = [];
	function addCost(dish){
		var temp = dish.getAttribute("data-cost");
		sum=sum+parseInt(temp);
		document.getElementById("sumcash").value = sum;
		
		
		var x=document.getElementById("order"); 	
		var name=dish.getAttribute("data-name");
		array.push(name);
		var t=document.createTextNode(name);
		var elem=document.createElement("p");
		var counter=0;
		/*for(var i=0;i<array.length;i++){
			if(array[i]==name){
				
			}	
			else{
				counter++;
			}
		}
		if(counter==array.length){*/
		elem.appendChild(t);
		x.appendChild(elem);
		//}
		
	}