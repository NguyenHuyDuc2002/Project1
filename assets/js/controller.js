var R = {
    Init: function(){
        R.LoadData();
        R.LoadNumberOfItemInCart();
        R.RegisterEvent();
    }, //<--Method khởi tao
    RegisterEvent: function(){
        $('.add-to-cart').off('click').on('click', function(){
            var thong_tin_san_pham = $(this).closest('.col').attr('thong-tin-san-pham');
            console.log(thong_tin_san_pham);
            var object_thong_tin_sp = JSON.parse(thong_tin_san_pham);
            object_thong_tin_sp.soLuong = 1;
            alert(`Bạn đã thêm sản phẩm ${object_thong_tin_sp.tenSanPham} vào giỏ hàng!`);
            R.AddToCart(object_thong_tin_sp);
            R.LoadNumberOfItemInCart();
        })
    }, //<-- method đăng ký sự kiện
    //Từ method thứ 3 trở đi: Chính là các hàm do chúng ta viết
    LoadData: function(){
        $.get('assets/json/data-sp.json', function(response){
            // alert('Lay du lieu thanh cong!')
            R.RenderSanPham(response);
            //Sau khi kết thúc ajax, binding, thay đổi html.....
            //Gọi lại hàm đăng ký sự kiện
            R.RegisterEvent();
        })
    },
    RenderSanPham: function(response){
        //B1: Lặp qua tất cả các phần tử trong mảng listSanPham
        for (var i = 0; i < response.length; i++) {
            //B2: Tạo mã HTML cho mỗi sản phẩm: Mang 1 đoạn code html mẫu của sp vào và làm việc
    
            //B2.1 Extra: Tạo ra số lượng rating:
            var rating = "";
            for (var r = 0; r < response[i].rating; r++) {
                rating += '<i class="fa-solid fa-star"></i>';
            }
            var html = `
                <div class="col" thong-tin-san-pham='${JSON.stringify(response[i])}'>
                    <div class="card elm-relative">
                        <img src="${response[i].anhSanPham}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">${response[i].tenSanPham}</h5>
                            <p class="card-text">$${response[i].giaGoc} - ${response[i].giaKhuyenMai}</p>
                            <a href="javascript:void(0)" class="btn btn-light add-to-cart">Add To Card</a>
                    </div>
                    </div>
                </div>
                `;
            //B3: Dán mẫu này vào DOM tương ứng
            $('#danh-sach-sp').append(html);
        }
        R.RegisterEvent();
    },
    AddToCart: function(object_thong_tin_sp){
        //Sử dụng localstorege để lưu thông tin giỏ hàng
        console.log(object_thong_tin_sp)
        //B1: Lấy ra localstorage hiện tại để thêm vào giỏ hàng
        var carts = [];
        //B2: Kiểm tra localstorage "carts" có tồn tại hay không
        if(localStorage.getItem('carts') != null){
            //Nếu nó đã tồn tại thì phải sử dụng nó, nếu không sẽ bị ghi đè
            carts = JSON.parse(localStorage.getItem('carts'));
        }
        
        carts.push(object_thong_tin_sp);
        localStorage.setItem('carts', JSON.stringify(carts));

    },
    LoadNumberOfItemInCart: function(){
        var carts_as_string = localStorage.getItem('carts') ?? "[]";
        
        var carts = JSON.parse(carts_as_string);
        console.log(carts);
        var numberOfCarts = carts.length;
        $('#number-of-cart').text(numberOfCarts);
    }
}

R.Init();