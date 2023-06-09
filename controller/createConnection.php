<?php 
    function createConnection(){
        $host = "localhost";
        $database = "Project_1";
        $username = "root";
        $password = "your_password";

        $connection = new mysqli($host,$username,$password,$database);
        if($connection -> error){
            echo "Error connect!";
        }
        else{
            return $connection;
        }
    }
?>