$("#buybook").click(function(){
  $("#buy").css({"display":"block"});
  $("#buy").animate({opacity: 1}, 1000);
  $("#sell").animate({opacity: 0}, 100);
  $("#sell").css({"display":"none"});
  $("#front").animate({opacity: 0}, 100);
  $("#front").css({"display":"none"});
  $("#shbuy").animate({opacity: 0}, 100);
  $("#shbuy").css({"display":"none"});
});

$("#buyshbook").click(function(){
  $("#shbuy").css({"display":"block"});
  $("#shbuy").animate({opacity: 1}, 100);
  $("#buy").css({"display":"none"});
  $("#buy").animate({opacity: 0}, 1000);
  $("#sell").animate({opacity: 0}, 100);
  $("#sell").css({"display":"none"});
  $("#front").animate({opacity: 0}, 100);
  $("#front").css({"display":"none"});
});

$("#sellbook").click(function(){
  $("#shbuy").css({"display":"none"});
  $("#shbuy").animate({opacity: 0}, 100);
  $("#sell").css({"display":"block"});
  $("#sell").animate({opacity: 1}, 1000);
  $("#buy").animate({opacity: 0}, 100);
  $("#buy").css({"display":"none"});
  $("#front").animate({opacity: 0}, 100);
  $("#front").css({"display":"none"});

});
$("#bclose").click(function(){
  $("#shbuy").css({"display":"none"});
  $("#shbuy").animate({opacity: 0}, 100);
  $("#front").css({"display":"block"});
  $("#buy").css({"display":"none"});
  $("#sell").css({"display":"none"});
  $("#front").animate({opacity: 1}, 1000);
  $("#buy").animate({opacity: 0}, 1000);

});
$("#sclose").click(function(){
  $("#shbuy").css({"display":"none"});
  $("#shbuy").animate({opacity: 0}, 100);
  $("#front").css({"display":"block"});
  $("#buy").css({"display":"none"});
  $("#sell").css({"display":"none"});
  $("#front").animate({opacity: 1}, 1000);
  $("#sell").animate({opacity: 0}, 1000);

});
$("#shclose").click(function(){
  $("#shbuy").css({"display":"none"});
  $("#shbuy").animate({opacity: 0}, 100);
  $("#front").css({"display":"block"});
  $("#buy").css({"display":"none"});
  $("#sell").css({"display":"none"});
  $("#front").animate({opacity: 1}, 1000);
  $("#sell").animate({opacity: 0}, 1000);

});

var c = 0;
$('#login-button').click(function() {
  if(c%2 == 0){
    $('#login-form').css({"display":"block"});
  }else{
    $('#login-form').css({"display":"none"});
  }
  c++;
});

$("#clogin").click(function() {
  $('#clogin').css({"display":"block"});
  $("#clogin").animate({opacity: 1}, 1000);
  $('#reset').css({"display":"none"});
  $("#reset").animate({opacity: 0}, 1000);
  $('#signup').css({"display":"none"});
  $("#signup").animate({opacity: 0}, 1000);
});

// $("reset").click(function() {
//   $('#reset').css({"display":"block"});
//   $("#reset").animate({opacity: 1}, 1000);
//   $('#clogin').css({"display":"none"});
//   $("#clogin").animate({opacity: 0}, 1000);
//   $('#signup').css({"display":"none"});
//   $("#signup").animate({opacity: 0}, 1000);
// });
