<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
.error {color: #FF0000;}


.popup{
	background:rgba(0,0,0,0.6);
	width:100%;
	height:100%;
	position:absolute;
	top:0;
	display:none;
	justify-content:center;
	align-items:center;
	text-align:center;
	}
	.popup-content{
		height:600px;
		width:600px;
		background:#f8ceec;
		padding:50px;
		border-radius:55px;
		position:relative;
		border:5px solid grey;
		border-radius:30px;
	
		}
	.popup-content input[type="text"],input[type="number"]{
		 border:none;
		 border:2px solid grey;
		 background:transparent;
		 outline:none;
		 height:20px;
		 margin-top: 8px;

		 }
	.popup-content .buttons{
		border:none;
		outline:none;
		height:30px;
		background:black;
		color:white;
		width:150px;
		border-radius:20px;
		font-size:18px;
		cursor:pointer;
		}
	.popup-content .buttons:hover{
	background:white;
	color:black;
	border:2px solid black;
	}

	
	.close{
		position:absolute;
		height:20px;
		width:20px;
		border-radius:50%;
		border-color:#fff;
		background:#fff;
		box-shadow:6px 6px 29px -4px rgba(0,0,0,1.5); 
		margin-left:230px;
		margin-top:8px;
		}
label{
width:240px;
display:inline-block;
font-weight:bold;
 font-family: "Comic Sans MS", cursive, sans-serif	

}	


</style>
<title>CITY BANK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel|Fauna+One">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-md "style="background-color:#623d68;color:white;">
  <a class="navbar-brand" href="#">
  <i class="fa fa-ge" style="font-size:32px"></i>


<span>CITY BANK</span></a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon "style="color:white;font-size:10px;">click</span>
  </button>
  <div class="collapse navbar-collapse   justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">HOME</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view.php">VIEW CUSTOMERS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="transaction.php">TRANSACTION HISTORY</a>
      </li>    
    </ul>
  </div>  
</nav>



 <li><a href="#" class="buttons"id="buttons"><button>TRANSFER</button></a></li>
			

<!-- transfer page -->

<div class="popup">
<div class="popup-content">
<img src="images/close.png" alt="close" class="close"></br>
<h2>TRANSFER MONEY</h2>

<form onsubmit="return validate()">
<br>

<label>Beneficiary Name:</label>
<input type="text" id="unname" placeholder="name">
</br></br>

<label>Account Number:</label>:
<input type="text" id="pass" placeholder="Account Number">
</br></br>

<label>BRANCH NAME:</label>
<input type="text" id="pass" placeholder="BRANCH NAME">
</br></br>

<label>  IFSC CODE:</label>  
<input type="text"  id="pass" placeholder="IFSC CODE">
</br></br>

<label>AMOUNT:</label>
<input type="number" id="pass" placeholder="AMOUNT">


</br></br></br>

<button type="submit" class="buttons">TRANSFER</button>
</form>

</div>
</div>






<script>
document.getElementById("buttons").addEventListener("click",function(){
document.querySelector(".popup").style.display = "flex";
})

document.querySelector(".close").addEventListener("click",function(){
document.querySelector(".popup").style.display = "none";
})



 function validate()
 {
 var name = document.getElementById("unname");
 var password = document.getElementById("pass");
 
 
 
 
 
 
 
 
 
 if(name.value.trim()=="" ||password.value.trim()=="")
 {
 alert("ALL FIELDS ARE REDUIRED");
 return false;

 }
 else
 {
  alert("YOUR TRANSACTION IS SUCCESSFULLY COMPLETED");
alert("VISIT AGAIN");
 true;
 }
 }


</script>






















<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>