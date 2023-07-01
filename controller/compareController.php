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
                <a href="detail.php?Pro_ID='.$p['Pro_ID'].'" class="image">
                    <img class="img-fluid" src="'.$p['Pro_Avatar'].'" alt="Compare Product">
                </a>
                <a href="product-details.html" class="title">'.$p['Pro_Name'].'</a>
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
                <p>'.$p['Descriptions'].'.</p>
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
            <td class="pro-price">$ '.$p['price'].'</td>
            
            ';
        }
        echo $html;
    }
?>