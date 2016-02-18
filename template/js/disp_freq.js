var curr_vals = {
	disp:1,
	disp2:1,
	disp3:1
};


function disp(start , dir)
{

	var tot_items = $('.quote').length;


	if(start)
	{
		$("#car-4").html('1/' + String(tot_items));
	}

	else
	{

		if((curr_vals.disp+dir) > tot_items)
			curr_vals.disp=1;
		else
			curr_vals.disp = ((curr_vals.disp + dir )< 1)?tot_items:(curr_vals.disp + dir);
		$("#car-4").html(String(curr_vals.disp)+'/' + String(tot_items));

	}


}

function disp2 (start , dir)
{
	// upcoming events...
	var tot_items = $('.section-content.downloads > #events-carousel > .carousel-inner > .item').length;

	if(start)
	{
		$("#car-1").html('1/' + String(tot_items));
	}

	else
	{

		if((curr_vals.disp2+dir) > tot_items)
			curr_vals.disp2=1;
		else
			curr_vals.disp2 = ((curr_vals.disp2 + dir )< 1)?tot_items:(curr_vals.disp2 + dir);
		$("#car-1").html(String(curr_vals.disp2)+'/' + String(tot_items));
		//console.log('here');

	}


}

function disp3(start , dir)
{
	//Quicklinks

	var tot_items = $('.section-content.downloads > #quicklinks-carousel > .carousel-inner > .item').length;

	if(start)
	{
		$("#car-2").html('1/' + String(tot_items));
	}

	else
	{

		if((curr_vals.disp3+dir) > tot_items)
			curr_vals.disp3=1;
		else
			curr_vals.disp3 = ((curr_vals.disp3 + dir )< 1)?tot_items:(curr_vals.disp3 + dir);
		$("#car-2").html(String(curr_vals.disp3)+'/' + String(tot_items));
		//console.log('here');

	}
}


$(document).ready(function(){

	disp(1 ,0);
	disp2(1,0);
	disp3(1,0);
})