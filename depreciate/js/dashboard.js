var dash = document.getElementById("welcome");
var profile = document.getElementById("profile");
var Exchange = document.getElementById("exch");
var Rent = document.getElementById("rent");
var Buy = document.getElementById("buy");
var sell = document.getElementById("sell");
var RequestBooks = document.getElementById("request");
var DonateBooks = document.getElementById("donate");
var ContactUs = document.getElementById("contact");

function show_Dashboard() {
dash.style.display = "block";
profile.style.display = "none";
Exchange.style.display = "none";
Rent.style.display = "none";
Buy.style.display = "none";
sell.style.display = "none";
RequestBooks.style.display = "none";
DonateBooks.style.display = "none";
ContactUs.style.display = "none";
}

function show_Profile() {
dash.style.display = "none";
profile.style.display = "block";
Exchange.style.display = "none";
Rent.style.display = "none";
Buy.style.display = "none";
sell.style.display = "none";
RequestBooks.style.display = "none";
DonateBooks.style.display = "none";
ContactUs.style.display = "none";
}

function show_Exchange() {
dash.style.display = "none";
profile.style.display = "none";
Exchange.style.display = "block";
Rent.style.display = "none";
Buy.style.display = "none";
sell.style.display = "none";
RequestBooks.style.display = "none";
DonateBooks.style.display = "none";
ContactUs.style.display = "none";
}

function show_Rent() {
dash.style.display = "none";
profile.style.display = "none";
Exchange.style.display = "none";
Rent.style.display = "block";
Buy.style.display = "none";
sell.style.display = "none";
RequestBooks.style.display = "none";
DonateBooks.style.display = "none";
ContactUs.style.display = "none";
}

function show_Buy() {
dash.style.display = "none";
profile.style.display = "none";
Exchange.style.display = "none";
Rent.style.display = "none";
Buy.style.display = "block";
sell.style.display = "none";
RequestBooks.style.display = "none";
DonateBooks.style.display = "none";
ContactUs.style.display = "none";
}

function show_Sell() {
dash.style.display = "none";
profile.style.display = "none";
Exchange.style.display = "none";
Rent.style.display = "none";
Buy.style.display = "none";
sell.style.display = "block";
RequestBooks.style.display = "none";
DonateBooks.style.display = "none";
ContactUs.style.display = "none";
}

function show_RequestBooks() {
dash.style.display = "none";
profile.style.display = "none";
Exchange.style.display = "none";
Rent.style.display = "none";
Buy.style.display = "none";
sell.style.display = "none";
RequestBooks.style.display = "block";
DonateBooks.style.display = "none";
ContactUs.style.display = "none";
}

function show_DonateBooks() {
dash.style.display = "none";
profile.style.display = "none";
Exchange.style.display = "none";
Rent.style.display = "none";
Buy.style.display = "none";
sell.style.display = "none";
RequestBooks.style.display = "none";
DonateBooks.style.display = "block";
ContactUs.style.display = "none";
}

function show_ContactUs() {
dash.style.display = "none";
profile.style.display = "none";
Exchange.style.display = "none";
Rent.style.display = "none";
Buy.style.display = "none";
sell.style.display = "none";
RequestBooks.style.display = "none";
DonateBooks.style.display = "none";
ContactUs.style.display = "block";
}
//function show_Dashboard() {
  //var x = document.getElementById("dashboard");
 // if (dash.style.display === "none") {
  //  dash.style.display = "block";
  //} else {
  //  dash.style.display = "none";
  //}
//}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

function show_vnit(nameSelect){
  if(nameSelect){
    admOptionValue = document.getElementById("vnit").value;
    if(admOptionValue == nameSelect.value){
      document.getElementById("show_vnit").style.display = "block";
    }else{
      document.getElementById("show_vnit").style.display = "none";
    }
  }else{
    document.getElementById("show_vnit").style.display = "none";
  }
}

function show_hostel(){
  if(document.getElementById("radio1").checked){
    document.getElementById("show_hostel").style.display = "block";
  }else{
    document.getElementById("show_hostel").style.display = "none";
  }
}
