var count=0;
var members_list = [];
var distances = [];
var lat_init=10.760980;
var long_init=78.813932;
var y=[];
function Store(m){
	this.name  = m.name;
	this.long = m.long;
  this.lat = m.lat;
  this.address = m.address;
  this.medName = [];
  this.contact = m.contact;
  this.distance=0;
  this.delivary = 0;
}

function handle_members_data(data){
	for(var i=0;i<data.length;i++){
		members_list.push(new Store({ name: data[i].name, lat: data[i].lat, long: data[i].long ,address: data[i].address,medName: data[i].medName,contact: data[i].contact,distance: data[i].distance}));
	}
  medicineName();
  delivary();
  comparator();
	//render_members();
}
function delivary(){
  members_list[0].delivary="Home Delivary";
  members_list[1].delivary="Pick-Up";
  members_list[4].delivary="Home Delivary";
  members_list[3].delivary="Home Delivary";
  members_list[2].delivary="Pick-Up";
}

function medicineName(){
  members_list[0].medName=['a2','a3','a4','a5','a6','a12','a17','a16','a19','a20','a25','a24','a26','a28'];
  members_list[1].medName=['a2','a4','a6','a8','a5','a22','a11'];
  members_list[2].medName=['a1','a3','a8','a5','a7','a9','a11','a14','a18','a20','a23','a28'];
  members_list[3].medName=['a1','a4','a5','a8','a9','a11','a13','a15','a17','a19','a21','a23','a26','a27','a29'];
  members_list[4].medName=['a1','a2','a3','a4','a5','a6','a7','a8','a9','a10','a22','a30'];

}


function render_members(){
  /*--printing all objects data
	for(var i=0;i<members_list.length;i++){
		$(".members").append("\
			<div class=members_data>\
				<span class=member_name>"+members_list[i].name+"</span>\
				<span class=member_lat>"+members_list[i].lat+"</span>\
        <span class=member_long>"+members_list[i].long+"</span>\
        <span class=member_address>"+members_list[i].address+"</span>\
        <span class=member_medName>"+members_list[i].medName+"</span>\
				<span class=member_contact>"+members_list[i].contact+"</span>\
			</div>\
		");

		//$('.members').appendTo($('#st-panel-2'));
	}
  */
}
function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
  var R = 6371; // Radius of the earth in km

  var dLat = deg2rad(lat2-lat1);  // deg2rad below
  var dLon = deg2rad(lon2-lon1); 
  var a = 
    Math.sin(dLat/2) * Math.sin(dLat/2) +
    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
    Math.sin(dLon/2) * Math.sin(dLon/2)
    ; 
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
  var d = R * c; // Distance in km
  return d;
}

function deg2rad(deg) {
  return deg * (Math.PI/180)
}

function comparator(){
  for(var i=0;i<members_list.length;i++){
    
    var latx=members_list[i].lat;
    var longx=members_list[i].long;
    var temp=getDistanceFromLatLonInKm(latx,longx,lat_init,long_init);
    members_list[i].distance=temp;
    
  }

  distance_display();
}
function distance_display(){
  for(var i=0;i<members_list.length;i++){
    members_list[i].distance=Math.round(members_list[i].distance * 100) / 100; 
  }
  //members_list.distances.sort(function(a, b){return a-b});
  for(var i=0;i<members_list.length;i++){
//    alert(members_list[i].distance);
    //alert(members_list[i].medName[0]);
  }


}

function locate(){
  if(count>0){
    $('.result').empty();
  }
  var x=document.getElementById('input').value;
  y=[];
  for(var i=0;i<members_list.length;i++){

    for(var j=0;j<members_list[i].medName.length;j++){
      if(x==members_list[i].medName[j]){
        y.push(members_list[i]);
      }
    }
    
  }
    for(var i=0;i<y.length;i++){
    $(".result").append("\
      <div class=result_data>\
        <a></a><span class=result_name>"+y[i].name+"</span></br>\
        <a>Distance From You:</a><span class=member_contact>"+y[i].distance+"km</span><br>\
        <a>Delivary Service:"+y[i].delivary+"</a><br><br>\
        \
      </div>\
    ");
    }
    count++;
    $('.image').hide();
    if(y[0].name=='Apollo pharmacy'){
      $('#1').show();
    }    
    else if (y[0].name=='Selva Vinayagar Medicals') {
      $('#3').show();
    }
    else if(y[0].name=='Bharani Medicals'){
      $('#4').show();
    }
    else if(y[0].name=='Murugan Medical Stores'){
      $('#2').show();
    }
    else if(y[0].name=='Sri Shakthi Pharmacy'){
      $$('#5').show();
    }
}


handle_members_data([
  {
      "name": "Apollo pharmacy",
      "lat": "10.762629",
      "long": "78.818910",
      "medName": "..",
      "address": "Apollo Pharmacy,Near Buhari Canteen,",
      "contact": "+91 9597653658",
      "distance": "0",
    },
 {
      "name": "Selva Vinayagar Medicals",
      "lat": "10.751198",
      "long": "78.825658",
      "medName": "..",
      "address": "Selva Vinayagar Medicals",
      "distance": "0",
      "contact": "+91 99440 11421",
    },
    {
      "name": "Bharani Medicals",
      "lat": "10.783598",
      "long": "78.785361",
      "medName": "..",
      "address": "105, Jainagar",
      "contact": "+91 431 251 2328",
      "distance": "0",
    },
    {
      "name": "Murugan Medical Stores",
      "lat": "10.785540",
      "long": "78.776349",
      "medName": "..",
      "address": "Tanjore Main Road, Thiruverumbur",
      "contact": "+91 96777 17595",
      "distance": "0",
    },
    {
      "name": "Sri Shakthi Pharmacy",
      "lat": "10.796076",
      "long": "78.759268",
      "medName": "..",
      "address": "Shop 23, KSJ Complex, Balaji Nagar",
      "contact": "+91 99430 50142",
      "distance": "0",
    }
]);


