<?php

   class DataBaseConnection{

        public $ServerName = "localhost";
        public $UserName    = "root";
        public $Password      = "";
        public $DataBase      = "recipe_app";
        
        public function Connect(){
            $Connection = mysqli_connect($this->ServerName , $this->UserName , $this->Password , $this->DataBase );
            if($Connection){
                return $Connection;
            }
            else{
                echo "<h1>Error in Connecting DataBase</h1>";
            }
        }
    }

    



?>