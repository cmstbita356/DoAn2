<?php
include_once "../../Models/SanphamModel.php";
include_once "../../Models/MakerModel.php";
include_once "../../Models/db_module.php";

    class SanphamController
    {
        public $model;
        public $makermodel;
        function __construct()
        {
            $this->model = new SanphamModel();
            $this->makermodel = new MakerModel();
        }
        function xemSP()
        {
            $page = isset($_GET["page"])? $_GET["page"]:1;
            $page = is_numeric($page)?$page : 1;
            $pagesize = 6;
            $from = ($page-1)*$pagesize;
            $ListProduct = $this->model->getProductListLimited($from, $pagesize); 
            $total = ceil($this->model->CountAll()/$pagesize);
            include_once "../../Views/Home/XemSP.php";
        }
        function ChiTietSP()
        {
            if(isset($_GET['id']))
            {
                $product = $this->model->getProduct($_GET['id']);
                $price = number_format($product->price);
                include_once "../../Views/ChiTietSP/chitiet.php";
            }
        }
        function TimKiem()
        {
            if(isset($_GET['keyword']))
            {
                $link = null;
                ConnectDatabase($link);
                $key = $_GET['keyword'];
                $page = isset($_GET["page"])? $_GET["page"]:1;
                $page = is_numeric($page)?$page : 1;
                $pagesize = 6;
                $from = ($page-1)*$pagesize;
                $ListProduct = $this->model->getProductListLimitedByName($key, $from, $pagesize);
                $total = ceil($this->model->Count_TK($key)/$pagesize);
                include_once "../../Views/TimKiem/xuly.php";
            }
        }
        function HienthiSuaSP()
        {
            if(isset($_GET["id"]))
            {
                $pro = $this->model->getProduct($_GET['id']);
                if($pro->time == 'Cũ')
                {
                    $selectcu = 'selected';
                    $selectmoi = '';
                }
                else
                {
                    $selectmoi = 'selected';
                    $selectcu = '';
                }
            }
            include_once "../../Views/SuaSP/XemSuaSP.php";
        }
        function SuaSP()
        {
            if(isset($_POST['action']))
            {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $desc = $_POST['desc'];
                $img = $_POST['img'];
                $id_maker = $_POST['id_maker'];
                $time = $_POST['time'];
                $link = null;
                if($this->makermodel->checkId($id_maker))
                {
                    ConnectDatabase($link);
                    ExecuteNonQuery($link, 
                    "update `tbl_product` set `name`='".$name."',`price`=$price,`desc`='".$desc."',`img`='".$img."',`id_maker`=".$id_maker.",`time`='".$time."' WHERE id = $id");
                    header("Location: ../../Views/Home/index.php");
                }
                else
                {
                    echo "";
                }
                
            }
        }
        function XoaSP()
        {
            if(isset($_GET['id']))
            {
                $link = null;
                ConnectDatabase($link);
                $query = "update `tbl_product` set `state`= 0 where id = ".$_GET['id']."";
                ExecuteNonQuery($link, $query);
                header("Location: ../../Views/Home/index.php");
            }
        }
        function ThemSP()
        {
            if(isset($_GET['action']))
            {
                $name = $_GET['name'];
                $price = $_GET['price'];
                $desc = $_GET['desc'];
                $img = $_GET['img'];
                $id_maker = $_GET['id_maker'];
                $time = $_GET['time'];
                
                if($this->makermodel->CheckId($id_maker))
                {
                    $link = null;
                    ConnectDatabase($link);
                    ExecuteNonQuery($link, 
                    "insert into tbl_product (`name`, `price`, `desc`, `img`, `id_maker`, `time`, `state`) 
                    values ('".$name."', ".$price.", '".$desc."', '".$img."', ".$id_maker.", '".$time."', 1)");
                    header("Location: ../../Views/Home/index.php");
                }
                else
                {
                    header("Location: index.php?error=them");
                }
                
            }
        }
        function KhoiPhuc()
        {
            if(isset($_GET['id']))
            {
                $link = null;
                ConnectDatabase($link);
                $query = "update `tbl_product` set `state`= 1 where id = ".$_GET['id']."";
                ExecuteNonQuery($link, $query);
                header("Location: ../../Views/KhoiPhuc");
            }
        }
    }
?>