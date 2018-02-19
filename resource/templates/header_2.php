<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Simeon Nortey">
   

    <title>REG</title>

    <!-- Bootstrap core CSS -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../../assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../../assets/js/gritter/css/jquery.gritter.css" />
     
    <link rel="stylesheet" type="text/css" href="../../assets/css/materialize.min.css"> 
    
    <!-- Custom styles for this template -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/style-responsive.css" rel="stylesheet">

    <script src="../../assets/js/chart-master/Chart.js"></script>
    <script src="../../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../../assets/js/materialize.js"></script>
    

 
   
  </head>

  <body>
  <!--
  
-->
  <section id="container" >
      <!-- 
      TOP BAR CONTENT & NOTIFICATIONS
      -->
      <!--header start-->
      <header class="header black-bg" style="background-color: #9d76bc";>
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="" class="logo"><b>ReG</b></a>
            <!--logo end-->
            
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../../config/logout.php">Logout</a></li>
                </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="../../index.php"><img src="../../assets/img/ui-danro.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $_SESSION['username']; ?></h5>
                    
                  <li class="mt">
                      <a class="" href="../../index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Add New</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="received.php">Received letter</a></li>
                          <li><a  href="despatched.php">Dispatch letter</a></li>
                          
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-search"></i>
                          <span>Search</span>
                      </a>
                      <ul class="sub">
                         
                          <li><a  href="search_r.php">Received</a></li>
                          <li><a  href="search_d.php">Dispatched</a></li>
                          
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                         <i class="fa fa-cogs"></i>
                          <span>Settings</span>
                      </a>
                      <ul class="sub">
                      <li><a  href="../../config/logout.php">Lock Screen</a></li>
                      <li><a  href="changepass.php">Change Password</a></li>
                      <?php 
                  
                  if($_SESSION['admin'] == 1){
                    echo '
                       <li><a  href="adduser.php">Add new User</a></li>
                          <li><a  href="deluser.php">Delete User</a></li>
                        
                      </ul>
                  </li>
                  ';
                }else
                {
                  //..nothing
                }
                  ?>
                  
                 

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->


