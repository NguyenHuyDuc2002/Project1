<?php 
    require_once('repository/createConnection.php');

    function getSlideByCode1($code){
        $query = "select * from slide where code like '".$code."'";
        $result = executeQuery($query);
        return $result;
    }

    function getConfigByConfigCode1($code){
        $query = "select * from config where code like '".$code."'";

        $connection = createConnection();
        $result = $connection->query($query);
        $data = [];
        if($result -> num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($data, $row);
            }   
        }
        return reset($data);
    }
?>