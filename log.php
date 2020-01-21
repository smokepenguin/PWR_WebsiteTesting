<?php
	include 'php_functions.php';
	session_start();
	$_SESSION['udanarejestracja'] = false;
	if (isset($_POST['email']))
	{

		$wszystko_OK=true;

		//Get POST variables
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		
		if(!(isProperName($_POST['firstname']))){
			$wszystko_OK=false;
		} 

		if(!(isProperName($_POST['lastname']))){
			$wszystko_OK=false;
		} 

		if(!(isProperEmail($_POST['email']))){
			$wszystko_OK=false;
		} 

		if(!(isProperPhone($_POST['phone']))){
			$wszystko_OK=false;
		} 

		if(!(isProperPassword($_POST['password']))){
			$wszystko_OK=false;
		} 

		if ($wszystko_OK==true)
				{
					$_SESSION['udanarejestracja'] = true;
					$_SESSION['s_firstname'] = $firstname;
					$_SESSION['s_lastname'] = $lastname;
					$_SESSION['s_email'] = $email;
					$_SESSION['s_password'] = $password;
					$_SESSION['s_phone'] = $phone;
					header('Location: welcome.php');				
				}	
	}	
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>smokepenguin's GitHub Site</title>
	<!---->
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- stylesheets and scripts -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/media-queries.css">
	<!-- scripts -->
	<script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js"></script>

</head>

<body>
	<div class="topnav" id="myTopnav">
	  <a href="index.php" class="active">Home</a>
	  <a href="#news">News</a>
	  <a href="#contact">Contact</a>
	  <a href="#about">About</a>
	  <a class="log" id="log_in" href="log.php">Sign in</a>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i>
	  </a>
	</div>

<div class="main">

	<h3 style="text-align: center">Sign in!</h3>
	<hr>
	<div id="response">
	    <?php
			if (isset($_SESSION['e_name']))
			{
				echo '<h3>'.$_SESSION['e_name'].'</h3>';
				unset($_SESSION['e_name']);
			}

			if (isset($_SESSION['e_email']))
			{
				echo '<h3>'.$_SESSION['e_email'].'</h3>';
				unset($_SESSION['e_email']);
			}

			if (isset($_SESSION['e_phone']))
			{
				echo '<h3>'.$_SESSION['e_phone'].'</h3>';
				unset($_SESSION['e_phone']);
			}

			if (isset($_SESSION['e_password']))
			{
				echo '<h3>'.$_SESSION['e_password'].'</h3>';
				unset($_SESSION['e_password']);
			}
		?>		
	</div>
		
	<section>
		<form method="post">
		    <label for="fname">First Name</label>
		    <input type="text" name="firstname" placeholder="Your name.." >

		    <label for="lname">Last Name</label>
		    <input type="text" name="lastname" placeholder="Your last name.." >
	
		    <label for="email">E-mail</label>
		    <input type="text" name="email" placeholder="Your e-mail.." >

		    <label for="phone">Phone number</label>
		    <input type="text" name="phone" placeholder="Your phone number.." >

			<label for="password">Password</label>
		    <input type="password" name="password" placeholder="Your password.." >

		    <input id="submit_form" type="submit" value="Submit">
	    </form>

	</section>
	
<!-- END MAIN -->
</div>

	<div class="footer">
	  <p>Made by Mariusz Granda</p>
	</div> 
	
	<!-- scripts -->
	<script src="js/script.js"></script>
	<script src="js/slides.js"></script>
</body>

</html>