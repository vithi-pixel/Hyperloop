
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/opstats.css">
    
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

      <div class="container1">
        <div class="travel">

        <span id="wlcm">Welcome <?php echo $user_data['user_name']; ?><span>

          <div id=text1>
            PASSENGER COUNT
          </div>

          <div class="gauge">
            <div class="gauge__body">
              <div class="gauge__fill"></div>
              <div class="gauge__cover"></div>
             
            </div>
          </div>
          <br>

          <!-- <div id=text2>
            STATUS OF POD BAYS
          </div>
           
           <div id="main-div">
             Scorer 1 Starts -->
            <!-- <div class="layout-align">
              <div id="score-meter-1" class="layout-align">
              <div id="scorer-1-inner-div">
                <div id="scorer-1-inner-div-5">
                  <div class="scorer-1-tick">
                  </div>
                </div>
              </div>
              <div id="scorer-1-inner-div-2"></div>
              <div id="scorer-1-inner-div-3"></div>
              <div id="scorer-1-inner-div-4"></div>
            </div>
            </div>
            </br>  -->
            <a href="opstats.php">
            <button id="bkcpune-btn">BKC-PUNE</button>
            </a>
            <a href="opstats.php">
            <button id="nmpune-btn">NAVI MUMBAI-PUNE</button>
            </a>
            <a href="opstats.php">
            <button id="punebkc-btn">PUNE-BKC</button>
            </a>
            <a href="opstats.php">
            <button id="punenm-btn">PUNE-NAVI MUMBAI</button>
            </a>
            <!-- <div id=text3>
              POD ARRIVAL COUNTDOWN
            </div>

            

            <div class="layout-align">
              <div class="score-7-meter" class="layout-align">
                <div id="scorer-7-holder">
                  <div id="scorer-7-background">
                    <div id="scorer-7-color-zone">
                    </div>
                  </div>
                  <div class="scorer-7-tick">
                  </div>
                </div>
              </div>
            </div>
              <br/> -->
              <!-- Scorer 7 Ends -->
            </div>
            
      

            

      
    </div>
       
      




          


          
          <!-- <span id="search" >Search</span> -->
          <!-- <br class="hidden-xs">Search -->
        </div>
      </div>
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
 </section>

<!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>