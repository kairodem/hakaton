<!DOCTYPE html>
<html>
<head>
	<title>Mawhibah | A social network for talented & skilled people</title>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css?<?php echo rand(); ?>">
	<link rel="stylesheet" type="text/css" href="assets/css/reset.css?<?php echo rand(); ?>">
	<script type="text/javascript" src="assets/scripts/jquery.js?<?php echo rand(); ?>"></script>
	<script type="text/javascript" src="assets/scripts/app.js?<?php echo rand(); ?>"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
</head>
<body>
	<div class="contentTop" id="ct">
		<div class="header">
			<div class="wrapper">
				<center><div class="logo"><h1>logo</h1></div></center>
			</div>
		</div>
		<center>
			<div class="midCont">
				<div class="left">
					<h2>Title Goes Here</h2><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="right">
					<div class="form">
						<ul>
							<li id="l" class="unfocus" onclick="showSI()">Sign in</li>
							<li id="r" class="" onclick="showSU()">Sign up</li>
						</ul>
						<div class="formrest" id="frmrst">
							<form id="signup" class="">
								<input type="text" name="fname" placeholder="First name"><br>
								<input type="text" name="lname" placeholder="Last name"><br>
								<input type="email" name="email" placeholder="Email"><br>
								<input type="submit" value="Sign up" id="btnsubmit">
							</form>
							<form id="signin" class="hidden">
								<input type="email" name="email" placeholder="Email"><br>
								<input type="password" name="password" placeholder="Password"><br>
								<input type="submit" value="Sign in" id="btnsubmit">
							</form>
						</div>
					</div>
				</div>
			</div>
			<h3 id="abt">About us</h3><br>
			<div class="downarr" onclick="slide()">
				<img src="assets/img/da.svg" width="30">
			</div>
		</center>
	</div>


	<div class="contentTop hidden" id="cd">
		<div class="header">
			<div class="wrapper">
				<center><div class="logo"><h1>logo</h1></div></center>
			</div>
		</div>
		<center>
			<div class="midCont">
				<div class="aboutUs">
					<h2>About</h2><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
			<div class="arrowone" style="display: inline-block; margin-right: 10px;">
				<h3 id="abt">Features</h3><br>
				<div class="downarr" onclick="features()">
					<img src="assets/img/da.svg" width="30">
				</div>
			</div>
			<div class="arrowtwo" style="display: inline-block;">
				<h3 id="hom">Home</h3><br>
				<div class="uparr" onclick="unslide()">
					<img src="assets/img/da.svg" width="30">
				</div>
			</div>
			
		</center>
	</div>


	<div class="contentTop hidden" id="cx">
		<div class="header">
			<div class="wrapper">
				<center><div class="logo"><h1>logo</h1></div></center>
			</div>
		</div>
		<center>
			<div class="midCont">
				<div class="aboutUs">
					<h2>Features</h2><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
			<div class="arrowtwo" style="display: inline-block;">
				<h3 id="hom">About</h3><br>
				<div class="uparr" onclick="abt()">
					<img src="assets/img/da.svg" width="30">
				</div>
			</div>
			
		</center>
	</div>
</body>
</html>