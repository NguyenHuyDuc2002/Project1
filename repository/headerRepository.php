<?php 
    require_once('createConnection.php');


    function getConfigByConfigCode($code){
        $query = "select * from config where code like '".$code."'";
        $connection = createConnection();
        $result = $connection->query($query);
        $data = [];
        if($result -> num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($data, $row);
            }   
        }
        $configValue = '';
        if(count($data) > 0){
            $_first =reset($data);
            
            $configValue = reset($data)['VaL'];
        }
        return $configValue;
    }

    function getCategoryByParentId($parentId){
        $query = "";
        if($parentId == null){
            $query = "select * from categories where parentId is null";    
        }
        if($parentId != null){
            $query = "select * from categories where parentId = ".$parentId."";    
        }
        //the above is temporary 
    }

    function getParentMenu(){
        $query = "select * from menu where parentId is null";
        //temp
        $connection = createConnection();
        $result = $connection->query($query);
        $data = [];
        if($result -> num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($data, $row);
            }   
        }
        return $data;
    }

    function getChildMenu($parentId){
        $query = "select * from menu where parentId = ".$parentId."";
        //temp
        $connection = createConnection();
        $result = $connection->query($query);
        $data = [];
        if($result -> num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($data, $row);
            }   
        }
        return $data;
    }

    function getParentCategory(){
        $query = "select * from categories where parentId is null";
        //temp
        $connection = createConnection();
        $result = $connection->query($query);
        $data = [];
        if($result -> num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($data, $row);
            }   
        }
        return $data;
    }
    function getChildCategory($parentId){
        $query = "select * from categories where parentId = ".$parentId."";
        //temp
        $connection = createConnection();
        $result = $connection->query($query);
        $data = [];
        if($result -> num_rows > 0){
            while($row = $result->fetch_assoc()){
                array_push($data, $row);
            }   
        }
        return $data;
    }
?>
