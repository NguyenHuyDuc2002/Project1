<?php
    require_once("repository/createConnection.php");

    function getChiTietSanPham($sanPhamId){
        $query = 'select * from sanpham where id = ' . $sanPhamId;
        $result = executeQuery($query);
        return reset($result);

    }

    function getLoaiThongSoSanPhamBySanPhamId($sanPhamId){
        $query = '
            SELECT DISTINCT t.loaiThongSo
            from sanpham as s
            join sanpham_thongsokythuat as st on s.id = st.id_SanPham
            join thongsokythuat as t on st.id_thongSo = t.id
            where s.id = '.$sanPhamId.'
        ';
        $result = executeQuery($query);
        return $result;
    }

    function getChiTietThongSoKyThuatByLoaiThongSo($sanPhamId, $loaiThongSo){
        $query = "
            select t.id,t.tenThongSo
            from sanpham as s
            join sanpham_thongsokythuat as st on s.id = st.id_SanPham
            join thongsokythuat as t on st.id_thongSo = t.id
            where s.id = ".$sanPhamId." and t.loaiThongSo like '".$loaiThongSo."'
        ";
        // var_dump($query);
        $result = executeQuery($query);
        return $result;
    }

    function getSanPhamCungDanhMuc($sanPhamId){
        $query = '
        SELECT DISTINCT s.*
        from sanpham as s
        join sanphamtrongdanhmuc as sd on s.id = sd.sanPham_id
        where sd.danhMuc_id in (
            select DISTINCT sd.danhMuc_id
                    from sanpham as s
                    join sanphamtrongdanhmuc as sd on s.id = sd.sanPham_id
                    where s.id = '.$sanPhamId.'
        )
        ';
        $result = executeQuery($query);
        return $result;
    }
?>