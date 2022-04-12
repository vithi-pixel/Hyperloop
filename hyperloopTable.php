<?php 
session_start();

	include("connection.php");
	include("functions.php");
  

	$user_data = check_login($con);
    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check Schedule</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/hyperloop.css"> -->
    <link rel="stylesheet" href="css/hyperloopTable.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
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
    <main>
      <div id="main-content" class="container">
        <div class="jumbotron">
        <div class="container1">
      
        <div id="from-dd">
          <form>
            <span class="glyphicon glyphicon-globe"></span>
           From
            <select id="from-dropdown" name="from-select">
            <option disabled selected >-----select city-----</option>
                
             <?php
                  include "dbconnect.php";  
                  $records = mysqli_query($con, "SELECT car From category");  

                  while($data = mysqli_fetch_array($records))
                  {
                          echo "<option value='". $data['car'] ."'>" .$data['car'] ."</option>";                       
                        
                  }
                
                      ?> 
                   
                     
            </select>
          </form>

            <?php mysqli_close($con);  ?>
           
      </div>
    
      <div id="to-dd">
          <form>
            <span class="glyphicon glyphicon-map-marker"></span>
         To
            <select id="to-dropdown" name="to-select">
            <option disabled selected>-----Select City-----</option>
                       
                       <?php
                            include "dbconnect2.php";  
                            $records = mysqli_query($con, "SELECT car From category");  
          
                        while($data = mysqli_fetch_array($records))
                            {
                                         echo "<option value='". $data['car'] ."'>" .$data['car'] ."</option>";  
                            }	
                                ?> 
                               
                      </select>
                    </form>
          
          <?php mysqli_close($con);  ?>
          
      </div>
        
      <div id="gocal">
          
          <form>
            <span class="glyphicon glyphicon-calendar"></span>
           Departure
          <input class="dc" type="date" data-message="enter date">
          
        </form>
      </div>
    
      <div id="comecal">
        <form>
      <span class="glyphicon glyphicon-calendar"></span>
     Return date
      <input class="dc" type="date" data-message="enter date">
      
    </form>
  </div> 

    
    <div id="peopledd">
      <span class="glyphicon glyphicon-user"></span>
   Seats
        <form>
          <input type="number" min="1" max="100">
          </form>
        </div> -->
    <!-- <label class="dc" style="left:15%"></label> -->


<a href="hyperloopTable.php">
<button id="seatno" class="seat-btn">Check Availablity</button> 
</a>
    </div>
    <table id="hypetable" style="width:100%">
        <thead>
            <tr>
                <th>Sr no.</th>
                <th>Arrival</th>
                <th>Pod Bay</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="seats.php"><button class="table-btn">4</button></a>1</td>
                <td>08:00 AM</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="seats.php"><button class="table-btn">4</button></a>2</td>
                <td>08.06AM</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="seats.php"><button class="table-btn">4</button></a>3</td>
                <td>8.18 AM</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="seats.php"><button class="table-btn">4</button></a>4</td>
                <td>8:30 AM</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="seats.php"><button class="table-btn">4</button></a>5</td>
                <td>9:18 AM</td>
                <td>5</td>
            </tr>
            <tr>
                <td><a href="seats.php"><button class="table-btn">4</button></a>6</td>
                <td>9:42 AM</td>
                <td>4</td>
            </tr>
            <tr>
                <td><a href="seats.php"><button class="table-btn">4</button></a>7</td>
                <td>10:00 AM</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="seats.php"><button class="table-btn">4</button></a>8</td>
                <td>10:06 AM</td>
                <td>6</td>
            </tr>
        </tbody>
    </table>
    </div> 
  </div>

  <footer class="panel-footer">
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
  </footer>

<!-- 
   jQuery (Bootstrap JS plugins depend on) -->
   <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script> 
</body>
</html>