<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Search Product</title>

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
        DisplaySideBar("", "", "","", "active", "","", "","", "");
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
                            echo '<h1 class="blue text-center">Category Deleted! </h1>';
              }
                   else if(isset($_GET["Error"])){
                echo '<h1 class="text-center" style="color:red;">Category Can\'t Be Deleted! </h1>';
                echo '<h1 class="text-center" style="color:red;">Some Products Belongs to this Category! </h1>';
              }
              ?>
              <h3 style="text-align:center"> Search Category</h3>
		  		<form class="form form-inline" action="SearchCategories.php" method="post">
                  <div class="input-group">
		  		    <label for="Search">Enter Name to Search</label>
		  		    <input type="text" name="SearchCategory" required="true" placeholder="Enter Name" class="form-control">
		  		  
		  		    </div>
		  		    <div class="form-group">
		  		          <input type="submit" name="SearchButton" value="Search By Name" class="btn btn-success" style="margin-top:23px;">
		  		    </div>
                      
		  		    
		  		</form>
		  	
		  	  <?php
                                  
                              
                                  $C = new DataBaseConnection();
                                  $Connection = $C->Connect();
                                  $Name = "NoNameGiven";
                                  
                                  if(isset($_POST["SearchButton"])){
                                      $Name = $_POST["SearchCategory"];
                                      
                                  echo '
		  	
		  	
		  	
		  	<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed table-responsive">
                              <thead class="TableHead">
                              <tr>
                              <th class=""> Name</th>
                              <th class=""> Description</th>
                             
                              <th class="numeric"> Action </th>
                          </tr>
                              </thead>
                              <tbody>
                                  ';
                                  
                                  
                                
                                    $Query = "Select * from categories where Name like '%$Name%'";
                                
                                 
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
                                        <tr>
                                
                                
                                <td class="numeric">'.$Data["Name"].'</td>
                                     <td class="numeric">'.$Data["Description"].'</td>
                                     <td>
                                     <a href="EditCategory.php?edit='.$Data["Id"].'"class="icon"  style="background:none !important"> <span class="glyphicon glyphicon-edit" title="Forward"></span></a>
                                      <a href="../Admin.php?deleteCat='.$Data["Id"].'&Page=SearchCategories"  class="icon"  style="background:none !important"> <span class="glyphicon glyphicon-trash" title="Delete"></span></a>
                                     
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

    <!--script for this page-->
    

  </body>
</html>
