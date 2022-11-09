<?php
    include_once "db_module.php";
    include_once "DonHang.php";
    include_once "UserModel.php";
    include_once "CartModel.php";
    class DonHangModel
    {
        function Create()
        {
            $link = null;
            ConnectDatabase($link);
            $id_user = $this->getIdUser();
            $thanhtien = $this->getThanhTien();
            $date = date("d/m/Y");
            ExecuteNonQuery($link, "iNSERT INTO `tbl_donhang` (id_user, thanhtien, date, status) VALUES ($id_user, $thanhtien,'$date','1')");
            foreach($_SESSION['giohang'] as $gh)
            {
                $id_dh = $this->getMaxId();
                $id_product = $gh['id'];
                $price = $gh['gia'];
                $sl = $gh['soluong'];
                ExecuteNonQuery($link, "INSERT INTO `tbl_chitietdh`(`id_dh`, `id_product`, `price`, `soluong`) VALUES ($id_dh, $id_product, $price, $sl)");
            }
        }
        function getIdUser()
        {
            $user = new UserModel();
            return $user->getId();
        }
        function getThanhTien()
        {
            $cart = new CartModel();
            return $cart->tinhtien();
        }
        function getMaxId()
        {
            $link = null;
            ConnectDatabase($link);
            $result = ExecuteQuery($link, "select MAX(id) from tbl_donhang");
            $row = mysqli_fetch_row($result);
            return $row[0];
        }
    }
?>