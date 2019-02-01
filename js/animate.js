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
})

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
