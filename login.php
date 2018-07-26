<!DOCTYPE html>

<html>
<head>
<title>
Login | MGX
</title>

<!--Added the nav bar-->
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="CSSFiles//LogRegSetChange.css">

</head>

<script  src="JSFiles//login.js"></script>
<style>
body{
background-repeat: no-repeat;
background-position: 90% -90%;
background-size: 500px 400px;
background-image: url('loginreg.png');

</style>
<body>


<!--added the navbar codes-->
<div class="content">
<!--ADDED THIS STYLING HERE FOR THE NAV BAR FOR BETTER POSITIONING -->
<nav class="navbar navbar-expand-sm bg-light navbar-light" style="padding-bottom: 1px; height: 51px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <ul class="navbar-nav">
  <li class="nav-item active">
                <a href="http://marsgx.com"><img src="logo.png" style="width:60px; height:43px;"></img></a>
        </li>
    <li class="nav-item active">
      <a class="nav-link" href="http://www.marsgx.com">MarsGravityX</a>
    </li>
    &nbsp;&nbsp;
    <li class="nav-item active">
      <a class="nav-link" href="about.html">About Us</a>
    </li>&nbsp;
    <li class="nav-item active">
      <a class="nav-link" href="contact.html">Contact Us</a>
    </li>&nbsp;
    <li class="nav-item active">
      <a class="nav-link disabled" href="termsconditions.html" style="width: 160px;">Terms& Conditions</a>
    </li>&nbsp;
  <li class="nav-item active">
      <a class="nav-link disabled" href="privacypolicy.html">PrivacyPolicy</a>
    </li>
 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
    <li class="nav-item active">
      <a class="nav-link" href="registration.php"><i><b>SignUp</b></i></a>
    </li>
  </ul>
</nav>  
</div>

<div class = "login"> 
<form action="" method="post" name="login" onSubmit="return validateform();" style="height: 147px" class="auto-style1">
&nbsp;&nbsp; <br>
<!--placed login title inside form-->
<p class ="Login">
<h2> Log In </h2>
</p>
<h5>Username:</h5>&nbsp;<input type="username" name="username" id="username" placeholder="Username" class="auto-style9" style="width: 329px; height: 30px;" /><br>
  <br>
<h5>Password:</h5>&nbsp;<input type="password" name="password" id="password" placeholder="Password" class="auto-style6" style="width: 328px; height: 30px;" /><br>
  <br>
<input name="submit" type="submit" value="Login" style="background:skyblue; border: #800000; width: 150px; color: black; height: 36px; font-family: 'Georgia', 'Arial Narrow', Arial, sans-serif; text-decoration: none; text-transform: capitalize; font-style: normal; font-size: small; font-weight: bold;" />
  <br>
  <br>
</form>
<br>  
</div>
</body>
</html>
