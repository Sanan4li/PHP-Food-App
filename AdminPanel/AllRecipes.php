<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>All Recipes</title>

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
        DisplaySideBar("", "", "","", "", "active","", "","", "");
      ?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	
		  		
		  		 <?php
                 		if(isset($_GET["Deleted"])){
                            echo '<h1 class="blue text-center"> Recipe Deleted! </h1>';
                         }
                         else if(isset($_GET["RecipeAdded"])){
                            echo '<h1 class="blue text-center"> New Recipe Added! </h1>';
                         }
                         else if(isset($_GET["ProductEdited"])){
                            echo '<h1 class="blue text-center"> Recipe Edited! </h1>';
                         }
              ?>
              <h3 style="text-align:center;">All Recipes</h3>
                <form class="form flex items-end justify-between" action="SearchCustomer.php" method="post">
                      <div class="input-group">
                      <label for="Search">Enter Something to Search</label>
                      <input type="text" id="search" name="SearchCustomer" placeholder="Enter..." class="form-control">
                    
                      </div>
                      <div>
                        <a href="AddRecipe.php" class="logout topLogout">Add Recipe </a>
                      </div>
		  		    
		  		    
		  		</form>
		  	<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      
                          <section id="unseen">
                            <table id="table" class="table table-bordered table-striped table-condensed table-responsive paginated">
                              <thead class="TableHead">
                              <tr>
                                  <th class=""> Name</th>
                                  <th class=""> Product</th>
                                  <th class="numeric">Description</th>
                                  <!-- <th class="numeric">Discounted From</th>
                                  <th class="numeric">Quantity</th>
                                    <th class="numeric">Expiry Date</th>
                                    <th class="numeric">Status</th> -->
                                  <th class="numeric"> Action </th>
                              </tr>
                              </thead>
                              <tbody>
                                    <?php
                                  
                               
                                 $C = new DataBaseConnection();
                                 $Connection = $C->Connect();
                                  $Query = "Select *from recipes ";
                                  $Result = mysqli_query($Connection , $Query);
                                  if($Result){
                                      while($Data = mysqli_fetch_assoc($Result)){
                                          echo '
                                          <tr>
                                  
                                  
                                  <td class="numeric">'.$Data["Name"].'</td>
                                  ';
                                    $NewQuery = "Select * from products Where Id =".$Data["ProductId"];
                                    $ResultNew = mysqli_query($Connection , $NewQuery);
                                    if($ResultNew){
                                        $D = mysqli_fetch_assoc($ResultNew);
                                        echo '<td class="numeric">'.$D["Name"].'</td>';
                                    }
                                    //     <td class="numeric">'.$Data["DiscountedPrice"].'</td>
                                    // <td class="numeric">'.$Data["Quantity"].'</td>
                                    //  <td class="numeric">'.$Data["ExpiryDate"].'</td>
                                    //      <td class="numeric">'.$Data["Status"].'</td>
                                    echo '
                                    
                                    <td class="numeric">'.$Data["Description"].'</td>
                                       <td class="numeric">
                                       
                                       
                                       <a href="EditRecipe.php?edit='.$Data["Id"].'"class="icon"  style="background:none !important"> <span class="glyphicon glyphicon-edit" title="Forward"></span></a>
                                        <a href="../Admin.php?deleteR='.$Data["Id"].'&Page=AllRecipes"  class="icon"  style="background:none !important"> <span class="glyphicon glyphicon-trash" title="Delete"></span></a>
                                       
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
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		  	
		  	
		  	
		  	

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
