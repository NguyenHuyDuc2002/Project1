var DS = {
    Init: function(){
        
        DS.RegisterEvent();

    },
    RegisterEvent: function(){
        $('#sp-filter').off('click').on('click', function(){
            var arry_ts_duoc_chon = [];
            var min_gia = 0;
            var max_gia = 0;
            $('.tskt-chechbox').each(function(index, element){
                if($(element).is(':checked')){
                    var thongSoId = $(element).val();
                    arry_ts_duoc_chon.push(thongSoId);
                }
            })
            $('.price-radio').each(function(index, element){
                if($(element).is(':checked')){
                    var minDuocChon = $(element).attr('min');
                    var maxDuocChon = $(element).attr('max');
                    min_gia = minDuocChon;
                    max_gia = maxDuocChon;
                }
            })
            console.log(arry_ts_duoc_chon);
            var thamSoTimKiemTSKT = arry_ts_duoc_chon.join(',');
            var currentURl = window.location.href;
            var newUrl = currentURl + '&tsfiler='+thamSoTimKiemTSKT;
            if(min_gia > 0 && max_gia > 0){
                newUrl = newUrl + '&min=' + min_gia + '&max=' + max_gia;
            }
            window.location.href = newUrl;
        })

    },

}

DS.Init();