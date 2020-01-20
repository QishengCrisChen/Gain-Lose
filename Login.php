<?php

if(isset($_POST["Loginbutton"]))   
{  
 if(!empty($_POST["uname"]) && !empty($_POST["psw"]))
 {
  if($_POST["uname"] == "chenqisheng" && $_POST["psw"] == "testing")   
  {  
   if(!empty($_POST["remember"]))   
   {  
    setcookie ("uname",$_POST["uname"]);  
    setcookie ("psw",$_POST["psw"]);
   }  
   else  
   {  
    if(isset($_COOKIE["uname"]))   
    {  
     setcookie ("uname","");  
    }  
    if(isset($_COOKIE["psw"]))   
    {  
     setcookie ("psw","");  
    }  
   }  
   header("location:Index_Login.php"); 
  }  
  else  
  {  
   $message = "Invalid Login";  
  } 
 }
 else
 {
  $message = "Both are Required Fields";
 }
}  

?>


<!-----------------------------------------------------------------PHP Above------------------------------------------------------------------------>
<!-----------------------------------------------------------------HTML Blow------------------------------------------------------------------------>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

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

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  /*display: inline-block;*/
  border-radius: 5px;
  border: 2px solid #ff7575;
  box-sizing: border-box;
}

button {
  border-radius: 5px;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

  <!-- start top nav bar -->
  <div class="topnav">
    <a style="color: White; pointer-events: none; padding-right: 20%; width: 14%">Gain&Lose</a>
    <a href="Index.php" style="float: right !important">Back to Home</a>
  </div>
  <!-- end top nav bar -->

<!-- start login format -->
<form method="POST" action="">
  <div class="imgcontainer">
    <img src="Images/login.png" alt="Avatar" style="width: 20%" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <!-- <input type="text" placeholder="Enter Username" name="uname" required> -->
    <input name="uname" type="text" value="<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"]; } ?>" class="form-control" required/>  

    <label for="psw"><b>Password</b></label>
    <!-- <input type="password" placeholder="Enter Password" name="psw" required> -->
    <input name="psw" type="password" value="<?php if(isset($_COOKIE["psw"])) { echo $_COOKIE["psw"]; } ?>" class="form-control" required/>
        
    <button type="submit" name="Loginbutton">Login</button>
    <label>
      <!-- <input type="checkbox" checked="checked" name="remember"> Remember me -->
      <input type="checkbox" name="remember" <?php if(isset($_COOKIE["uname"])) { ?> checked <?php } ?> /> Remember me 
    </label>
  </div>
  <!-- end login format -->


  <!-- start cancel button -->
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" onclick="location.href='index.php';" class="cancelbtn">Cancel</button>
    <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
  </div>
</form>
<!-- end cancel button -->

</body>
</html>

