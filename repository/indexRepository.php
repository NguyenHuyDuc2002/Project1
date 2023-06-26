<?php 
    require_once('createConnection.php');

    function getSlideByCode($slideCode){
        $query = "select * from slide where code like '".$slideCode."'";
        $result = executeQuery($query);
        return $result;
    }
    function getAllDanhMuc(){
        $query = "select * from danhMuc";
        $result = executeQuery($query);
        return $result;
    }

    function getSanPhamByDanhMucId($danhMucId){
        $query = '
            select s.*
            from sanphamtrongdanhmuc as spdm
            join sanpham as s on spdm.sanPham_id = s.id
            where spdm.danhMuc_id = '.$danhMucId.'
        ';
        $result = executeQuery($query);
        return $result;
    }
?>