<?php
include_once "../../Models/CartModel.php";

    class CartController
    {
        public $model;
        function __construct()
        {
            $this->model = new CartModel();
        }
        function invoke()
        {
            if(isset($_SESSION['username']))
            {
                if(isset($_GET["action"]))
                {
                    $action = $_GET["action"];
                    if($action=="them")
                    {
                        $hang=array("id"=>$_GET["id"], "img"=>$_GET["img"], "ten"=>$_GET["ten"], "gia"=>$_GET["gia"], "soluong"=>$_GET["sl"]);
                        $this->model->ThemHang($hang);
                        header("Location: ../../Views/GioHang/index.php");
                    }
                    else if($action == "Xóa")
                    {
                        $this->model->XoaHang($_GET["id"]);
                        header("Location: ../../Views/GioHang/index.php");
                    }
                    else if($action == "Cập nhật")
                    {
                        $this->model->CapNhat($_GET["id"], $_GET['sl']);
                        header("Location: ../../Views/GioHang/index.php");
                    }
                }
                else
                {
                    header("Location: ../../Views/GioHang/index.php");
                }
            }
            else
            {
                header("Location: ../../Views/DangNhap/index.php");
            }
        }
        function TinhTien()
        {
            return $this->model->tinhtien();
        }
        function TinhSLSP()
        {
            return $this->model->tinhslsp();
        }
    }
?>