<!DOCTYPE HTML>
<html>
<head>
	<title>
		ShopFreak
	</title>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--Initialising css folders-->
<link rel="stylesheet" href="css/materialize.css">
<!--Initialising javascript folders-->
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript"src="js/materialize.min.1.js"></script>
<!--Initialising icon font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Styling header tags-->
<style>
h1,h2,h3,h4,h5,h6{
font-family:Freestyle Script
}
</style>
<!--Initialisations end-->
<body>
  <div id="upar" class="scrollspy" ></div>
  <nav>
    <div class="col s12 m12 l12 nav-wrapper black">
      <a href="landing.html" class="brand-logo"><img src="img/ISTE.png" style="width:60px; height:60px;"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
	    <li><div style="width:500px"><img src="img/SFREAK.png" style="height:70px;"></div></li>
        <li><a href="mens.html">Men</a></li>
        <li><a href="women.html">Women</a></li>
        <li><a href="accessories.html">Accessories</a></li>
		<li><a class="modal-trigger" href="#login">Login</a></li>
		<li><a class="modal-trigger" href="#signup">SignUp</a></li>
      </ul>
    </div>
  </nav>
  <!--<div><hr><center><h1>ShopFreak</h1></center><hr></div>-->
    <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/r1.jpg">
        <div class="caption left-align"></div>
      </li>
      <li>
        <img src="img/r2.jpg">
        <div class="caption left-align"></div>
      </li>
      <li>
        <img src="img/r3.jpg">
        <div class="caption right-align"></div>
      </li>
      <li>
        <img src="img/r4.jpg">
        <div class="caption center-align"></div>
      </li>

    </ul>
  </div>
   <div class="fixed-action-btn tooltipped" data-position="left" data-delay="50" data-tooltip="Back to Top"   style="bottom: 14px;">
		<a class="btn-floating btn-large black" href="#upar">
			<i class="large material-icons">navigation</i>
		</a>
	</div>
	<div class="fixed-action-btn" style="bottom: 14px; right:95%;">
		<a class="btn-floating btn-large black">
			<i class="large material-icons">star</i>
		</a>
		<ul>
		    <li><a class="btn-floating black tooltipped modal-trigger" data-position="right" data-delay="50" data-tooltip="Developers" href="#developers"><i class="large material-icons">perm_identity</i></a></li>
			<li><a class="btn-floating black tooltipped modal-trigger" data-position="right" data-delay="50" data-tooltip="Cart" href="#cart"><i class="large material-icons">shopping_cart</i></a></li>
		</ul>
	</div>
	
  <div class="row">
    <div class="col s5 m5 l5 offset-s1 offset-m1 offset-l1">
      <div class="card large">
        <div class="card-image">
          <a href="mens.html"><img src="img/1.jpg"></a>
        </div>
      </div>
    </div>
	<div class="col s5 m5 l5">
      <div class="card large">
        <div class="card-image">
          <a href="women.html"><img src="img/2.jpg"></a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1">
      <div class="card large">
        <div class="card-image">
          <a href="accessories.html"><img src="img/3.jpg"></a>
        </div>
      </div>
    </div>
  </div>
  <div id="cart" class="modal">
	<div class="modal-content center blue-grey lighten-4 black-text">
		<h2>Your Cart </h2>
	</div>
	 <div class="modal-footer">
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
  </div>
  </div>
  
  <div id="developers" class="modal">
	<div class="modal-content center blue-grey lighten-4 black-text">
		<h2>Developers</h2>
		<div class="row">
			<div class="col s6 m6 l6">
				<img src="img/anmol.jpg" width="300" height="200" style=" width: 200px;border-radius:50%;height:200px;">
				<div class="desc" style="padding: 15px;
					text-align: center;color:white;">Anmol Agarwal
				</div>
			</div>
			<div class="col s6 m6 l6">
				<img src="img/anmol.jpg" width="300" height="200" style=" width: 200px;border-radius:50%;height:200px;">
				<div class="desc" style="padding: 15px;
				text-align: center;color:white;">Anmol Agarwal
				</div>
			</div>
		</div>
		<img src="img/anmol.jpg" width="300" height="200" style=" width: 200px;border-radius:50%;height:200px;">
		<div class="desc" style="padding: 15px;
			text-align: center;color:white;">Anmol Agarwal
		</div>
		<img src="img/anmol.jpg" width="300" height="200" style=" width: 200px;border-radius:50%;height:200px;">
		<div class="desc" style="padding: 15px;
			text-align: center;color:white;">Anmol Agarwal
		</div>
		<img src="img/anmol.jpg" width="300" height="200" style=" width: 200px;border-radius:50%;height:200px;">
		<div class="desc" style="padding: 15px;
			text-align: center;color:white;">Anmol Agarwal
		</div>
		<img src="img/anmol.jpg" width="300" height="200" style=" width: 200px;border-radius:50%;height:200px;">
		<div class="desc" style="padding: 15px;
			text-align: center;color:white;">Anmol Agarwal
		</div>
			 		
	</div>
	 <div class="modal-footer">
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
  </div>
  </div>
 <div id="login" class="modal">
	<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: mens.html");
		exit;
	}
	
	$error = false;
	
	if( isset($_POST['btn-login']) ) {	
		
		// prevent sql injections/ clear user invalid inputs
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		// prevent sql injections / clear user invalid inputs
		
		if(empty($email)){
			$error = true;
			$emailError = "Please enter your email address.";
		} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		}
		
		if(empty($pass)){
			$error = true;
			$passError = "Please enter your password.";
		}
		
		// if there's no error, continue to login
		if (!$error) {
			
			$password = hash('sha256', $pass); // password hashing using SHA256
		
			$res=mysql_query("SELECT userId, userName, userPSW FROM register WHERE userEmail='$email'");
			$row=mysql_fetch_array($res);
			$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
			
			if( $count == 1 && $row['userPass']==$password ) {
				$_SESSION['user'] = $row['userId'];
				header("Location: mens.html");
			} else {
				$errMSG = "Incorrect Credentials, Try again...";
			}
				
		}
		
	}
	
?>
	<div class="modal-content center black-text">
		<h2>Login</h2>
		<form autocomplete="off" method="post" action="home.html">
			<div class="row">
				<div class="input-field col s10 offset-s1">
					<input type="email" id="id" name="email" class="validate" placeholder="Your Email" maxlength="80" />
					<label for="id">Enter ID</label>
					<span><?php echo $emailError; ?></span>
				</div>
				<div class="input-field col s10 offset-s1">
					<input type="password" id="pass" name="pass" class="validate" placeholder="Your Password" maxlength="20" />
					<label for="pw">Enter Password</label>
					<span><?php echo $passError; ?></span>
				</div>
			</div>
			<br>
			<div class="row">
				<?php
			if ( isset($errMSG) ) {
				
				?>
				<span><?php echo $errMSG; ?></span>
                <?php
			}
			?>
			</div>
			<div class="row">
				<button class="btn large waves-effect waves-light col s2 offset-s5" id="btn-login" type="submit" name="btn-login">Submit
				<i class="material-icons right">send</i>
				</button>
			</div>
		</form>
	</div>
	 <div class="modal-footer">
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
  </div>
  <?php ob_end_flush(); ?>
</div>
<div id="signup" class="modal">
  <?php
	ob_start();
	session_start();
	if( isset($_SESSION['user'])!="" ){
		header("Location: mens.html");
	}
	include_once 'dbconnect.php';

	$error = false;

	if ( isset($_POST['btn-signup']) ) {
		
		// clean user inputs to prevent sql injections
		$name = trim($_POST['name']);
		$name = strip_tags($name);
		$name = htmlspecialchars($name);
		
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		
		// basic name validation
		if (empty($name)) {
			$error = true;
			$nameError = "Please enter your full name.";
		} else if (strlen($name) < 3) {
			$error = true;
			$nameError = "Name must have atleat 3 characters.";
		} else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
			$error = true;
			$nameError = "Name must contain alphabets and space.";
		}
		
		//basic email validation
		if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		} else {
			// check email exist or not
			$query = "SELECT userEmail FROM users WHERE userEmail='$email'";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if($count!=0){
				$error = true;
				$emailError = "Provided Email is already in use.";
			}
		}
		// password validation
		if (empty($pass)){
			$error = true;
			$passError = "Please enter password.";
		} else if(strlen($pass) < 6) {
			$error = true;
			$passError = "Password must have atleast 6 characters.";
		}
		
		// password encrypt using SHA256();
		$password = hash('sha256', $pass);
		
		// if there's no error, continue to signup
		if( !$error ) {
			
			$query = "INSERT INTO register(userName,userEmail,userPass) VALUES('$name','$email','$password')";
			$res = mysql_query($query);
				
			if ($res) {
				$errTyp = "success";
				$errMSG = "Successfully registered, you may login now";
				unset($name);
				unset($email);
				unset($pass);
			} else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";	
			}	
				
		}
		
	}
?>
  <div class="modal-content center black-text">
		<h2>Sign Up</h2>
		<form class="col s12" autocomplete="off" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<div class="row">
				<div class="input-field col s10 offset-s1">
					<input type="text" id="name" name="name" class="validate" placeholder="Enter Name" maxlength="60" />
					<label for="name">Enter Name</label>
					<span><?php echo $nameError; ?></span>
				</div>
				<div class="input-field col s10 offset-s1">
					<input type="text" id="email" name="email" class="validate" placeholder="Enter Email" maxlength="80" />
					<label for="email">Enter Email ID</label>
					<span><?php echo $emailError; ?></span>
				</div>
				<div class="input-field col s10 offset-s1">
					<input type="password" id="pass" name="pass" class="validate" placeholder="Enter Password" maxlength="20" />
					<label for="pw">Enter Password</label>
					<span><?php echo $passError; ?></span>
				</div>
			</div>
			<br>
			<div>
			<?php
			if ( isset($errMSG) ) {
				
				?>
				<span></span> <?php echo $errMSG; ?>
                <?php
			}
			?>
            </div>
			<div class="row">
				<button class="btn large waves-effect waves-light col offset-s5" id="btn-signup" style="margin-top:3%" type="submit" method="post" name="btn-signup">Submit
				<i class="material-icons right">send</i>
				</button>
			</div>
		</form>
	</div>
	 <div class="modal-footer">
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
  </div>
  <?php ob_end_flush(); ?>
</div>
  
  <footer class="page-footer grey darken-3">
          <div class="container">
            <div class="row">
              <div class="col l2 offset-l1">
                <h5 class="white-text">Digital Partner</h5>
              </div>
              <div class="col l2 offset-l6">
                <h5 class="white-text">Media Partner</h5>
              </div>
            </div>
			<div class="footer-copyright">
            <div class="center" style="margin-left:35%">Indian Society for Technical Education (VITU) &copy; 2016 Copyright</div>
          </div>
			</div>			
          </div>
    </footer>
  <script>
    $(document).ready(function(){
      $('.slider').slider();
    });
  </script>
  <script>
	// Pause slider
	$('.slider').slider('pause');
	// Start slider
	$('.slider').slider('start');
	// Next slide
	$('.slider').slider('next');
	// Previous slide
	$('.slider').slider('prev');
  </script>
  <script>
$(document).ready(function(){
    $('.modal-trigger').leanModal();
  });
</script> 
  <script>
	
  $(document).ready(function(){
    $('.scrollspy').scrollSpy();
  });
  </script>
</body>
</html>