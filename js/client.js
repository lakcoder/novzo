function validateData(){
  console.log("innn");
  var e=document.getElementById("username").value,
      a=document.getElementById("email").value,
      t=document.getElementById("").value,
      m=document.getElementById("contact").value,
      n=document.getElementById("password").value,
      l="";
  if(""==e)
    l="Username Can't be empty";
  else if(""==t)
    l="Enter your team name";
  else if(""==a)
    l="Enter team's email";
  else if(""==m)
    0==m.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/)
  else if(""!=a){
    0==a.match(/^(\".*\"|[A-Za-z]\w*)@(\[\d{1,3}(\.\d{1,3}){3}]|[A-Za-z]\w*(\.[A-Za-z]\w*)+)$/)&&(l+="Your email address seems incorrect. Please try again.")
  }else""==m?l="Minimum 2 members required":n.length<8&&(l="Minimum 8 digit password required");
  return""==l||($("#message").html(l),!1)
}
