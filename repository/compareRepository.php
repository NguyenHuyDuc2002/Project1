<?php 
    require_once('repository/createConnection.php');


    function getProductInListProduct($listProduct){
        $query = "
            select *
            from products
            where Pro_ID in (".$listProduct.")
            order by Pro_ID asc
        ";
        $result = executeQuery($query);
        return $result;
    }

    function getAllSpecification(){
        $query = "select DISTINCT s.types from specification as s";
        $result = executeQuery($query);
        return $result;
    }

    function getDetailSpecificationByProductIdAndType($Pro_ID, $type){
        $query = "
            select s.names
            from products_specification as ps
            join specification as s on ps.id_specification = s.id
            where ps.id_product = ".$Pro_ID."
              and ps.id_specification in (
                select s.id
                from specification
                where types = '".$type."'
              )
        ";
        
        $result = executeQuery($query);
        return $result;
    }
?>
