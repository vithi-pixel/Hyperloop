<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Your Booking</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/hyperloopbooking.css">
  <!-- <link rel="stylesheet" href="css/hyperloop.css"> -->
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
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav"
            aria-expanded="false">
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
                <span id="home" class="glyphicon glyphicon-home"></span>Home
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

            </li>

            


            <li>
            <a href="logout.php">
           <span id="signIn" class="glyphicon glyphicon-user"></span>
           <br class="hidden-xs">Logout
           </a>
            </li>
          </ul>
          </div>
          </div>
    </nav>
  </header>
  <main>
    <div id="main-content" class="container">
      <div class="jumbotron">
        <div class="container1">
          <div class="ticket-container">
            <span id="h1">PRINT TICKET</span>
            <h2>Verify your details and print ticket</h2>
            <form>
              <br>
              <input type="text" id="seat" placeholder="Enter your seat no.">
              <br>
              <input type="text" id="pod" placeholder="Enter your pod no.">
            </form>
            <a href ="downloadTicket.php" >
            <button id="download-btn">Download ticket</button>
          </a>
        
          </div>
          <div class="traveldate-container">
            
            <span class="traveldateh1" id="h3">CHANGE TRAVEL DATE</span>
          
            <h2 class="traveldateh1">Verify your details and change travel date</h2>
            <form>
              <br>
              <input type="text" id="seat" placeholder="Enter your seat no.">
              <br>
              <input type="text" id="pod" placeholder="Enter your pod no.">
            </form>
            <a href="hyperloopCategories.html">
            <button id="s-btn">Search</button>
            </a>
          </div>
          <div class="hiw-container">
            <span id="h1">How it works?</span>
            <h2>Search Pod</h2>
            <img src='https://image.freepik.com/free-photo/3d-search-bar-with-mobile-phone-3d-rendering-illustration_499459-350.jpg'>
            <p>Enter your seat number and pod number to search the ticket.</p>
            <h2>Choose Travel Date</h2>
              <img src='https://image.freepik.com/free-vector/flat-online-appointment-booking-app-tourists-find-hotels_100333-202.jpg'>
            <p>Verify your ticket and choose a date to change your travel date.</p>
            <h2>Confirmation</h2>
            <img src='https://www.redbus.in/images/confirm_reschedule.png'>
            <p>Select your pod and confirm date change by paying the difference amount</p>
           
          </div>
        </div>
      </div>
    </div>
    </div>

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
          <p>“Working on hyperloop – let alone being one of the first to ride it – is truly a dream come true" - Tanay
            Mnajrekar</p>
          <p>"I’ve always been so inspired by the entrepreneurial spirit of the Indian people. I’m so excited that
            they’ve embraced the hyperloop concept and share our vision of creating new and sustainable transportation
            for the region- Richard Branson"</p>
        </section>
      </div>
      <div class="text-center">&copy; TEAM ID: HO-221545</div>
    </div>
  </footer>

  <!-- 
  jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>