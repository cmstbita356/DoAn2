<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    echo
    "
        <form id='suasp' action='xulysuasp.php' method='post'>
            <h1 style='text-align: center'>Thêm sản phẩm</h1>
            <div class='form-group'>
                <label for='id'>Id sản phẩm:</label>
                <input type='text'  value='".$pro->getId()."' disabled>
                <input type='text' name='id' value='".$pro->getId()."' style='display: none'>
            </div>
            <div class='form-group'>
                <label for='name'>Tên sản phẩm:</label>
                <input type='text' id='name' name='name' value='$pro->name'>
            </div>
            <div class='form-group'>
                <label for='price'>Giá sản phẩm:</label>
                <input type='text' id='price' name='price' value='$pro->price'>
            </div>
            <div class='form-group'>
                <label for='desc'>Mô tả:</label><br>
                <textarea id='desc' name='desc' rows='4' cols='55'>
                    $pro->desc
                </textarea>
            </div>
            <div class='form-group'>
                <label for='img'>Hình ảnh: </label>
                <input type='text' id='img' name='img' maxlength='1000' value='$pro->img'>
            </div>
            <div class='form-group'>
                <label for='id_maker'>Id nhãn hiệu: </label>
                <input type='number' min='1' max = '".$this->makermodel->getMaxID()."' id='id_maker' name='id_maker' value='$pro->id_maker'>
            </div>
            <div class='form-group'>
                <label for='time'>Thời gian: </label>
                <select id='time' name='time' class='form-control form-control-lg select' style='height: 50px; width: 90%; font-size: 20px;'>
                    <option value='Cũ' $selectcu >Cũ</option>
                    <option value='Mới' $selectmoi >Mới</option>
                </select>
            </div>
            <div class='form-group'>
                <input id='submit-sua' type='submit' Value='Sửa sản phẩm' name='action'>
            </div>
        </form>
    ";
    ?>
</body>
</html>