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

function show_post(){
  document.getElementById('post').style.visibility="hidden";
  document.getElementById('post_desc').style.visibility="visible";
}
function hide_post(){
  document.getElementById('post').style.visibility="visible";
  document.getElementById('post_desc').style.visibility="hidden";
}

function show_blog(){
  document.getElementById('blog').style.visibility="hidden";
  document.getElementById('blog_desc').style.visibility="visible";
}
function hide_blog(){
  document.getElementById('blog').style.visibility="visible";
  document.getElementById('blog_desc').style.visibility="hidden";
}

function show_qna(){
  document.getElementById('qna').style.visibility="hidden";
  document.getElementById('qna_desc').style.visibility="visible";
}
function hide_qna(){
  document.getElementById('qna').style.visibility="visible";
  document.getElementById('qna_desc').style.visibility="hidden";
}

function show_review(){
  document.getElementById('review').style.visibility="hidden";
  document.getElementById('review_desc').style.visibility="visible";
}
function hide_review(){
  document.getElementById('review').style.visibility="visible";
  document.getElementById('review_desc').style.visibility="hidden";
}

function readmore1() {
  var dots1 = document.getElementById("dots1");
  var moreText1 = document.getElementById("more1");
  var btnText1 = document.getElementById("myBtn1");

  if (dots1.style.display === "none") {
    dots1.style.display = "inline";
    btnText1.innerHTML = "Read more";
    moreText1.style.display = "none";
  } else {
    dots1.style.display = "none";
    btnText1.innerHTML = "Read less";
    moreText1.style.display = "inline";
  }
}

function readmore2() {
  var dots2 = document.getElementById("dots2");
  var moreText2 = document.getElementById("more2");
  var btnText2 = document.getElementById("myBtn2");

  if (dots2.style.display === "none") {
    dots2.style.display = "inline";
    btnText2.innerHTML = "Read more";
    moreText2.style.display = "none";
  } else {
    dots2.style.display = "none";
    btnText2.innerHTML = "Read less";
    moreText2.style.display = "inline";
  }
}
function readmore3() {
  var dots3 = document.getElementById("dots3");
  var moreText3 = document.getElementById("more3");
  var btnText3 = document.getElementById("myBtn3");

  if (dots3.style.display === "none") {
    dots3.style.display = "inline";
    btnText3.innerHTML = "Read more";
    moreText3.style.display = "none";
  } else {
    dots3.style.display = "none";
    btnText3.innerHTML = "Read less";
    moreText3.style.display = "inline";
  }
}
function readmore4() {
  var dots4 = document.getElementById("dots4");
  var moreText4 = document.getElementById("more4");
  var btnText4 = document.getElementById("myBtn4");

  if (dots4.style.display === "none") {
    dots4.style.display = "inline";
    btnText4.innerHTML = "Read more";
    moreText4.style.display = "none";
  } else {
    dots4.style.display = "none";
    btnText4.innerHTML = "Read less";
    moreText4.style.display = "inline";
  }
}

function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
