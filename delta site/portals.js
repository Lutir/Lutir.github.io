var portals_list = [];

function portal(m){
	this.name  = m.name;
	this.pic   = m.pic;
	this.link   = m.link;
}

function handle_portals_data(data){
	for(var i=0;i<data.length;i++){
		portals_list.push(new portal({ name: data[i].name, pic: data[i].pic, link: data[i].link }));
	}
	render_portals();
}


function render_portals(){
	for(var i=0;i<portals_list.length;i++){
		$(".portals").append("\
		<div class=portal onclick=clickportal('"+portals_list[i].name+"')>\
      <span class=portal_name>"+portals_list[i].name+"</span>\
			<img class=portal_pic src="+portals_list[i].pic+" height=180 width=180>\
      </div>\
      <div id="+portals_list[i].name+" class=portal_info>\
        <img class=portal_pic src="+portals_list[i].pic+" height=350 width=350 style='padding:15px;'><br>\
        <span class=portal_names style='padding:15px;'> NAME: "+portals_list[i].name+"</span>\
        <span class=portal_link style='padding:15px;'>Click <a href="+portals_list[i].link+">here</a> to visit their site</span>\
    </div>\
    ");
	}
}

handle_portals_data([
	{
      "name": "3d",
      "pic": "portals/3d.jpg",
      "link": ".nitt.edu"
    },
    {
      "name": "aayam-hindi-cell-nit",
      "pic": "portals/aayam.jpeg",
      "link": ".nitt.edu"
    },
    {
      "name": "amruth",
      "pic": "portals/amruth.jpg",
      "link": ".nitt.edu"
    },
    {
      "name": "apeksha",
      "pic": "portals/apeksha.jpg",
      "link": ".nitt.edu"
    },
    {
      "name": "connect",
      "pic": "portals/connect.jpg",
      "link": ".nitt.edu"
    },
    {
      "name": "delta",
      "pic": "portals/delta.jpg",
      "link": "http://delta.nitt.edu"
    },
    {
      "name": "ecell",
      "pic": "portals/ecell.jpg",
      "link": ".nitt.edu"
    },
    {
      "name": "feeds",
      "pic": "portals/feeds.jpg",
      "link": ".nitt.edu"
    },
    {
      "name": "frappe",
      "pic": "portals/frappe.jpg",
      "link": ".nitt.edu"
    },
    {
      "name": "leap",
      "pic": "portals/leap.jpg",
      "link": ".nitt.edu"
    },
    {
      "name": "leo",
      "pic": "portals/leo.jpg",
      "link": ".nitt.edu"
    },
    {
      "name": "mt",
      "pic": "portals/mt.jpg",
      "link": ".nitt.edu"
    },
    {
      "name": "nakshatra",
      "pic": "portals/nakshatra.jpg",
      "link": ".nitt.edu"
    },
    {
      "name": "oar",
      "pic": "portals/oar.jpg",
      "link": ".nitt.edu"
    },
    {
      "name": "phoenix",
      "pic": "portals/phoenix.jpg",
      "link": ".nitt.edu"
    },
    {
      "name": "rmi",
      "pic": "portals/rmi.jpg",
      "link": "http://rminitt.com"
    },
    {
      "name": "rotaract",
      "pic": "portals/rotract.jpg",
      "link": ".nitt.edu"
    },
    {
      "name": "spider",
      "pic": "portals/spider.jpg",
      "link": "http://spider.nitt.edu"
    },
]);