<?php



?>


<!-----------------------------------------------------------------PHP Above------------------------------------------------------------------------>
<!-----------------------------------------------------------------HTML Blow------------------------------------------------------------------------>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

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

input, button
{
    color: #fff;
    font-family: Nunito;
    padding: 0;
    margin: 0;
    border: 0;
    background-color: transparent;
}

#cover
{
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    width: 40%;
    height: 50px;
    padding: 35px;
    margin: -83px auto 0 auto;
    background-color: #ff7575;
    border-radius: 20px;
    box-shadow: 0 10px 40px #ff7c7c, 0 0 0 20px #ffffffeb;
    transform: scale(0.6);
}

.tb
{
    display: table;
    width: 100%;
}

.td
{
    display: table-cell;
    vertical-align: middle;
}

/*form
{
    height: 96px;
}*/

input[type="text"]
{
    width: 100%;
    height: 50px;
    font-size: 60px;
    line-height: 1;
}

input[type="text"]::placeholder
{
    color: #e16868;
}

#s-cover
{
    width: 1px;
    padding-left: 35px;
}

button
{
    position: relative;
    display: block;
    width: 84px;
    height: 50px;
    cursor: pointer;
}

#s-circle
{
    position: relative;
    top: -8px;
    left: 0;
    width: 23px;
    height: 23px;
    margin-top: 0;
    border-width: 15px;
    border: 15px solid #fff;
    background-color: transparent;
    border-radius: 50%;
    transition: 0.5s ease all;
}

button span
{
    position: absolute;
    top: 40px;
    left: 30px;
    display: block;
    width: 40px;
    height: 15px;
    background-color: transparent;
    border-radius: 10px;
    transform: rotateZ(52deg);
    transition: 0.5s ease all;
}

button span:before, button span:after
{
    content: '';
    position: absolute;
    bottom: 0;
    right: 0;
    width: 45px;
    height: 15px;
    background-color: #fff;
    border-radius: 10px;
    transform: rotateZ(0);
    transition: 0.5s ease all;
}

#s-cover:hover #s-circle
{
    top: -1px;
    width: 67px;
    height: 15px;
    border-width: 0;
    background-color: #fff;
    border-radius: 20px;
}

#s-cover:hover span
{
    top: 50%;
    left: 56px;
    width: 25px;
    margin-top: -9px;
    transform: rotateZ(0);
}

#s-cover:hover button span:before
{
    bottom: 11px;
    transform: rotateZ(52deg);
}

#s-cover:hover button span:after
{
    bottom: -11px;
    transform: rotateZ(-52deg);
}
#s-cover:hover button span:before, #s-cover:hover button span:after
{
    right: -6px;
    width: 40px;
    background-color: #fff;
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
  <div>
    <h2 style="color: white">information and description</h2>
    <div id="cover">
     <form method="get" action="">
      <div class="tb">
       <div class="td"><input type="text" placeholder="Search Food Cal" required></div>
        <div class="td" id="s-cover">
          <button type="submit">
           <div id="s-circle"></div>
           <span></span>
          </button>
        </div>
      </div>
     </form>
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
