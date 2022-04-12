<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html> -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/downloadTicket.css">
    
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Oxygen:wght@300&display=swap' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <header>
    <nav id="header-nav" class="navbar navbar-default">
    <div class="container">
    <div class="navbar-header">
    <a href="hyperloop.html" class="pull-left visible-md visible-lg visible-sm visible-xs">
    <div id="logo-img" alt="Logo image"></div>
  </a>
  <div class="navbar-brand">
    <a href="hyperloop.html"></a>
    </div>
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>

    </button>
  </div>
  <div id="collapsable-nav" class="collapse navbar-collapse">
    <ul id="nav-list" class="nav navbar-nav navbar-right">

      <li class="visible-xs active">
        <a href="hyperloop.html">
          <span class="glyphicon glyphicon-home"></span>Home
        </a>
      </li>

      <li>
            <a href="finalfeedback.php">
          <span class="glyphicon glyphicon-star" id="Help"></span>
          <br class="hidden-xs">Feedback</a>
        </li>
      

        <li>
            <a href="hyperloopHelp.html">
          <span class="glyphicon glyphicon-menu-down" id="Help"></span>
          <br class="hidden-xs">Help</a>
        </li>

        
      
  <li>
   <!-- <a href="http://localhost/login/signup.php">-->
      <!-- <a href="login.php"> -->
	  <a href="logout.php">
  <span id="signIn" class="glyphicon glyphicon-user"></span>
    <br class="hidden-xs">Logout
    </a>
</li>
  
</ul><!--#nav-list-->
</div><!--.collapse .navbar-collaps-->
</div>
  </nav>
</header>

<div id="main-content" class="container">
  <div class="jumbotron">
<div id="h1txt">
<h1> HYPERLOOP </h1>
</div>


<div id="tktxt">
   Name: <?php echo $user_data['user_name']; ?>
   <br>

   From: Navi Mumbai
   <br>

   To: Pune
   <br>

   Departure: 10:00 am
   <br>
   Seat:A
   <br>
   Row: 5
   <br>
   Pod Number: 1
   <br>
</div>
<div id="qrdiv">
<img id="qrcode" src="images/QRCode.jpg"></img>
</div>

   <!-- <a href="downloadTicket.php">
    <button id="booknow">PRINT</button>
</a> -->
<input id="printpagebutton" type="button" value="PRINT" onclick="printpage()"/>
</div><!--End of #home-tiles-->
</div><!--End of #main-content-->


<!-- <footer class="panel-footer">
  <div class="container">
    <div class="row">
    <section id="hours" class="col-sm-4">
    <span>Hours:</span><br>
    6 am to 11pm<br>
    <span>Enquiries: </span><br>
    <a href="https://virginhyperloop.com/">info@virginhyperloop.com</a>
    
    <hr class="visible-xs">
  </section>
  <section id="address" class="col-sm-4">
    <span>Address:</span><br>
    Bandra Kurla Complex
    Bandra East, Mumbai, <br>
    Maharashtra
    
   
   
   <hr class="visible-xs">
 </section>
 <section id="testimonials" class="col-sm-4">
  <p>“Working on hyperloop – let alone being one of the first to ride it – is truly a dream come true" - Tanay Mnajrekar</p>
  <p>"I’ve always been so inspired by the entrepreneurial spirit of the Indian people. I’m so excited that they’ve embraced the hyperloop concept and share our vision of creating new and sustainable transportation for the region- Richard Branson"</p>
</section>
</div>
<div class="text-center">&copy; TEAM ID: HO-221545</div>
  </div>
</footer> -->
 </section>

<!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/printbtn.js"></script>
</body>
</html>