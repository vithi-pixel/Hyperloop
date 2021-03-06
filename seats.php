<?php 
session_start();

	include("connection.php");
	include("functions.php");
  

	$user_data = check_login($con);
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check Schedule</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/hyperloopSeats.css">
    
    <!-- <link rel="stylesheet" href="css/hyperloop.css"> -->
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  </head>
  <body>

    <header>
        <nav id="header-nav" class="navbar navbar-default">
        <div class="container-nav">
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
      

    <main>

        <div id="main-content" class="container">
            <div class="jumbotron">
            <div class="container1">
    
          
            <div id="from-dd">
              <form>
                <span class="glyphicon glyphicon-globe"></span>
               From
                <select id="from-dropdown" name="from-select">
                  <option value="bkc">BKC</option>
                  <option value="nm">Navi Mumbai</option>
                  <option value="pune">PUNE</option>
                </select>
              </form>
               <!-- <label class="dc" style="left:15%"></label>    -->
          </div>
        
          <div id="to-dd">
              <form>
                <span class="glyphicon glyphicon-map-marker"></span>
             To
                <select id="to-dropdown" name="to-select">
                  <option value="bkc">BKC</option>
                  <option value="nm">Navi Mumbai</option>
                  <option value="pune">PUNE</option>
                </select>
                </form>
              <!-- <label class="dc" style="left:15%"></label> -->
          </div>
          
          <div id="gocal">
              
              <form>
                <span class="glyphicon glyphicon-calendar"></span>
               Departure
              <input class="dc" type="date" data-message="enter date">
              <!-- <label class="dc" style="left:15%"></label> -->
            </form>
          </div>
        
          <div id="comecal">
            <form>
          <span class="glyphicon glyphicon-calendar"></span>
         Return date
          <input class="dc" type="date" data-message="enter date">
          <!-- <label class="dc" style="left:15%"></label> -->
        </form>
      </div>
    
        
        <div id="peopledd">
          <span class="glyphicon glyphicon-user"></span>
       Seats
            <form>
              <input type="number" min="1" max="100">
              </form>
            </div>
        <!-- <label class="dc" style="left:15%"></label> -->
    
    
    <a href="seats.html">
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
                  <td><a href="seats.html"><button class="table-btn">4</button></a>1</td>
                  <td>08:00 AM</td>
                  <td>1</td>
              </tr>
              <tr>
                  <td><a href="seats.html"><button class="table-btn">4</button></a>2</td>
                  <td>08.06AM</td>
                  <td>1</td>
              </tr>
              <tr>
                  <td><a href="seats.html"><button class="table-btn">4</button></a>3</td>
                  <td>8.18 AM</td>
                  <td>2</td>
              </tr>
              <tr>
                  <td><a href="seats.html"><button class="table-btn">4</button></a>4</td>
                  <td>8:30 AM</td>
                  <td>3</td>
              </tr>
              <tr>
                  <td><a href="seats.html"><button class="table-btn">4</button></a>5</td>
                  <td>9:18 AM</td>
                  <td>5</td>
              </tr>
              <tr>
                  <td><a href="seats.html"><button class="table-btn">4</button></a>6</td>
                  <td>9:42 AM</td>
                  <td>4</td>
              </tr>
              <tr>
                  <td><a href="seats.html"><button class="table-btn">4</button></a>7</td>
                  <td>10:00 AM</td>
                  <td>3</td>
              </tr>
              <tr>
                  <td><a href="seats.html"><button class="table-btn">4</button></a>8</td>
                  <td>10:06 AM</td>
                  <td>6</td>
              </tr>
          </tbody>
      </table> 
        
    <div class="movie-container">
      
        <select id="movie">
            <option value="10">POD 1</option>
            <option value="12">POD 2</option>
            <option value="8">POD 3</option>
            <option value="9">POD 4</option>
            <option value="12">POD 5</option>
            <option value="12">POD 6</option>
          </select>
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>N/A</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
      </li>
    </ul>

    <div class="container-s">
      <div class="screen"></div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
     
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
    </div>

    <p class="text">
      You have selected <span id="count">0</span> seats
    </p>
<a href="downloadTicket.php">
    <button id="booknow">BOOK NOW </button>
</a>



    </main>
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
        <p>???Working on hyperloop ??? let alone being one of the first to ride it ??? is truly a dream come true" - Tanay Mnajrekar</p>
        <p>"I???ve always been so inspired by the entrepreneurial spirit of the Indian people. I???m so excited that they???ve embraced the hyperloop concept and share our vision of creating new and sustainable transportation for the region- Richard Branson"</p>
      </section>
      </div>
      <div class="text-center">&copy; TEAM ID: HO-221545</div>
        </div>
      </footer>

    <script src="js/seats.js"></script>
  </body>
</html>
  