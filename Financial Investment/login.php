<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Portfolio Secure</title>
   <link rel="stylesheet" type="text/css" href="style.css"> 
</head>

<body>
<header>
      <nav>
		<div class ="main-wrapper">
		<ul>
			<li><a href="index.php">PORTFOLIO SECURE</a></li>
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php">About</a></li>
			<li><a href="index.php">Contact</a></li>

		</ul>

		  <div class ="nav-login">
			<?php
			 if (isset($_SESSION['userId'])) {
 		 	echo '<form action="includes/logout.inc.php" method="post">
				<button type="submit" name="logout-submit">Logout</button></form>';
 		 } 
 		 else{
 		 	echo '<form action="includes/login.inc.php" method ="post">
				<input type="text" name="mailuid" placeholder="Username/E-mail..">

					<input type="password" name="pwd" placeholder="Password..">

					<button type="submit" name="login-submit">Login</button>
                   
				  </form>
				   <a href="signup.php">SIGNUP</a>
				';
 		 }
			?>
		
			
				
	</div>

   </div>
  </nav>
</header>
