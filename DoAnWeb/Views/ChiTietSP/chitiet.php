<?php
if(isset($_SESSION['username']))
{
    $str = 
    "
    <a href='../GioHang/xulygiohang.php?action=them&id=".$product->getId()."&img=$product->img&ten=$product->name&gia=$product->price&sl=1'>
        <button id='btn_ctsp'>Vào giỏ hàng</button>
    </a>
    ";
}
else
{
    $str = 
    "
    <a data-toggle='modal' data-target='#mymodal'>
        <button id='btn_ctsp'>Vào giỏ hàng</button>
    </a>
    ";
}
    echo
    "
        <nav aria-label='breadcrumb' style='font-size: 20px; margin-top: 20px'>
            <ol class='breadcrumb'>
                <li class='breadcrumb-item '><a href='../Home' >Trang chủ</a></li> 
                <li class='breadcrumb-item active'>Sản phẩm</li> 
                <li class='breadcrumb-item active'>$product->name</li> 
            </ol>
        </nav>
        <div class='row'>
            <div class='col-md-6 col-12'>   
                <img id='img_ctsp' src='$product->img' alt=''>
            </div>
            <div class='col-md-6 col-12'>
                <h1><strong>Chi tiết sản phẩm</strong></h1>
                <p id='name_ctsp'>$product->name</p>
                <p id='price_ctsp'>$price VNĐ</p>
                <p id='nsx_ctsp'>Nhà sản xuất: ".$this->makermodel->GetNameById($product->id_maker)."</p>
                <p id='state_ctsp'>Trạng thái xe: $product->time</p>
                $str
            </div>
            <div class='col-md-12 col-12'>
                <h1><strong>Mô tả sản phẩm</strong></h1>
                <p id='mota_ctsp'>$product->desc</p>
            </div>
        </div>
    ";
    if(!isset($_SESSION["username"]))
    {
        echo
        "
        <div id='mymodal' class='modal' style='margin-top: 10%'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                            <h3>Vui lòng đăng nhập trước</h3>
                            <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    </div>  
                    <div style='padding-bottom: 20px; padding-top: 20px;'>
                        <a href='../DangNhap/index.php' type='button' class='btn-primary' style='margin-left: 10%; font-size: 20px; width: 30%; text-align: center'>Đồng ý</a>
                        <button type='button' class='btn-primary' data-dismiss='modal' style='margin-left: 20%; font-size: 20px; width: 30%'>Không</button>
                    </div>
                </div>
            </div>
        </div>
        ";
    }
    
    echo "<p style='font-size: 40px;'>Bình luận</p>";
    echo "<div class='border mt-5 mb-5' id='binhluan'>";
        include_once '../Comment/index.php';
    echo "</div>";
?>