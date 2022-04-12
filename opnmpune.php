<?php 
session_start();

	include("connection.php");
	include("opfunctions.php");

	$user_data = check_login($con);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/opbkcpune.css">
    <!-- <link rel="stylesheet" href="css/test.scss"> -->
    
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Oxygen:wght@300&display=swap' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <header>
    <nav id="header-nav" class="navbar navbar-default">
    <div class="container">
    <div class="navbar-header">
    <a href="index.php" class="pull-left visible-md visible-lg visible-sm visible-xs">
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
      <span id="welcome"><h1>Welcome <?php echo $user_data['user_name']; ?></h1></span>

      <div class="container1">
        <div class="trave">

          

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
              <div id=text2 class="visible-lg">
            STATUS OF POD CONVOY
          </div>
           
           <div id="main-div" class="visible-lg">
           
            <div class="layout-align">
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
            </br>
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
                <td><a href="opbkcpune.php"><button class="table-btn">4</button></a>1</td>
                <td class="green">08:00 AM</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="opnmpune.php"><button class="table-btn">4</button></a>2</td>
                <td class="blue">08.06AM</td>
                <td>1</td>
            </tr>
            <tr>
                <td><a href="opbkcpune.php"><button class="table-btn">4</button></a>3</td>
                <td class="green">8.18 AM</td>
                <td>2</td>
            </tr>
            <tr>
                <td><a href="opnmpune.php"><button class="table-btn">4</button></a>4</td>
                <td class="red">8:30 AM</td>
                <td>3</td>
            </tr>
            <tr>
                <td><a href="opbkcpune.php"><button class="table-btn">4</button></a>5</td>
                <td class="blue">9:30 AM</td>
                <td>5</td>
            </tr>
            <tr>
                <td><a href="opnmpune.php"><button class="table-btn">4</button></a>6</td>
                <td>10:00 AM</td>
                <td class="green">4</td>
            </tr>
          
        </tbody>
    </table>
  
    </table>
    <div class="arrival-container-2" >
       <span id="st-2"> Arrival Status: On time<span>
</div>
   
    <table id="optable" style="width:100%">
        <thead>
            <tr>
                <th>POD NUMBER</th>
                <th>SEAT OCCUPANCY</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>92%</td>
            </tr>
            <tr>
                <td>2</td>
                <td>89%</td>
            </tr>
            <tr>

                <td>3</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>4</td>
                <td>70%</td>
            </tr>
            <tr>

                <td>5</td>
                <td>95%</td>
            </tr>
            <tr>
                <td>6</td>
                <td>91%</td>
            </tr>
          
        </tbody>
    </table>
    
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
              <br/> 
              Scorer 7 Ends 
            </div> -->
            
      

            

      
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
 </section>

<!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/operatorindex.js"></script>
</body>
</html>