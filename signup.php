<?php include('functions.php'); ?>
<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<title>STATE HOUSE GIRLS HIGH SCHOOL</title>
	<link rel="icon" type="image/ico" href="shghs.png">
	<link rel="shortcut icon" type="image/x-icon" href="http://vevs.website/web-demo/car-parking-website/app/web/upload/medium/favicon-28.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script language="javascript" type="text/javascript">
		<!--
		function checkPass()
		{
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('confirmPassword');
    var message = document.getElementById('confirmMessage');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if(pass1.value == pass2.value)
    {
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else
    {
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  
	//-->
	</script> 
	<style type="text/css">
	body
		{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
            url(images/FrontSchool.jpg);
            height: 100vh;
            background-size: cover;

		}
		.avatar
		{
			width: 90px;
			height: 90px;
			border-radius: 50%;
			position: absolute;
			top: -50px;
			left: calc(50% - 50px);
		}
		.box
		{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			width: 400px;
			padding: 40px;
			background: rgba(0,0,0,.8);
			box-sizing: border-box;
			box-shadow: 0 15px 25px rgba(0,0,0,.5);
			border-radius: 10px;

		}
		.box h2
		{
			margin: 0 0 30px;
			padding: 0;
			font-family: 'Calligraffitti';
			color: #fff;
			text-align:center;

		}
		.box .inputBox
		{
			position: relative;

		}
		.box .inputBox input
		{
			width: 100%;
			padding: 10px 0;
			font-size: 16px;
			color: #fff;
			letter-spacing: 1px;
			margin-bottom: 10px;
			border: none;
			border-bottom: 1px solid #fff;
			outline: none;
			background: transparent;
		}
		.box .inputBox label
		{
			position: absolute;
			top:0;
			left: 0;
			padding: 10px 0;
			font-size: 16px;
			color: #fff;
			pointer-events: none;
			transition: .5s;
		}
		.box .inputBox input:focus ~ label,
		.box .inputBox input:valid ~ label
		{
			top: -10px;
			left: 0;
			color: #03a9f4;
			font-size: 12px;
		}
		.box input[type="submit"]
		{
			background: transparent;
			border: none;
			outline: none;
			color: #fff;
			background: #03a9f4;
			padding: 10px 20px;
			cursor: pointer;
			border-radius: 5px;

		}
		.box input[type="reset"]
		{
			background: transparent;
			border: none;
			float: right;
			outline: none;
			color: #fff;
			background: #03a9f4;
			padding: 10px 20px;
			cursor: pointer;
			border-radius: 5px;

		}
		.box .radio
		{
			position: bottom;
			font-style: oblique;
			top:0;
			left: 0;
			padding: 10px 0;
			font-size: 16px;
			color: #fff;
		}
		.box .checkbox
		{
			position: bottom;
			font-family: 'Averia Libre';
			font-style: italic;
			top:0;
			left: 0;
			padding: 10px 0;
			font-size: 16px;
			color: #fff;
		}
		.box a
		{
			text-decoration: none;
			font-size: 12px;
			line-height: 20px;
			color: darkgrey;
		}
		nav
      {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100px;
         padding: 10px 100px;
         box-sizing: border-box;
         transition: .3s;
         color: #fff
      }
      nav.black
      {
           background: rgba(0,0,0,0.8);
           height: 100px;
           padding: 10px 100px;
           color: #fff;
      }
      nav ul
      {
         list-style: none;
         float: left;
         margin: 0;
         padding: 0;
         display: block;
         color: #fff;

      }
      nav ul li
      {
         list-style: none;
         color: #fff;
      }
      nav ul li a
      {
          line-height: 80px;
          color: #151515;
          padding: 12px 30px;
          text-decoration: none;
          text-transform: uppercase;
          transition: .3s;
          color: #fff;
          font-size: 20px;
      }
        nav.black ul li a
        {
         color: #fff;
        }
        nav ul li a:focus
        {
         outline: none;
        }
        nav ul li a.active 
        {
         background: #E2472F;
         color: #fff;
         border-radius: 6px;
        }
	</style>
</head>
<body>
	<div class="box">
		<img src="admin_icon.png" class="avatar">
  	<h2>ADMIN</h2>
  <form action="insert.php" method="post">
  	<div id="content">
    <div id="register">
  	<div class="inputBox">
  			<input type="text" name="username" id="username" required="">
  			<label for="username">Username</label>
  		</div>
  	<div class="inputBox">
  			<input name="email" id="email" required="">
  			<label for="email">Email</label>
  		</div>
  	<div class="inputBox">
  			<input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="">
  			<label for="password">Password</label>
  		</div>
  	<div class="inputBox">
  			<input type="password" name="confirmPassword" id="confirmPassword" onkeyup="checkPass(); return false;" required="">
            <span id="confirmMessage" class="confirmMessage"></span> 
  			<label>Re-Type Password</label>
  		</div>
  	<div class="checkbox">
      <label><input type="checkbox" name="remember" required=""> I agree to terms and conditions</label>
    </div>
  	<input type="submit" value="Register">
  	<input type="Reset" value="Reset"><br>
  </div>
</div>
  </form>
  </div>
  <div class="wrapper">
      <nav>
         <div class="logo"></div>
         <ul>
            <li><a href="Home.html">HOME</a></li>
            <li><a href="">CONTACT US</a></li>
         </ul> 
      </nav>   
    </div>
</body>
</html>
