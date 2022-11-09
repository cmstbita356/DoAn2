<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    echo
    "
        <table style='font-size: 20px; margin-top: 10px;'>
            <tr>
                <th style='text-align: center; '>Id đơn hàng</th>
                <th style='text-align: center; '>Id người dùng</th>
                <th style='text-align: center; '>Thành tiền</th>
                <th style='text-align: center; '>Ngày</th> 
                <th style='text-align: center; '></th> 
            </tr>
    ";
    foreach($Listdh as $dh)
    {
        echo
        "
            
                <tr>
                <td style='text-align: center; width: 150px;'>".$dh->id."</td>
                <td style='text-align: center; width: 150px;'>$dh->id_user</td>
                <td style='text-align: center; width: 200px;'>".number_format($dh->thanhtien)."</td>
                <td style='text-align: center; width: 200px;'>$dh->date</td>
                <td style='text-align: center; width: 200px;'>
                    <a href='../ChitietDH/index.php?id=$dh->id'>Xem chi tiết</a><br>
                    <a type='button' style='color: green;' data-toggle='modal' data-target='#mymodal".$dh->id."'>Xong</a><br>
                </td>
                </tr>
        ";
    }
    echo "</table>";
    foreach($Listdh as $dh)
    {
        echo 
        "
        <div id='mymodal".$dh->id."' class='modal' style='margin-top: 10%'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h3>Bạn có chắc là muốn thay đổi trạng thái đơn hàng $dh->id không ?</h3>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    </div>  
                                
                    <div style='padding-bottom: 20px; padding-top: 20px;'>
                        <a href='../DonHang/changestatus.php?id=$dh->id' type='button' id='thanhtoan' class='btn-primary' style='margin-left: 10%; font-size: 20px; width: 30%; text-align: center;'>Có</a>
                        <button type='button' class='btn-primary' data-dismiss='modal' style='margin-left: 20%; font-size: 20px; width: 30%'>Không</button>
                    </div>
                </div>
            </div>
        </div>
        ";
    }
    echo "
    <div style='display: inline-flex; background-color: #A3A2A0; font-size: 20px; margin-left: 45%; margin-top: 10px;'>
    Page: ";
    for($i = 1; $i <= $total; $i++)
    {
        echo
        "
            <a style='color: black; margin-left: 5px;' href='./?page=".$i."'>$i</a>|
        ";
    }
    echo "</div>"
    ?>
</body>
</html>