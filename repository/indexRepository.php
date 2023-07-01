<?php 
    require_once('createConnection.php');

    function getSlideByCode($code){
        $query = "select * from slide where code like '".$code."'";
        $result = executeQuery($query);
        return $result;
    }
    function getAllCategory(){
        $query = "select * from categories";
        $result = executeQuery($query);
        return $result;
    }

    function getProductByCategoryId($Cate_ID){
        $query = '
            select p.*
            from categories_products as ctpd
            join products as p on ctpd.Pro_ID = p.Pro_ID
            where ctpd.Cate_ID = '.$Cate_ID.'
        ';
        $result = executeQuery($query);
        return $result;
    }
?>