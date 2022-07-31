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

                  <li class="sub-menu">
                      <a class="'.$Two.' href="javascript:;" >
                          <i class="glyphicon glyphicon-random"></i>
                          <span>Orders</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="NewOrders.php">New Orders</a></li>
                          <li><a  href="OrdersInProgress.php">In Progress</a></li>
                          <li><a  href="OrdersDelivered.php">Delivered</a></li>
                      </ul>
                  </li>
                 
                 
                  <li class="my">
                  <a class="'.$Three.'" href="AllCustomers.php">
                      <i class="glyphicon glyphicon-user"></i>
                      <span>Customers</span>
                  </a>
              </li>

              <li class="sub-menu">
              <a class="'.$Eight.' href="javascript:;" >
              <i class="fa fa-users"></i>
                  <span>Employees</span>
              </a>
              <ul class="sub">
                  <li><a  href="AddEmployee.php">Add New</a></li>
                  <li><a  href="AllEmployees.php">All Employees</a></li>
                  
              </ul>
          </li>



             


                  <li class="sub-menu">
                      <a class="'.$Four.' href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Products</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="AddProduct.php">Add New</a></li>
                          <li><a  href="AllProducts.php">All Products</a></li>
                          
                         
                      </ul>
                  </li>
                  <li class="sub-menu">
                  <a class="'.$Four2.' href="javascript:;" >
                      <i class="glyphicon glyphicon-th-large"></i>
                      <span>Categories</span>
                  </a>
                  <ul class="sub">
                      <li><a  href="AddCategory.php">Add New</a></li>
                      <li><a  href="AllCategories.php">All Categories</a></li>
                      
                     
                  </ul>
              </li>
                  
              <li class="my">
              <a class="'.$Five.'" href="LowStock.php">
                  <i class="fa fa-warning"></i>
                  <span>Low Stock</span>
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