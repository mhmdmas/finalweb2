<?php


class DBController
{
 
     private $host = 'localhost';
     private $user = 'root';
     private $password = '';
     private $database = "shopee";
    

   
    

    
    function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo "Fail " . $this->con->connect_error;
        }
    }

   function __destruct()
    {
        $this->closeConnection();
    }

  
     function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }

   




}
