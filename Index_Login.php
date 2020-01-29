<?php

if(isset($_POST["BMR"]))   {  
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
}

$DailyCal = 500;

?>

<!-----------------------------------------------------------------PHP Above------------------------------------------------------------------------>
<!-----------------------------------------------------------------HTML Blow------------------------------------------------------------------------>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style>
body {
  background: url("Images/Home.jpeg");
  background-repeat: no-repeat;
  background-size: 100%;
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
  width: 45%;
  padding-top: 90px;
  padding-left: 10%;
  height: 300px;
}

.columnworkout {
  float: left;
  width: 45%;
  padding-top: 90px;
  padding-left: 5%;
  height: 300px; /* Should be removed. Only for demonstration */
}

</style>
</head>
<body>
  <!-- start top nav bar   -->
	<div class="topnav">
    <a style="color: White; pointer-events: none; padding-right: 20%; width: 14%">Gain&Lose</a>
    <a>Home</a>
    <a class="active" href="Foodplan.php">Food Cal</a>
    <a href="#contact">Workout Plan</a>
    <a href="#about">Share</a>
    <a href="#about">Market</a>
    <a href="index.php" style="float: right !important">Logout</a>
    <!-- <a href="#about" style="float: right !important">Signup</a> -->
  </div>
  <!-- end top nav bar   -->

  <!-- start with percentage graph and description   -->
  <div style="padding-top: 7%; padding-left: 20%">
  <div class="w3-light-grey w3-round-xlarge" style="width: 80%; ">
    <div class="w3-container w3-blue w3-round-xlarge" style="width:<?php if($bmr != ""){echo $DailyCal*100/$bmr."%";}else{echo "0%";}; ?>; background-color: #ff7575 !important" >
      <?php if($bmr != ""){echo round($DailyCal*100/$bmr,2)."%";}else{echo "0";}; ?>  
    </div>
  </div>
  </div>
  <center style="font-weight: bold; font-size: 20px; color: white">Your Daily Cal: <?php if($bmr != ""){echo $bmr;}else{echo "0";}; ?></center>
  <!-- end with percentage graph and description   -->

  <br>
  <div style="padding-left: 20%">
  <form method="POST" action="">
    <label>Age: </label>
    <input type = "text" class = "form-control" name = "age">Year,
    <label>Height: </label>
    <input type = "text" class = "form-control" name = "height">CM,
    <label>Male</label>
    <input type = "radio" name ="gender" value = "man"/>,
    <label>Female </label>
    <input type = "radio" name ="gender" value = "woman"/>,
    <label>Weight: </label>
    <input type = "text" class = "form-control" name = "weight">KG
    <button class = "btn btn-warning" type = "submit" name = "BMR"> Submit</button>
  </form>
  </div>

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
      <tr>
        <th style="float: left">Breakfast</th>
        <th></th>
        <th style="float: right"><a href="Foodplan.php?Ftype=B"><i class="fas fa-plus-circle"></i></a></th>
      </tr>
      <tr>
        <td>testing1</td> 
        <td>300 lb</td>
        <td style="float: right"><button>edit</button></td>
      </tr>
      <tr>
        <th style="float: left">Lunch</th>
        <th></th>
        <th style="float: right"><a href="Foodplan.php?Ftype=L"><i class="fas fa-plus-circle"></i></a></th>
      </tr>
      <tr>
        <td>testing1</td> 
        <td>300 lb</td>
        <td style="float: right"><button>edit</button></td>
      </tr>
      <tr>
        <th style="float: left">Dinner</th>
        <th></th>
        <th style="float: right"><a href="Foodplan.php?Ftype=D"><i class="fas fa-plus-circle"></i></a></th>
      </tr>
      <tr>
        <td>testing1</td>
        <td>300 lb</td> 
        <td style="float: right"><button>edit</button></td>
      </tr>
      <tr>
        <td>testing2</td> 
        <td>100 lb</td>
        <td style="float: right"><button>edit</button></td>
      </tr>
   </table>
  </div>
<!--   </a> -->

<!--   <a href="http://example.com"> -->
  <div class="columnworkout">
    <table style="width:100%; background-color: rgb(255,255,255, 0.6);;">
      <tr>
        <th style="float: left">Cardio</th>
        <th></th>
        <th></th>
        <th style="float: right"><a href="Workoutplan.php?Wtype=C"><i class="fas fa-plus-circle"></i></a></th>
      </tr>
      <tr>
        <td>Running</td>
        <td></td> 
        <td>60 mins</td>
        <td style="float: right"><button>edit</button></td>
      </tr>
      <tr>
        <td>Biking</td> 
        <td></td>
        <td>60 mins</td>
        <td style="float: right"><button>edit</button></td>
      </tr>
      <tr>
        <th style="float: left">Anaerobic</th>
        <th></th>
        <th></th>
        <th style="float: right"><a href="Workoutplan.php?Wtype=S"><i class="fas fa-plus-circle"></i></a></th>
      </tr>
      <tr>
        <td>Weight Lifting</td>
        <td>50 lb</td>
        <td>20 times</td> 
        <td style="float: right"><button>edit</button></td>
      </tr>
   </table>
  </div>
<!--   </a> -->
  <!-- start foodplan and workplan button bar   -->

</body>
</html>

