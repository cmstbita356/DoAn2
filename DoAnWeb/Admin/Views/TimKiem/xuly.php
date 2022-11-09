<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    echo 
    "   
        <div style='text-align: center'>
            <h1>Kết quả tìm kiếm của '".$key."'</h1>
        </div>
    ";
    echo
    "
        <table style='font-size: 20px; margin-top: 10px;'>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th> 
                <th></th> 
            </tr>
    ";
    foreach($ListProduct as $Product)
    {
        echo
        "
            <tr>
                <td style='text-align: center; width: 50px;'>".$Product->getid()."</td>
                <td style='text-align: center; width: 400px;'>$Product->name</td>
                <td style='text-align: center; width: 200px;'>".number_format($Product->price)."</td>
                <td><img src='".$Product->img."' style='width: 200px;'></td>
                <td style='text-align: center; width: 200px;'>
                <a href='../ChiTietSP/index.php?id=".$Product->getid()."'>Xem chi tiết</a><br>
                <a href='../SuaSP/index.php?id=".$Product->getid()."'>Sửa</a><br>
                <a href='../XoaSP/index.php?id=".$Product->getid()."'>Xóa</a>
                </td>
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
            <a style='color: black; margin-left: 5px;' href='./?page=".$i."&keyword=$key'>$i</a>|
        ";
    }
    echo "</div>";
    ?>
</body>
</html>