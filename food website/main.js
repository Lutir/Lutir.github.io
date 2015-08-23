
var letters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.split('');
var cap = '';
for (var i = 0; i < 6; i++ ) {
			
	cap += letters[Math.floor(Math.random() * 61)];
	}
	
document.getElementById("capcha").innerHTML= '&nbsp;'+cap;

function generate(){
	
	var main=function(){
		$('#capcha').innerHTML='';
	}
$(document).ready(main);
	
	var letters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.split('');
var cap = '';
for (var i = 0; i < 6; i++ ) {
			
	cap += letters[Math.floor(Math.random() * 61)];
	}
document.getElementById("capcha").innerHTML=' ';
document.getElementById("capcha").innerHTML= '&nbsp;'+cap;

}