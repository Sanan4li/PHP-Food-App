<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
         <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">  
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <link href="assets/css/table-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .TableHead{
            background: aqua;
            color: black;
            font-size:16px;
            
        }
        span{
           // padding-left: 10px;
            margin-left: 10px;
        }
        .icon{
           // padding: 10px;
           margin-left: 5px;
            font-size: 16px;
        }
        .blue{
            color: blue;
        }
      
      </style>
    
    
  </head>
  <?php
                    
         include "../Admin.php";
            
        
        $New = new Admin();
        $New->CheckSession();
                
    
        if(isset($_GET["Logout"])){
            unset($_SESSION["AdminEmail"]);
            unset($_SESSION["AdminPassword"]);
            header("location:../Index.php");
        }
    
               
      ?>
  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
          <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="../Index.php" class="logo"><b>LunchOnline.Pk</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                  
                    <!-- settings end -->
                
                        </ul>
                    
                    <!-- inbox dropdown end -->
            
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="AdminPanel.php?Logout=1" style="background: #212020; padding-left: : 10px; font-size: 18px; ">Logout</a></li>
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
              
              	  <p class="centered"><a href="profile.html"><img src="Admin.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Admin</h5>
              	  	
                  <li class="mt">
                      <a href="AdminPanel.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-random"></i>
                          <span>Orders</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="NewOrders.php">New Orders</a></li>
                          <li><a  href="OrdersInProgress.php">In Progress</a></li>
                          <li><a  href="OrdersDelivered.php">Delivered</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-user"></i>
                          <span>Customers</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="AllCustomers.php">All Customers</a></li>
                          <li><a  href="SearchCustomer.php">Search Customer</a></li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="glyphicon glyphicon-user"></i>
                          <span>Chefs</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="AllChefs.php">All Chefs</a></li>
                          <li><a  href="SearchChef.php">Search Chef</a></li>
                         
                      </ul>
                  </li>
                     <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-asterisk"></i>
                          <span>Dishes</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="AllDishes.php">All Dishes</a></li>
                         
                         
                      </ul>
                  </li>
                  
                  
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-envelope"></i>
                          <span>Messages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="AllMessages.php">All Messages</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="glyphicon glyphicon-wrench"></i>
                          <span>Settings</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="EditProfile.php">Profile Settings</a></li>
                        
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="AdminPanel.php?Logout=1">
                          <i class="glyphicon glyphicon-log-out"></i>
                          <span>Logout</span>
                      </a>
                  </li>
                        <li class="sub-menu">
                              <a href="#" >
                                  <i class="glyphicon glyphicon-question-sign"></i>
                                  <span>Help</span>
                              </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Search Chef</h3>
          		 <?php
                 		if(isset($_GET["Deleted"])){
                            echo '<h1 class="blue text-center"> Record Deleted </h1>';
              }
              ?>
          	
		  		<form class="form form-inline" action="SearchChef.php" method="post">
                  <div class="input-group">
		  		    <label for="Search">Search Chef</label>
		  		    <input type="text" name="SearchChef" placeholder="Enter Name" class="form-control">
		  		  
		  		    </div>
		  		    <div class="form-group">
		  		          <input type="submit" name="SearchButton" value="Search" class="btn btn-success" style="margin-top:23px;">
		  		    </div>
		  		    
		  		    
		  		</form>
		  	
		  	<div class="row mt">
                     <?php
                                  
                               
                                 $C = new DataBaseConnection();
                                 $Connection = $C->Connect();
                                  $Name = "No Name";
                                  
                                  if(isset($_POST["SearchButton"])){
                                      $Name = $_POST["SearchChef"];
                                  echo'
                  
                  
                  
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Searched Chef</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed table-responsive">
                              <thead class="TableHead">
                              <tr>
                                  <th class=""> Name</th>
                                  <th class=""> City</th>
                                  <th class="numeric">Address</th>
                                  <th class="numeric">Contact</th>
                                  <th class="numeric">Email</th>
                                  <th class="numeric">Dish One</th>
                                    <th class="numeric">Dish Two</th>
                                
                                 
                                  <th class="numeric"> Action </th>
                              </tr>
                              </thead>
                             
                              ';
                                 
                                  
                                  
                                 
                                  $Query = "Select *from Chef where Name like '%$Name%'";
                                  $Result = mysqli_query($Connection , $Query);
                                  if($Result){
                                      $Rows = mysqli_num_rows($Result);
                                      
                                      if($Rows==0){
                                          echo '<tr>
                                                            <td colspan="6" class="text-center">
                                                                    <h2>No Record Found</h2>
                                                            </td>        
                                                    </tr>';
                                      }
                                      else{
                                      
                                      while($Data = mysqli_fetch_assoc($Result)){
                                          echo '
                                           <tbody>
                                          <tr>
                                  
                                  
                                  <td class="numeric">'.$Data["Name"].'</td>
                                   <td class="numeric">'.$Data["City"].'</td>
                                       <td class="numeric">'.$Data["Address"].'</td>
                                      <td class="numeric">'.$Data["Cell_Number"].'</td>
                                  <td class="numeric">'.$Data["Email"].'</td>
                                     <td class="numeric">'.$Data["DishOne"].'</td>
                                       <td class="numeric">'.$Data["DishTwo"].'</td>
                                       
                                       <td class="numeric">
                                       
                                       
                                        <a href="../Admin.php?deleteS='.$Data["Id"].'&Page=SearchChef" class="icon"> <span class="glyphicon glyphicon-trash"></span></a>
                                        
                                       </td>
                              </tr>
                                          
                                          
                                          ';
                                      }
                                      }
                                  }
                                  }
                                  
                                  
                                  
                                  
                                  
                                  ?>
              
                              </tbody>
                          </table>
                          </section>
    
                  </div>
               </div>	
		  	</div>
		  
		  	
		  	

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
    
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    

  </body>
</html>
