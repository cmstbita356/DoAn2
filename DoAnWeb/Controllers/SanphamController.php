<?php
include_once "../../Models/SanphamModel.php";
include_once "../../Models/MakerModel.php";

class SanphamController
{
    public $model;
    public $makermodel;
    function __construct()
    {
        $this->model = new SanphamModel();
        $this->makermodel = new MakerModel();
    }
    function invoke()
    {   
        if(isset($_GET['id']))
        {
            $product = $this->model->getProduct($_GET['id']);
            $price = number_format($product->price);
            include_once "../../Views/ChiTietSP/chitiet.php";
        }
        else if(isset($_GET['keyword']))
        {
            $key = $_GET['keyword'];
            $page = isset($_GET["page"])? $_GET["page"]:1;
            $page = is_numeric($page)?$page : 1;
            $pagesize = 6;
            $from = ($page-1)*$pagesize;
            $ListProduct = $this->model->getProductListLimitedByName($key, $from, $pagesize);
            $total = ceil($this->model->Count_TK($key)/$pagesize);
            include_once "../../Views/Timkiem/Timkiem.php";
        }
        else 
        {
            if(isset($_GET['time']) && isset($_GET['maker']) && isset($_GET['price']))
            {
                $page = isset($_GET["page"])? $_GET["page"]:1;
                $page = is_numeric($page)?$page : 1;
                $pagesize = 6;
                $from = ($page-1)*$pagesize;
                $ListProduct = $this->model->getProductListLimited_TKNC($_GET['time'], $_GET['maker'], $_GET['price'], $from, $pagesize); 
                $total = ceil($this->model->Count_TKNC($_GET['time'], $_GET['maker'], $_GET['price'])/$pagesize);
                include_once "../../Views/TKNC/ChitietTKNC.php";
            }
            else
            {
                $page = isset($_GET["page"])? $_GET["page"]:1;
                $page = is_numeric($page)?$page : 1;
                $pagesize = 6;
                $from = ($page-1)*$pagesize;
                $ListProduct = $this->model->getProductListLimited($from, $pagesize);
                $total = ceil($this->model->CountAll()/$pagesize); 
                include_once "../../Views/Home/Xemsanpham.php";
            }
        }
    }
}
?>