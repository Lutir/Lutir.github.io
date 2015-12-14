var k=1;
function dash_toggle()
{ if(k)
	{$("#dashboard").hide();k=0;}
  else
  	{$("#dashboard").show();k=1;}

}
window.onload=dash_toggle;
