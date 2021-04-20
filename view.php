<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>

table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
text-align: left;
 font-family: 'Fauna One', serif;
}
th {
background-color: #67506a;
color: white;
 font-family: 'Fauna One', serif;
}
tr:nth-child(even) {background-color: #f2f2f2}
h2{
	padding:50px;
	text-align:center;
	

}
button {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

button:hover {
  background-color: #008CBA;
  color: white;
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

<h2>CUSTOMERS DETAILS</h2>
<table class="table table-bordered ">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">NAME</th>
      <th scope="col">ACCOUNT NUMBER</th>
	  <th scope="col">EMAIL</th>
      <th scope="col">CURRENT BALANCE</th>
	  <th scope="col">TRANSFER MONEY</th>

	  </tr>
  </thead>
 
  
 
<?php
$conn = mysqli_connect("localhost", "root", "", "banking system");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `bank`";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo 	"<tr>
			<td>" . $row["S.NO"]. "</td>
			<td>" . $row["NAME"] . "</td>
			<td>" . $row["ACCOUNT NUMBER"] . "</td>
			<td>". $row["EMAIL"]. "</td>
			<td>". $row["CURRENT BALANCE"]. "</td>
			<td><button   id=myButton>transfer</button></td>
		</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>


</tbody>
</table>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "transfermoney.php";
    };
</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>