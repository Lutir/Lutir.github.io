var workshops_list = [];

function Workshop(w){
	this.sno = w.sno;
	this.name  = w.name;
	this.date   = w.date;
	this.details = w.details;
	this.regform = w.regform;
	this.pic = w.img;
}

function handle_workshops_data(data){
	for(var i=0;i<data.length;i++){
		workshops_list.push(new Workshop({sno: data[i].sno, name: data[i].name, date: data[i].date, details: data[i].details, regform: data[i].regform, pic:data[i].img }));
	}
	render_workshops();
}


function render_workshops(){
	 for(var i=0;i<workshops_list.length;i++){
    $(".workshops").append("\
    <div class=workshop onclick=clickworkshop('"+workshops_list[i].sno+"')>\
      <span class=workshop_name>"+workshops_list[i].name+"</span>\
      <img class=workshop_pic src="+workshops_list[i].pic+" height=180 width=180>\
      </div>\
      <div id="+workshops_list[i].sno+" class=workshop_info>\
        <img class=workshop_pic src="+workshops_list[i].pic+" height=350 width=350 style='padding:15px;'><br>\
        <span class=workshop_names style='padding:15px;'> NAME: "+workshops_list[i].name+"</span><br>\
        <span class=workshop_date style='padding:15px;'> DATE: "+workshops_list[i].date+"</span><br>\
        <span class=workshop_regform style='padding:15px;'>Click <a href="+workshops_list[i].regform+">here</a> to register</span><br>\
        <span class=workshop_details style='padding:15px;'>Click <a href="+workshops_list[i].details+">here</a> for more details</span><br>\
    </div>\
    ");
  }
}

handle_workshops_data([
	{ "sno":"1",
      "name":"python",
      "date":"10 Aug 2015",
      "regform":"https://www.google.com",
      "details":"https://www.google.com"
    },
    {"sno":"2",
      "name":"c++",
      "date":"10 Aug 2014",
      "regform":"https://www.google.com",
      "details":"https://www.google.com"
    }
]);