     <?php            
         include "../Admin.php";
      function CheckSessions(){
        $New = new Admin();
        $New->CheckSession();
                
    
        if(isset($_GET["Logout"])){
            unset($_SESSION["AdminEmail"]);
            unset($_SESSION["AdminPassword"]);
            header("location:../Index.php");
        }
                
      }
    
    
    
            ?>