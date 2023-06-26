var SS = {
    Init: function(){
        SS.RegisterEvent();
    },
    RegisterEvent: function(){
        //Viet su kien khi click vao class
        $('.add-compare-item').off('click').on('click', function(){
            var id = $(this).attr('item-id');
            SS.SaveCompareItemToLocalStorage(id);
        })

    },
    SaveCompareItemToLocalStorage: function(id){
        //Gia su se goi localstorage la compareList
        //Tao 1 mang luu cac san pham compare
        var arr_compare = [];
        //B1: Kiem tra xem comparelist co ton tai khong
        if(localStorage.getItem('compareList') !== null){
            //B1: GET compareListHienTai
            var listIdNow = JSON.parse(localStorage.getItem('compareList'));
            //B2: Them id moi vao mang hien tai
            listIdNow.push(id);
            //B3: Ghi de cai localstorage compareList
            localStorage.setItem('compareList', JSON.stringify(listIdNow));
        }
        else{
            arr_compare.push(id);
            //Tao ra compareList
            localStorage.setItem('compareList', JSON.stringify(arr_compare));
        }
        //Dieu huong sang trang compare.php
        var lsId = JSON.parse(localStorage.getItem("compareList"))
        //Chuyen tu array -> string vd(1,2,3)
        var srt_lsID = lsId.toString();
        //Dieu huong trang web
        var url = 'compare.php?listId=' + srt_lsID;
        window.location.href=url;
    }

}
SS.Init();