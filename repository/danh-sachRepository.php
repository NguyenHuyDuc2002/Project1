<?php 
    require_once('createConnection.php');

    function getChiTietDanhMucById($id){
        $query = "select * from categories where id = ".$id."";
        $result = executeQuery($query);
        return reset($result); // Retun 1 dong du lieu duy nhat
    }

    function getSanPhamByDanhMucId($danhMucId){
        $query = '
        select s.*
        from sanphamtrongdanhmuc as spdm
        join sanpham as s on spdm.sanPham_id = s.id
        where spdm.danhMuc_id = '.$danhMucId.'
    ';
    // var_dump($query);
    $result = executeQuery($query);
    return $result;
    }

    function getSanPhamByDanhMucIdAndFilterThongSo($danhMucId, $danhSachTsId){
        $query = '
        select s.*
        from sanphamtrongdanhmuc as spdm
        join sanpham as s on spdm.sanPham_id = s.id
        join sanpham_thongsokythuat as st on s.id = st.id_SanPham 
        where (spdm.danhMuc_id = '.$danhMucId.')
        and st.id_thongSo in ('.$danhSachTsId.')
    ';
    // var_dump($query);
    $result = executeQuery($query);
    return $result;
    }

    function getSanPhamByDanhMucIdAndFullFilter($danhMucId, $danhSachTsId, $min, $max){
    $query = '
        select DISTINCT  s.*
        from sanphamtrongdanhmuc as spdm
        join sanpham as s on spdm.sanPham_id = s.id
        join sanpham_thongsokythuat as st on s.id = st.id_SanPham 
        where (spdm.danhMuc_id = '.$danhMucId.')
    ';
    if($danhSachTsId != ""){
        $query = $query . ' and (st.id_thongSo in ('.$danhSachTsId.'))';
    }
    if($min > 0 && $max > 0){
        $query = $query . ' and (s.giaTien > '.$min.' and s.giaTien < '.$max.')';
    }
    // var_dump($query);
    $result = executeQuery($query);
    return $result;
    }

    function getLoaiThongSoKyThuat(){
        $query = "
            select ts.loaiThongSo
            from thongsokythuat as ts
            group by ts.loaiThongSo
        ";
        $result = executeQuery($query);
        return $result;
    }

    function getListThongSoByLoai($loai){
        $query = "
            select *
            from thongsokythuat as ts
            where loaiThongSo like '".$loai."'
        ";
        $result = executeQuery($query);
        return $result;
    }
?>