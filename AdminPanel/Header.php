<?php
function DisplayHeader(){
    echo '
    <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="../Index.php" class="logo"><b>Recipe App</b></a>
            <div class="top-menu" style="border:0">
            	<ul class="pull-right">
                   <li style="margin-top:25%; margin-left:-25%;">
                     <a class="logout topLogout" href="AdminPanel.php?Logout=1">Logout</a>
                   </li>
            	</ul>
            </div>
        </header>
    ';
}




?>