<?php 
    require_once('repository/headerRepository.php');
    $logo = getConfigByConfigCode("logo");
    $hotline = getConfigByConfigCode("hotline");
    $ParentMenu = getParentMenu();

    function renderMenu(){
        global $ParentMenu;
        $html = '';
        foreach($ParentMenu as $m){
            $ChildMenu = getChildMenu($m['id']);
            if(count($ChildMenu) > 0){
                $html = $html . '
                <li class=""><a href="javascript:void(0)">'.$m['Menu_Name'].' <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown">
                       '.renderChildMenu($m['id']).'
                    </ul>
                </li>
            ';
            }
            else{
                $html = $html . '<li><a href="javascript:void(0)">'.$m['Menu_Name'].'</a></li>';
            }
            
        }
        echo $html;
    }

    function renderChildMenu($parentId){
        $ChildMenu = getChildMenu($parentId);
        $html = '';
        foreach($ChildMenu as $m){
            $html = $html . '
                <li><a href="javascript:void(0)">'.$m['Menu_Name'].'</a></li>
            ';
        }
        return $html;
    }

    function renderCategory(){
        $ParentCategory = getParentCategory();
        $html = '';
        foreach($ParentCategory as $c){
            $ChildCategory = getChildCategory($c['Cate_ID']);
            if(count($ChildCategory) > 0){
                $html = $html . '
            <li class="menu-item-has-children"><a href="list.php?Cate_ID='.$c['Cate_ID'].'">'.$c['Cate_Name'].'</a>
                <!-- Mega Category Menu Start -->
                <ul class="category-mega-menu dropdown">
                    <li class="menu-item-has-children">
                        <a href="list.php?Cate_ID='.$c['Cate_ID'].'"></a>
                        <ul class="dropdown">
                            '.renderChildCategory($c['Cate_ID']).'
                        </ul>
                    </li>
                </ul><!-- Mega Category Menu End -->
            </li>
            ';
            }
            else{
                $html = $html . '<li><a href="list.php?Cate_ID='.$c['Cate_ID'].'">'.$c['Cate_Name'].'</a></li>';
            }
            
        }
        echo $html;
        
    }

    function renderChildCategory($parentId){
        $ChildCategory = getChildCategory($parentId);
        $html = '';
        foreach($ChildCategory as $c){
            $html = $html . '
                <li><a href="list.php?Cate_ID='.$c['Cate_ID'].'">'.$c['Cate_Name'].'</a></li>
            ';
        }   
        return $html;
    }
?>

    
    