<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    echo
    "
        <nav aria-label='breadcrumb' style='font-size: 20px; margin-top: 20px'>
                <ol class='breadcrumb'>
                    <li class='breadcrumb-item '><a href='../DonHang' >Đơn hàng</a></li> 
                    <li class='breadcrumb-item active'>ID đơn hàng: ".$_GET['id']."</li> 
                </ol>
        </nav>
        <table style='font-size: 20px; margin-top: 10px;'>
            <tr>
                <th style='text-align: center; '>Id đơn hàng</th>
                <th style='text-align: center; '>Id sản phẩm</th>
                <th style='text-align: center; '>Giá</th>
                <th style='text-align: center; '>Số lượng</th> 
                <th style='text-align: center; '></th> 
            </tr>
    ";
    foreach($Listdh as $dh)
    {
        echo
        "
            
                <tr>
                <td style='text-align: center; width: 150px;'>".$dh->id_dh."</td>
                <td style='text-align: center; width: 150px;'>$dh->id_product</td>
                <td style='text-align: center; width: 200px;'>".number_format($dh->price)."</td>
                <td style='text-align: center; width: 200px;'>$dh->soluong</td>
                </tr>
        ";
    }
    echo "</table>";
    
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