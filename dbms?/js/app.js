//slider settings
$('.bxslider').bxSlider({
  minSlides: 3,
  maxSlides: 4,  
  captions: true,
  slideWidth: 200,
  slideMargin: 10
});

//append start and end ages
var age='';
for(var i=18;i<40;i++){
	age+='<option value='+i+'>'+i+'</option>';
}
$('#search_min_age').append(age);
$('#search_max_age').append(age);

var religion = ['Jain','Hindu','Muslim','Bong','Tamil','Telegu','Marathi','Assamese','Sikh','Punjabi'];
var religion_list = '';
for(var i=0;i<religion.length;i++)
	religion_list+='<option value='+religion[i]+'>'+religion[i]+'</option>';
$('#search_religion').append(religion_list);