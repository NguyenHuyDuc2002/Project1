<?php 
    require_once('repository/createConnection.php');


    function getProductInListProduct($listProduct){
        $query = "
            select *
            from sanpham
            where id in (".$listProduct.")
            order by id asc
        ";
        $result = executeQuery($query);
        return $result;
    }

    function getAllThongSoKyThuat(){
        $query = "select DISTINCT t.loaiThongSo from thongsokythuat as t";
        $result = executeQuery($query);
        return $result;
    }

    function getChiTietThongSoByIdSanPhamAndLoaiThongSo($idSanPham, $loaiThongSo){
        $query = "
            select t.tenThongSo
            from sanpham_thongsokythuat as st
            join thongsokythuat as t on st.id_thongSo = t.id
            where st.id_SanPham = ".$idSanPham."
              and st.id_thongSo in (
                select thongsokythuat.id
                from thongsokythuat
                where loaiThongSo = '".$loaiThongSo."'
              )
        ";
        
        $result = executeQuery($query);
        return $result;
    }
?>
