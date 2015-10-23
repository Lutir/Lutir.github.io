var projects_list = [];

function project(m){
  this.no=m.sno;
  this.name  = m.name;
  this.pic   = m.pic;
  this.link   = m.url;
  this.status = m.status;
  this.demo_link = m.demo_link;
}

function handle_projects_data(data){
  for(var i=0;i<data.length;i++){
    projects_list.push(new project({ no: data[i].sno, name: data[i].name, pic: data[i].pic, link: data[i].link, status: data[i].status, demo_link: data[i].demo_link }));
  }
  render_projects();
}


function render_projects(){
  for(var i=0;i<projects_list.length;i++){
    $(".projects").append("\
    <div class=project onclick=clickproject('"+projects_list[i].sno+"')>\
      <span class=project_name>"+projects_list[i].name+"</span>\
      <img class=project_pic src="+projects_list[i].pic+" height=180 width=180>\
      </div>\
      <div id="+projects_list[i].sno+" class=project_info>\
        <img class=project_pic src="+projects_list[i].pic+" height=350 width=350 style='padding:15px;'><br>\
        <span class=project_names style='padding:15px;'> NAME: "+projects_list[i].name+"</span><br>\
        <span class=project_link style='padding:15px;'>Click <a href="+projects_list[i].link+">here</a> for more details</span><br>\
         <span class=project_status style='padding:15px;'> status: "+projects_list[i].status+"</span><br>\
          <span class=project_demo_link style='padding:15px;'> demo_link: "+projects_list[i].demo_link+"</span><br>\
    </div>\
    ");
  }
}

handle_projects_data([
{ "sno":'1',
  "pic":"bla.jpeg",
  "name": "abc",
  "url":"asdfg",
  "status":"completed",
  "demo_link":"www.facebook"
  }
]);