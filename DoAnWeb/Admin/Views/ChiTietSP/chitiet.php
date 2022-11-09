<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    echo
    "
        <nav aria-label='breadcrumb' style='font-size: 20px; margin-top: 20px'>
            <ol class='breadcrumb'>
                <li class='breadcrumb-item '><a href='../Home' >Sản phẩm</a></li> 
                <li class='breadcrumb-item '>Chi tiết sản phẩm</li> 
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
                <a href='../SuaSP?id=".$product->getid()."'><button id='btn_ctsp'>Sửa</button></a> <br><br>
                <a type='button' data-toggle='modal' data-target='#mymodal".$product->getId()."'><button id='btn_ctsp'>Xóa</button></a>
            </div>
            <div class='col-md-12 col-12'>
                <h1><strong>Mô tả sản phẩm</strong></h1>
                <p id='mota_ctsp'>$product->desc</p>
            </div>
        </div>
    ";
    echo 
        "
        <div id='mymodal".$product->getId()."' class='modal' style='margin-top: 10%'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h3>Bạn có chắc là muốn xóa sản phẩm ".$product->name." không ?</h3>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    </div>  
                                
                    <div style='padding-bottom: 20px; padding-top: 20px;'>
                        <a href='../XoaSP?id=".$product->getid()."' type='button' id='thanhtoan' class='btn-primary' style='margin-left: 10%; font-size: 20px; width: 30%; text-align: center;'>Có</a>
                        <button type='button' class='btn-primary' data-dismiss='modal' style='margin-left: 20%; font-size: 20px; width: 30%'>Không</button>
                    </div>
                </div>
            </div>
        </div>
        ";
    ?>
</body>
</html>