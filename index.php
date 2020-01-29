<?php



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

<style>
body {
  background: url("Images/index.jpg");
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
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
}

</style>
</head>
<body>
  <!-- start top nav bar   -->
	<div class="topnav">
    <a style="color: White; pointer-events: none; padding-right: 20%; width: 14%">Gain&Lose</a>
    <a class="active" href="index.php">Home</a>
    <a href="#news">Food Cal</a>
    <a href="#contact">Workout Plan</a>
    <a href="#about">Share</a>
    <a href="#about">Market</a>
    <a href="Login.php" style="float: right !important">Login</a>
    <a href="#about" style="float: right !important">Signup</a>
  </div>
  <!-- end top nav bar   -->

  <!-- start with search bar and description   -->
  <div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
  </div>
  <!-- end with search bar and description   -->

  <!-- start bottom nav bar   -->
  <div class="bottomnav">
    <a href="#home" style="padding-left: 43%">About</a>
    <a href="#news">Contact us</a>
    <a href="#contact">Locations</a>
  </div>
  <!-- start bottom nav bar   -->


</body>
</html>
