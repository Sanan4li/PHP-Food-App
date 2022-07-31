<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin - Dashboard</title>

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
    <link href="assets/css/my-style.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
 
  </head>
    <?php
        include("./Sessions.php");
        CheckSessions();
    ?>
  <body>

  <section id="container" >
        <?php
            include("./Header.php");
            DisplayHeader();
        ?>
      <!--header end-->
      
      <!--sidebar start-->
      <?php
        include("./Sidebar.php");
        DisplaySideBar("active", "", "","", "" ,"","", "","", "");
      ?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
                  
                  	<div class="row mtbox ">
                  	    <div class="col-md-12">
                  	       <?php
                            
                            if(isset($_GET["ProfileUpdated"])){
                                echo '<h1 class="text-center blue"> Record Updated Successfully </h1>';
                            }
                            $C = new DataBaseConnection();
                            $Connection = $C->Connect();
                             
                            ?>
                  	    </div>
                  		<div class="col-md-4 col-sm-2  box0">
                          <a href="AllProducts.php">    
                          <div class="box1">
                                  <span class="li_news"></span>
                                  <?php $Query = "SELECT * from products";
                                        $Result = mysqli_query($Connection, $Query);
                                        if($Result){
                                            $TotalProducts = mysqli_num_rows($Result);
                                            echo '
                                            <h3>Total products '.$TotalProducts.'</h3>
                                            </div>
                                            <p >You have '.$TotalProducts.' total products in your database.</p>
                                            ';
                                             
                                        }
                                  ?>
					  			</a>
                  			
                  			
                  		</div>
                  		
                  		
                  	
                  		<div class="col-md-4 col-sm-2 box0">
                  			<a href="AllCategories.php">
                              <div class="box1">
					  			<span class="li_data"></span>
                                  <?php $Query = "SELECT * from category";
                                        $Result = mysqli_query($Connection, $Query);
                                        if($Result){
                                            $CategoryCount = mysqli_num_rows($Result);
                                            echo '
                                            <h3> Total categories '.$CategoryCount.'</h3>
                                            </div>
                                            <p>You have'.$CategoryCount.' categories in the database.</p>
                                            ';
                                             
                                        }
                                  ?>


                            </a>
                  		</div>	
                          <div class="col-md-4 col-sm-2 box0">
                  			<a href="AllCategories.php">
                              <div class="box1">
					  			<span class="li_data"></span>
                                  <?php $Query = "SELECT * from recipes";
                                        $Result = mysqli_query($Connection, $Query);
                                        if($Result){
                                            $RecipesCount = mysqli_num_rows($Result);
                                            echo '
                                            <h3> Total recipes '.$RecipesCount.'</h3>
                                            </div>
                                            <p>You have '.$RecipesCount.' recipes in the database.</p>
                                            ';
                                             
                                        }
                                  ?>


                            </a>
                  		</div>
                  	
                  	</div><!-- /row mt -->	 	
                      <div class="row mtbox ">
                  	    
                      <div class="col-md-4 col-sm-2 box0">
                  			<a href="AllMessages.php">
                            <div class="box1">
					  			<span class="li_mail"></span>
                                  <?php $Query = "SELECT * from messages";
                                        $Result = mysqli_query($Connection, $Query);
                                        if($Result){
                                            $NewOrders = mysqli_num_rows($Result);
                                            echo '
                                            <h3> New Messaged '.$NewOrders.'</h3>
                                            </div>
                                            <p >You have '.$NewOrders.' total messages. Check now .</p>
                                            ';
                                             
                                        }
                                  ?>
                            </a>
                  		</div>
                  		
                  		
                  	
                  		
                  	
                  	</div><!-- /row mt -->	
                  
                     	
                  
                      
                     
                    				
					
				
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  
              </div>
          </section>
      </section>

      <!--main content end-->
     
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
       

       
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
