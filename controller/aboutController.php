<?php

    require_once('repository/aboutRepository.php');

    $moTaNho_Khoi1 = getConfigByConfigCode1("GioiThieu-moTaNho-Khoi1");
    $moTaLon_Khoi1 = getConfigByConfigCode1("GioiThieu-moTaLon-Khoi1");
    $noiDung_Khoi1 = getConfigByConfigCode1("GioiThieu-noiDung-Khoi1");
    $anh_Khoi1 = getConfigByConfigCode1("GioiThieu-anh-Khoi1");


    
    function renderSlideMyTeam(){
        $slide_my_team = getSlideByCode1("slide_about");
        $html = '';
        foreach($slide_my_team as $s){
            $html = $html . '
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member mb-30">
                    <div class="team-thumb">
                        <img src="'.$s['slide_img'].'" alt="">
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h3>'.$s['title_1'].'</h3>
                        <h6>'.$s['title_2'].'</h6>
                        
                    </div>
                </div>
            </div> <!-- end single team member -->
            ';
        }
        echo $html;
    }
?>