<?php

function DisplaySideBar($One, $Two, $Three, $Four, $Four2, $Five, $Six, $Seven, $Eight, $Nine){
    echo '
    <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><img src="Admin.png" class="img-circle" width="60"></p>
              	  <h5 class="centered">Admin</h5>
              	  	
                  <li class="mt">
                      <a class="'.$One.'" href="AdminPanel.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="my">
                      <a class="'.$Four.'" href="AllProducts.php">
                      <i class="fa fa-th"></i>
                          <span>Products</span>
                      </a>
                  </li> 
                  
                  <li class="my">
                      <a class="'.$Four2.'" href="AllCategories.php">
                      <i class="glyphicon glyphicon-th-large"></i>
                      <span>Categories</span>
                      </a>
                  </li>
                   <li class="my">
                      <a class="'.$Four2.'" href="AllBrands.php">
                      <i class="glyphicon glyphicon-th-large"></i>
                      <span>Brands</span>
                      </a>
                  </li>

                 
                 
                 
                 



             


                  
                  
                  
              <li class="my">
              <a class="'.$Five.'" href="AllRecipes.php">
                  <i class="glyphicon glyphicon-cutlery"></i>
                  <span>Recipes</span>
              </a>
          </li>
                  
                  <li class="my">
                  <a class="'.$Six.'" href="AllMessages.php">
                      <i class="glyphicon glyphicon-comment"></i>
                      <span>Messages</span>
                  </a>
              </li>
                  
                 
              <li class="my">
              <a class="'.$Seven.'" href="EditAdminProfile.php">
                  <i class="glyphicon glyphicon-wrench"></i>
                  <span>Settings</span>
              </a>
          </li>

                    

                  <li class="mt" style="margin-top:0">
                      <a class="'.$Nine.'" href="AdminPanel.php?Logout=1">
                          <i class="glyphicon glyphicon-log-out"></i>
                          <span>Logout</span>
                      </a>
                  </li>
                 
                        
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
    
    
    ';

}


?>