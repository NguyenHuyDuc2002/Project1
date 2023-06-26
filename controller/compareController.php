<?php   
    require_once('repository/compareRepository.php');
    $str_lsId = $_GET['listId'];

    function renderCompareProductRow_1(){
        global $str_lsId;
        $products = getProductInListProduct($str_lsId);
        $html = '';
        foreach($products as $p){
            $html = $html . '
            <td class="product-image-title">
                <a href="chi-tiet.php?sanPhamId='.$p['id'].'" class="image">
                    <img class="img-fluid" src="'.$p['avatarSanPham'].'" alt="Compare Product">
                </a>
                <a href="product-details.html" class="title">'.$p['tenSanPham'].'</a>
            </td>
            ';
        }
        echo $html;
    }

    function renderCompareProductRow_2(){
        global $str_lsId;
        $products = getProductInListProduct($str_lsId);
        $html = '';
        foreach($products as $p){
            $html = $html . '
            <td class="pro-desc">
                <p>'.$p['moTa'].'.</p>
            </td>
            
            ';
        }
        echo $html;
    }

    function renderCompareProductRow_3(){
        global $str_lsId;
        $products = getProductInListProduct($str_lsId);
        $html = '';
        foreach($products as $p){
            $html = $html . '
            <td class="pro-price">$ '.$p['giaTien'].'</td>
            
            ';
        }
        echo $html;
    }
?>