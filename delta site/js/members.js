var members_list = [];

function Member(m){
	this.name  = m.name;
	this.pic   = m.pic;
	this.email = "-";
	this.url   = m.url;
}

function handle_members_data(data){
	for(var i=0;i<data.length;i++){
		members_list.push(new Member({ name: data[i].login, pic: data[i].avatar_url, email: data[i].email ,url: data[i].html_url }));
	}
	render_members();
}

function render_members(){
	for(var i=0;i<members_list.length;i++){
		$(".members").append("\
		<div class=flip-container ontouchstart=this.classList.toggle('hover');>\
			<div class=flipper>\
				<div class=front>\
				<img class=member_pic src="+members_list[i].pic+">\
			</div>\
				<div class=back>\
				<span class=member_name>"+members_list[i].name+"</span>\
				<span class=member_email>"+members_list[i].email+"</span>\
				<span class=member_url><a href="+members_list[i].url+">Profile</a></span>\
			</div>\
			</div>\
			</div>\
		");
		//$('.members').appendTo($('#st-panel-2'));
	}
}

handle_members_data([
 {
      "login": "abhishekdelta",
      "avatar_url": "https://avatars.githubusercontent.com/u/663693?v=3",
      "html_url": "https://github.com/abhishekdelta",
    },
    {
      "login": "ash7594",
      "avatar_url": "https://avatars.githubusercontent.com/u/4885137?v=3",
      "html_url": "https://github.com/ash7594",
    },
    {
      "login": "balanivash",
      "avatar_url": "https://avatars.githubusercontent.com/u/527778?v=3",
      "html_url": "https://github.com/balanivash",
    },
    {
      "login": "baxiz",
      "avatar_url": "https://avatars.githubusercontent.com/u/4953702?v=3",
      "html_url": "https://github.com/baxiz",
    },
    {
      "login": "bindingofisaac",
      "avatar_url": "https://avatars.githubusercontent.com/u/11008385?v=3",
      "html_url": "https://github.com/bindingofisaac",
    },
    {
      "login": "boopathi",
      "avatar_url": "https://avatars.githubusercontent.com/u/294474?v=3",
      "html_url": "https://github.com/boopathi",
    },
    {
      "login": "chakradarraju",
      "avatar_url": "https://avatars.githubusercontent.com/u/142612?v=3",
      "html_url": "https://github.com/chakradarraju",
    },
    {
      "login": "charu25",
      "avatar_url": "https://avatars.githubusercontent.com/u/4511879?v=3",
      "html_url": "https://github.com/charu25",
    },
    {
      "login": "coderush",
      "avatar_url": "https://avatars.githubusercontent.com/u/317629?v=3",
      "html_url": "https://github.com/coderush",
    },
    {
      "login": "CoolVoltage",
      "avatar_url": "https://avatars.githubusercontent.com/u/4469937?v=3",
      "html_url": "https://github.com/CoolVoltage",
    },
    {
      "login": "deepak1556",
      "avatar_url": "https://avatars.githubusercontent.com/u/964386?v=3",
      "html_url": "https://github.com/deepak1556",
    },
    {
      "login": "dineshnitt",
      "avatar_url": "https://avatars.githubusercontent.com/u/531976?v=3",
      "html_url": "https://github.com/dineshnitt",
    },
    {
      "login": "GokulSrinivas",
      "avatar_url": "https://avatars.githubusercontent.com/u/6184049?v=3",
      "html_url": "https://github.com/GokulSrinivas",
    },
    {
      "login": "harshasrinivas",
      "avatar_url": "https://avatars.githubusercontent.com/u/7846363?v=3",
      "html_url": "https://github.com/harshasrinivas",
    },
    {
      "login": "jithinkr",
      "avatar_url": "https://avatars.githubusercontent.com/u/537512?v=3",
      "html_url": "https://github.com/jithinkr",
    },
    {
      "login": "nirvik",
      "avatar_url": "https://avatars.githubusercontent.com/u/2123579?v=3",
      "html_url": "https://github.com/nirvik",
    },
    {
      "login": "nobelium",
      "avatar_url": "https://avatars.githubusercontent.com/u/966917?v=3",
      "html_url": "https://github.com/nobelium",
    },
    {
      "login": "rizwanhkm",
      "avatar_url": "https://avatars.githubusercontent.com/u/7844982?v=3",
      "html_url": "https://github.com/rizwanhkm",
    },
    {
      "login": "rohansinha",
      "avatar_url": "https://avatars.githubusercontent.com/u/785431?v=3",
      "html_url": "https://github.com/rohansinha",
    },
    {
      "login": "sananth12",
      "avatar_url": "https://avatars.githubusercontent.com/u/3823550?v=3",
      "html_url": "https://github.com/sananth12",
    },
    {
      "login": "scottydelta",
      "avatar_url": "https://avatars.githubusercontent.com/u/2242189?v=3",
      "html_url": "https://github.com/scottydelta",
    },
    {
      "login": "seekshiva",
      "avatar_url": "https://avatars.githubusercontent.com/u/484349?v=3",
      "html_url": "https://github.com/seekshiva",
    },
    {
      "login": "siddhant3s",
      "avatar_url": "https://avatars.githubusercontent.com/u/295892?v=3",
      "html_url": "https://github.com/siddhant3s",
    },
    {
      "login": "stndlkr200",
      "avatar_url": "https://avatars.githubusercontent.com/u/4478973?v=3",
      "html_url": "https://github.com/stndlkr200",
    },
    {
      "login": "vasuman",
      "avatar_url": "https://avatars.githubusercontent.com/u/1475410?v=3",
      "html_url": "https://github.com/vasuman",
    },
    {
      "login": "vshriram93",
      "avatar_url": "https://avatars.githubusercontent.com/u/993151?v=3",
      "html_url": "https://github.com/vshriram93",
    }
]);
