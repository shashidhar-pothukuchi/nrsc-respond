<?php

	require_once("session.php");
	
	require_once("class.user.php");
	$auth_user = new USER();
	
	$user_id = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>nrsc</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li class="menu-has-children"><a href="#">Masters</a>
                <ul>
                  <li><a href="index1.php">Colleges</a></li>
                  <li><a href="index2.php">Universities</a></li>
                  <li><a href="#">Departments</a></li>
                  <li><a href="#">Roles</a></li>
                  <li><a href="#">Documents</a></li>
				  <li><a href="#">Designations</a></li>
				  <li><a href="#">Milestones</a></li>
				  <li><a href="#">Committee</a></li>
				  <li><a href="centre.php">Centre</a></li>
				  <li><a href="#">Experts</a></li>
                </ul>
              </li>
        <li class="menu-has-children"><a href="#">Proposals</a>
                <ul>
                  <li><a href="#">New Proposal</a></li>
                  <li><a href="#">Re-Submit</a></li>
				  </ul>
              </li>
           <li class="menu-has-children"><a href="#">Projects</a>
                <ul>
                  <li><a href="#">Proi. Documents</a></li>
                  <li><a href="#">Proi. Milestones</a></li>
                  <li><a href="#">Progress</a></li>
				   </ul>
              </li>
          <li class="menu-has-children"><a href="">Reports</a>
            
              
                <ul>
                  <li><a href="#">Proposal</a></li>
                  <li><a href="#">Proposal Status</a></li>
                  <li><a href="#">College Proposals</a></li>
                  <li><a href="#">On Going Proposals</a></li>
                  <li><a href="#">Projectwise Milestones</a></li>
               
              <li><a href="#">Proposals Approved</a></li>
              
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
		  <li><a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to NRSC</h1>
      <h2>&nbsp;</h2>
    <a href="#about" class="btn-get-started">Get Started</a>    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

         

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  
  

</body>
</html>

