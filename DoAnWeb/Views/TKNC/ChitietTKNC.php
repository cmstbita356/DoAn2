<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        echo "<div class='row mt-5'>";
        foreach($ListProduct as $Product)
        {
            echo
            "
            <div class='col-md-4 col-12' >
                <div class='card' style='width: 100%;'>
                    <a href='../ChiTietSP/index.php?id=".$Product->getId()."'>
                        <img class='card-img-top' src='".$Product->img."' alt='hình' style='width: 100%; height: 400px'>
                    </a>
                    <div class='card-body' style='text-align: center'>
                    <h2 class='card-title'>$Product->name</h2>
                    <p class='card-text'>Giá: ".number_format($Product->price)."</p>
                    <a href='../ChiTietSP/index.php?id=".$Product->getId()."' class='btn btn-danger' style='Font-size: 30px'>Xem chi tiết</a>
                    </div>
                </div>
            </div>
            ";
        }
        echo "</div>";
        
        
        
        echo "
        <div style='display: inline-flex; background-color: #A3A2A0; font-size: 20px; margin-left: 45%; margin-top: 10px;'>
        Page: ";
        for($i = 1; $i <= $total; $i++)
        {
            echo
            "
                <a type='button' style='color: black; margin-left: 5px;' onclick='TKNC($i)'>$i</a>|
            ";
        }
        echo "</div>"
    ?>
</body>
</html>