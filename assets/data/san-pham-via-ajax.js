$(document).ready(function(){
    $.get('assets/json/data-sp.json', function(response){
        renderListSanPham(response);
        $('.add-to-cart').on('click', function(){
            alert('Add san pham vao gio hang thanh cong!');
        })
    
    })



    // $('.add-to-cart').on('click', function(){
    //     alert('Add san pham vao gio hang thanh cong!');
    // })
    
    function renderListSanPham(response){
        //B1: Lặp qua tất cả các phần tử trong mảng listSanPham
        for (var i = 0; i < response.length; i++) {
            //B2: Tạo mã HTML cho mỗi sản phẩm: Mang 1 đoạn code html mẫu của sp vào và làm việc
            var html = `
                <div class="col">
                    <div class="card elm-relative">
                        <img src="${response[i].anhSanPham}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">${response[i].tenSanPham}</h5>
                            <p class="card-text">$${response[i].giaGoc} - $${response[i].giaKhuyenMai}</p>
                            <a href="javascript:void(0)" class="btn btn-light add-to-cart">Add To Card</a>
                    </div>
                    </div>
                </div>
                `;
            //B3: Dán mẫu này vào DOM tương ứng
            $('#danh-sach-sp').append(html);
        }
    }
})
