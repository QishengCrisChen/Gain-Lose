<?php

if(isset($_POST["BMR"]))   
{  
$age = $_POST["age"];
$height = $_POST["height"];
$gender = $_POST["gender"];
$weight = $_POST["weight"];
$bmr;
if ($gender == "man") {
$bmr = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
}
else {
$bmr = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
}
/*echo $bmr;*/
}

?>

<!-----------------------------------------------------------------PHP Above------------------------------------------------------------------------>
<!-----------------------------------------------------------------HTML Blow------------------------------------------------------------------------>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
body {
  background: url("Images/index2.jpg");
  background-repeat: no-repeat;
  background-size: 100% ;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: rgba(0, 0, 0, 0.5);
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 20px 20px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  border-bottom: 3px solid red;
}

.topnav a.active {
  border-bottom: 3px solid red;
}   

.bottomnav {
  overflow: hidden;
/*  background-color: rgb(242, 242, 242); */
  position: fixed;
  bottom: 0;
  width: 100%;
  height: 6%;
}

.bottomnav a {
  padding: 20px 20px;
  color: rgb(89, 89, 89);
  text-decoration: none;
  font-size: 17px;
}

table{
  border-radius: 10px;
  border-collapse: collapse;
}

th, td {
  padding: 15px;
}

.columnfood {
  float: left;
  width: 90%;
  padding-top: 10%;
  padding-left: 10%;
  height: 300px;
}

.columncart {
  float: left;
  width: 50%; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #ff7575;
  border-right: none;
  padding: 5px;
  height: 40px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #434343;
}

.searchButton {
  width: 40px;
  height: 40px;
  border: 1px solid #ff7575;
  background: #ff7575;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 15%;
  left: 50%;
  transform: translate(-50%, -50%);
}


</style>
</head>
<body>
  <!-- start top nav bar   -->
	<div class="topnav">
    <a style="color: White; pointer-events: none; padding-right: 20%; width: 14%">Gain&Lose</a>
    <a class="active" href="Index_Login.php">Home</a>
    <a>Food Cal</a>
    <a href="#contact">Workout Plan</a>
    <a href="#about">Share</a>
    <a href="#about">Market</a>
    <span class="closebtn" style="color: #f2f2f2; font-size: 17px; position: absolute; top: 20px; left: 90%" onclick="openNav()">
      <i class="fas fa-bars"></i>
      <text style="background-color: #ff7575; padding: 3px; border-radius: 30%; font-size: 15px;">1</text>
    </span>
    <a href="index.php" style="float: right !important">Logout</a>
    <!-- <a href="#about" style="float: right !important">Signup</a> -->
  </div>
  <!-- end top nav bar   -->

  <!-- start with search bar and description   -->
  <div class="wrap">
   <div class="search">
      <input id="myWorkoutInput" type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
  </div>
  <!-- end with search bar and description   -->

  <!-- start bottom nav bar   -->
  <div class="bottomnav">
    <a href="#home" style="padding-left: 43%; color: white">About</a>
    <a href="#news" style="color: white">Contact us</a>
    <a href="#contact" style="color: white">Locations</a>
  </div>
  <!-- start bottom nav bar   -->

  <!-- start foodplan and workplan button bar   -->
<!--   <a href="http://example.com"> -->
  <div class="columnfood">
    <table style="width:100%; background-color: rgb(255,255,255, 0.6);">
      <thead>
      <tr>
        <th></th>
        <th>Workout Name</th>
        <th>Calories/Hours</th>
        <th>Hours</th>
        <th></th>
      </tr>
      </thead>
      <tbody id="myFoodTable">
      <tr>
        <td><center><img src="Images/Running.png" height="45" width="45"></center></td>
        <td><center>Running</center></td>
        <td><center>100</center></td>
        <td><center><input type="text" name="" style="width: 50px"></center></td>
        <td style="float: right"><button><i class="fas fa-plus-circle"></i></button></td>
      </tr>
      <tr>
        <td><center><img src="Images/Swim.png" height="45" width="45"></center></td>
        <td><center>Swiming</center></td>
        <td><center>178</center></td>
        <td><center><input type="text" name="" style="width: 50px"></center></td>
        <td style="float: right"><button><i class="fas fa-plus-circle"></i></button></td>
      </tr>
      </tbody>
   </table>
  </div>
<!--   </a> -->

  <div id="mySidebar" style="display:none;right:0; width: 15%; position: absolute; top: 0px" class="w3-sidebar w3-bar-block w3-card w3-animate-right">
    <a class="w3-bar-item w3-button w3-large" onclick="closeNav()" style="height:70px">×</a>
    <div class="row">
      <div class="columncart">
        <center><img src="Images/Swim.png" height="100" width="100"></center> 
      </div>
      <div class="columncart" style="padding: 15px">
        <label>Swiming</label><br>
        <text>Hours: 1.5</text><br>
        <button><i class="fas fa-trash-alt"></i> Delete</button>
      </div>
    </div>
    <!-- <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a> -->
    <center><button>Done</button></center>
  </div>

</body>
</html>

<script>
$(document).ready(function(){
  $("#myWorkoutInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myFoodTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


function openNav() {
  document.getElementById("mySidebar").style.display = "block";;
}

function closeNav() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>