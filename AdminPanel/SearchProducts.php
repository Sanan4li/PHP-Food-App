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
        DisplaySideBar("", "", "","active", "", "","", "","", "");
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
                            echo '<h1 class="blue text-center">Product Record Deleted! </h1>';
              }
              ?>
              <h3 style="text-align:center"> Search Product</h3>
		  		<form class="form form-inline" action="SearchProducts.php" method="post">
                  <div class="input-group">
		  		    <label for="Search">Enter Name to Search</label>
		  		    <input type="text" name="SearchProduct" placeholder="Enter Name" class="form-control">
		  		  
		  		    </div>
		  		    <div class="form-group">
		  		          <input type="submit" name="SearchButton" value="Search By Name" class="btn btn-success" style="margin-top:23px;">
		  		    </div>
                      <div class="input-group" style="margin-left:20px;">
		  		    <label for="Search">Select Category to Search</label>
		  		    <select name="SearchProductByCategory"  class="form-control">
                        <?php
                             $C = new DataBaseConnection();
                             $Connection = $C->Connect();
                             $Q = "Select * from categories";
                             $R = mysqli_query($Connection,$Q);
                             while($CategoriesData = mysqli_fetch_assoc($R)){
                                 echo '
                                 <option value="'.$CategoriesData["Id"].'">'.$CategoriesData["Name"].'</option>
                                 ';
                             }

                        ?>
                    </select>
		  		  
		  		    </div>
		  		    <div class="form-group">
		  		          <input type="submit" name="SearchButtonByCategory" value="Search By Category" class="btn btn-success" style="margin-top:23px;">
		  		    </div>
		  		    
		  		</form>
		  	
		  	  <?php
                                  
                              
                                
                                  $Name = "NoNameGiven";
                                  
                                  if(isset($_POST["SearchButton"]) || isset($_POST["SearchButtonByCategory"])){
                                      $Name = $_POST["SearchProduct"];
                                      $Category = $_POST["SearchProductByCategory"];
                                  echo '
		  	
		  	
		  	
		  	<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed table-responsive">
                              <thead class="TableHead">
                              <tr>
                              <th class=""> Name</th>
                              <th class=""> Category</th>
                              <th class="numeric">Price</th>
                              <th class="numeric">Discounted Price</th>
                              <th class="numeric">Quantity</th>
                              <th class="numeric">Expiry Date</th>
                              <th class="numeric">Status</th>
                              <th class="numeric"> Action </th>
                          </tr>
                              </thead>
                              <tbody>
                                  ';
                                  
                                  
                                 if($Name != ""){
                                    $Query = "Select * from products where Name like '%$Name%'";
                                 }
                                 else{
                                    $Query = "Select * from products where CategoryId ='$Category'";
                                 }
                                 
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
                                ';
                                  $NewQuery = "Select * from Categories Where Id =".$Data["CategoryId"];
                                  $ResultNew = mysqli_query($Connection , $NewQuery);
                                  if($ResultNew){
                                      $D = mysqli_fetch_assoc($ResultNew);
                                      echo '<td class="numeric">'.$D["Name"].'</td>';
                                  }
                                  echo '
                                 
                                     <td class="numeric">'.$Data["Price"].'</td>
                                    <td class="numeric">'.$Data["DiscountedPrice"].'</td>
                                <td class="numeric">'.$Data["Quantity"].'</td>
                                 <td class="numeric">'.$Data["ExpiryDate"].'</td>
                                     <td class="numeric">'.$Data["Status"].'</td>
                                     <td class="numeric">
                                     
                                     
                                     <a href="EditProduct.php?edit='.$Data["Id"].'"class="icon"  style="background:none !important"> <span class="glyphicon glyphicon-edit" title="Forward"></span></a>
                                      <a href="../Admin.php?deleteP='.$Data["Id"].'&Page=SearchProducts"  class="icon"  style="background:none !important"> <span class="glyphicon glyphicon-trash" title="Delete"></span></a>
                                     
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
