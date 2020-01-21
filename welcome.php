<?php	
	session_start();	
	if ($_SESSION['udanarejestracja'] != true)
		{
			header('Location: index.php');				
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
	  <a class="log" href="log.php">Sign in</a>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i>
	  </a>
	</div>

<div class="main">

	

	<?php 
		$firstname = $_SESSION['s_firstname'];
		$lastname = $_SESSION['s_lastname'];

		echo '<h1 id="response" style="text-align: center">';
		echo 'Welcome '.$firstname.' '.$lastname.'!';
		echo'</h1>'; 
	?>
	
	<hr>
	
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