function addItem() {

var itemName=prompt("Enter New Item Name");
var itemPrice=prompt("Enter Item Price");

var p=document.createElement('p');
var x=document.createTextNode(itemName);
p.appendChild(x);
document.getElementById('rightmenu').append(p);
/*
var li=document.createElement('li');
li.appendChild(document.createTextNode(itemName));




var ul=document.createElement('ul');

ul.appendChild(li);

var variety=document.createElement('div');
variety.className="variety";

var description_row=document.createElement('div');
description_row.className="description row";

var menu_sub=document.createElement('div');
menu_sub.className="menu sub";

menu_sub.appendChild(ul);

description_row.appendChild(menu_sub);

variety.appendChild(description_row);

var x=document.getElementsByClassName("rightmenu");
x.appendChild(variety);

var y=document.getElementsByClassName("menuBody");
y.appendChild(x);


*/
}