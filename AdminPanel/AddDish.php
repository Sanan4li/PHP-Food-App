<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add Category</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../csss/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../csss/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="../csss/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../csss/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../csss/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="../csss/bootstrap-datetimepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../csss/owl.carousel.min.css">
	<link rel="stylesheet" href="../csss/owl.theme.default.min.css">



	<!-- Modernizr JS -->
	<script src="../jss/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<style type="text/css">
	body{
		background: url(book.jpeg) ;
  background-size: cover ;
  background-position: center;
	}
      input[type="submit"]:hover{
            background: black;
        }
        option{
            background: skyblue;
            color: black;
        }
        
        #ReserveButton{
            background: #f4df42;
            color: black;
            border: none;
        }
        #box{
            margin-top: 180px;
        }
        form{
            padding:20px 60px 0 60px;
            color: black;
        }
    </style>
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
		
	<div class="gtco-loader"></div>
	
	<div id="page">
                
                <form action="../Admin.php" method="post">
<h1 class="text-center">Add Dish</h1>

   

	<div class="form-group"> <!-- Full Name -->
		<label for="full_name_id" class="control-label">Name</label>
		<input type="text" class="form-control" id="full_name_id" name="Name" placeholder="Enter Dish Name" required="true">
	</div>	

	<div class="form-group"> <!-- City-->
		<label for="city_id" class="control-label">Rate</label>
		<input type="text" class="form-control" id="city_id" name="Rate" placeholder="rate" required="true">
	</div>		


	<div class="form-group"> <!-- Street 1 -->
		<label for="street1_id" class="control-label">Description</label>
		<input type="text" class="form-control" id="street1_id" name="Description" placeholder="Enter Discription" required="true">
	</div>					


	<div class="form-group"> <!-- Street 1 -->
		<label for="street1_id" class="control-label">Day </label>
		<input type="text" class="form-control" id="street1_id" name="Day" placeholder="Enter Discription" required="true">
	</div>	

	<div class="form-group"> <!-- Submit Button -->
		<button type="submit" class="btn btn-primary" id="Update" name="AddDish"> Add Dish</button>
	</div>     
	
</form>			
                
                
                
	
        </div>
	
	<!-- jQuery -->
	<script src="../jss/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../jss/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../jss/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../jss/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="../jss/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="../jss/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="../jss/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="../jss/jquery.magnific-popup.min.js"></script>
	<script src="../jss/magnific-popup-options.js"></script>
	
	<script src="../jss/moment.min.js"></script>
	<script src="../jss/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="../jss/main.js"></script>

	</body>
</html>

