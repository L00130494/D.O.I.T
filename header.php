<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>DevOps IT</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="DevOps IT project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/combined.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>+353-9174-12345</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>Email: info.admissions@devops.it</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div>
								<a href="index.php"><img src="images/logo.png" alt="" height="80px"></a>
							</div>
							<nav class="main_nav_contaner ml-5">
								<ul class="main_nav">
									<li class=""><a href="index.php">Home</a></li>
									
									<li><a href="courseSelection.php">Courses</a></li>
									<li><a href="time-table.php">Timetable</a></li>
									<!--<li><a href="#">News</a></li>-->
									<li><a href="contact.php">Contact</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="registration.php">Register</a></li>
									<li><a href="login.php">Log In</a></li>
									<li><a href="logOut.php">Log Out</a></li>
									<?php 
										if(isset($_SESSION['userID']) == TRUE) 
										{
											echo "<li><a href='#'>Username: ";
											echo $_SESSION['userID'];
											echo "</a></li>";
										}
										else{
											echo "";
										}
									?>

									<!-- <li> <a href="#">Username: <?php echo $_SESSION['userID']?> </a>  </li> -->
								
								</ul>
								<!-- Hamburger -->

							<!--	<div class="shopping_cart"><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a></div>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>-->
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<!-- <div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div> -->
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">Home</a></li>
				<li class="menu_mm"><a href="courseSelection.php">Courses</a></li>
				<li class="menu_mm"><a href="time-table.php">Timetable</a></li>
				<li class="menu_mm"><a href="#">News</a></li>
				<li class="menu_mm"><a href="contact.php">Contact</a></li>
				<li class="menu_mm"><a href="about.php">About</a></li>
			</ul>
		</nav>
	</div>


<!-- Framwork template Header End -->