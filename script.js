document.getElementById("buttons").addEventListener("click",function(){
document.querySelector(".popup").style.display = "flex";
})

document.querySelector(".close").addEventListener("click",function(){
document.querySelector(".popup").style.display = "none";
})



 function validate()
 {
 var username = document.getElementById("unname");
 var password = document.getElementById("pass");
 
 if(username.value.trim()=="" ||password.value.trim()=="")
 {
 alert("no blanks were allowed");
 return false;

 }
 else
 {
  alert("WELCOME TO DREAM HIGH");

 true;
 }
 }






