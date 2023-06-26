var GH = {
    Init: function () {
        GH.LoadGioHang();
        GH.LoadNumberOfItemInCart();
        GH.RegisterEvent();
    }, //<--Method khởi tao
    RegisterEvent: function () {
        $('.delete-cart-item').off('click').on('click', function () {
            var checker = window.confirm("Bạn có chắc chắn muốn xóa?")
            if (checker == true) {
                var ten_sp_can_xoa = $(this).attr('ten-san-pham');
                //Load het ra gio hang
                var carts = JSON.parse(localStorage.getItem("carts"));
                //Tim thanh phan gio hang can xoa
                for(var i = 0; i < carts.length; i++){
                    if(carts[i].tenSanPham == ten_sp_can_xoa){
                        console.log(ten_sp_can_xoa);
                        carts.splice(i,1);
                        break;
                    }
                }
                alert('Xoa gio hang thanh cong!');
                //Set lai localstorage gio hang
                localStorage.setItem('carts', JSON.stringify(carts));
                GH.LoadGioHang();
                GH.LoadNumberOfItemInCart();
            }
        })
    }, //<-- method đăng ký sự kiện
    //Từ method thứ 3 trở đi: Chính là các hàm do chúng ta viết
    LoadGioHang: function () {
        //Xóa hết các dòng ban đầu
        $('#binding-gio-hang-item').html("");
        var carts = JSON.parse(localStorage.getItem("carts"));
        console.log(carts);
        if (carts != null) {
            //B1: Lặp qua tất cả các phần tử của carts
            carts.forEach(element => {
                var html = `
                <tr>
                    <td><img src="${element.anhSanPham}" class="img-gio-hang"></td>
                    <td>${element.tenSanPham}</td>
                    <td>${element.soLuong}</td>
                    <td><del>$ ${element.giaGoc}</del> <span>$ ${element.giaKM}</span></td>
                    <td><a href="javascript:void(0)" class="delete-cart-item" ten-san-pham="${element.tenSanPham}"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
                `;
                $('#binding-gio-hang-item').append(html);
            });
        }
        GH.RegisterEvent();
    },
    LoadNumberOfItemInCart: function () {
        var carts_as_string = localStorage.getItem('carts');
        var carts = JSON.parse(carts_as_string);
        console.log(carts);
        var numberOfCarts = carts.length;
        $('#number-of-cart').text(numberOfCarts);
    }

}

GH.Init();