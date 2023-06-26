<?php 
    require_once('layout/header.php');
    require_once('controller/indexController.php');
?>
  <div class="khoi-main">
        <div id="khoi-danh-sach-gio-hang">
            <div class="container">
                <div class="gio-hang-item">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Ảnh sản phẩm
                                </th>
                                <th>
                                    Tên sản phẩm
                                </th>
                                <th>
                                    Số lượng
                                </th>
                                <th>
                                    Giá tiền
                                </th>
                                <th>
                                    Action
                                </th>

                            </tr>
                        </thead>
                        <tbody id="binding-gio-hang-item">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <form class="d-flex">

                        <button class="btn btn-outline-success" type="submit">
                            <span><i class="fa-solid fa-cart-shopping"></i></span>
                            <span>Giỏ Hàng</span>
                            <span>
                                <div id="number-of-cart">0</div>
                            </span>
                        </button>
                    </form>
                </div>
    </div>


<?php 
    require_once('layout/footer.php');
?>