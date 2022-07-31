<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>
        Ordered Delivered
    </title>

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
    <link href="assets/css/my-style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   
    
  </head>

  <body>
  <?php
        include("./Sessions.php");
        CheckSessions();
      ?>
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
        <!--header start-->
        <?php
            include("./Header.php");
            DisplayHeader();
        ?>
        <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <?php
        include("./Sidebar.php");
        DisplaySideBar("", "active", "","", "", "", "","", "","", "");
      ?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3>Orders Delivered </h3>
            <?php
              
              
              if(isset($_GET["Deleted"])){
                  echo '<h1 class="blue text-center"> Record Deleted </h1>';
              } 
              else if(isset($_GET["DeletedProducts"])){
                  echo '<h1 class="blue text-center"> Products Record Deleted! </h1>';
              }
              else if(isset($_GET["DeletedOrder"])){
                  echo '<h1 class="blue text-center"> Order Deleted! </h1>';
              }
              else if(isset($_GET["DeletedOrderError"])){
                  echo '<h1 class="red text-center"> Error! Products Exists in the Order. </h1>';
              }

              ?>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                     <div class="table-responsive">
                      <div class="content-panel">
                     
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed paginated">
                            
                            <thead class="TableHead">
                              <tr>
                                  <th class=""> Name</th>
                                  <th class="numeric">Shipping Address</th>
                                  <th class="numeric">Contact</th>
                                  <th class="numeric">Products</th>
                                  <th class="numeric">Date</th>
                                  <th class="numeric">Payment Method</th>
                                  
                                  
                                  <th class="numeric">Status</th>
                                 
                                  <th class="numeric"> Action </th>
                              </tr>
                              </thead>
                              <tbody>
                                    <?php
                                  
                             
                                 $C = new DataBaseConnection();
                                 $Connection = $C->Connect();
                                  
                                 $Query = "Select *from orders where Status = 'Delivered' ";
                                 $Result = mysqli_query($Connection , $Query);
                                 if($Result){
                                     $Rows = mysqli_num_rows($Result);
                                     if($Rows==0){
                                            echo '<tr>
                                                           <td colspan="8" class="text-center">
                                                                   <h2>No Record Found</h2>
                                                           </td>        
                                                   </tr>';
                                     }
                                     while($Data = mysqli_fetch_assoc($Result)){
                                         echo '
                                         <tr>
                                 
                                 
                                 <td class="numeric">'.$Data["Name"].'</td>
                                      <td class="numeric">'.$Data["Shipping_Address"].'</td>
                                     <td class="numeric">'.$Data["Contact"].'</td>
                                     <td class="numeric"> <a href="OrdersDelivered.php?pid='.$Data["Id"].'" style="background:none !important">View Products </td>
                                
                                  <td class="numeric">'.$Data["Date"].'</td>
                                   <td class="numeric">'.$Data["Payment_Method"].'</td>
                                   
                                     <td class="numeric">'.$Data["Status"].'</td>
                                      
                                      <td class="numeric">
                                      
                                      
                                       <a href="../Admin.php?deleteOrder='.$Data["Id"].'&Page=OrdersDelivered" class="icon" style="background:none !important"> <span class="glyphicon glyphicon-trash" title="Delete"></span></a>
                                       
                                      </td>
                             </tr>
                                         
                                         
                                         ';
                                     }
                                 }
                                 
                                  
                                  
                                  
                                  
                                  ?>
                            
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
                    </div>
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		  	
		  	
        <?php
        if(isset($_GET["pid"])){
          echo '
          <h3> List of Products</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                     <div class="table-responsive">
                      <div class="content-panel">
                     
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead class="TableHead">
                              <tr>
                                  <th class=""> Product</th>
                                  <th class="numeric">Quantity</th>
                                  <th class="numeric">Price</th>
                                  <th class="numeric">Total</th>
                                  <th class="numeric">Grand Total</th>
                                 
                                 
                              </tr>
                              </thead>
                              <tbody>
          ';
        
                                  
                                $OrderId = $_GET["pid"];
                                $Sum = 0;

                                  $Query = "Select * from order_products where OrderId = '$OrderId' ";
                                  $Result = mysqli_query($Connection , $Query);
                                  if($Result){
                                      $Rows = mysqli_num_rows($Result);
                                      if($Rows==0){
                                             echo '<tr>
                                                            <td colspan="8" class="text-center">
                                                                    <h2>No Record Found</h2>
                                                            </td>        
                                                    </tr>';
                                      }
                                      while($Data = mysqli_fetch_assoc($Result)){
                                          echo '
                                          <tr>
                                  
                                  
                                  <td class="numeric">'.$Data["Product_Name"].'</td>
                                       <td class="numeric">'.$Data["Quantity"].'</td>
                                      <td class="numeric">RS '.$Data["Price"].'</td>
                                      
                                   <td class="numeric">'.($Data["Quantity"]*$Data["Price"]).'</td>
                                   <td class="numeric"></td>
                                   
                                       <td class="numeric">
                                       
                                       
                                       </td>
                              </tr>
                                          
                                          
                                          ';
                                          $Sum = $Sum + ($Data["Price"]*$Data["Quantity"]);

                                      }
                                      echo '
                                      <tr>
                                  
                                  
                                  <td class="numeric"></td>
                                       <td class="numeric"></td>
                                      <td class="numeric"></td>
                                      
                                   <td class="numeric"></td>
                                   <td class="numeric"> RS '.$Sum.'</td>
                                   
                                       
                              </tr>
                                      ';
                                  }
                                }
                                  
                                  
                                  
                                  
                                  
                                  ?>
		  	
        </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
                    </div>
               </div><!-- /col-lg-4 -->			
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
    <script src="assets/js/myjs.js">
    </script>
    <!--script for this page-->
    

  </body>
</html>
