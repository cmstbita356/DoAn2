<?php
include_once "../../Models/db_module.php";
include_once "../../Models/SanPhamModel.php";

    class KhoiPhucController
    {
        public $model;
        function __construct()
        {
            $this->model = new SanPhamModel();
        }
        function XulyKhoiPhuc()
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
        function XemKhoiPhuc()
        {
            $page = isset($_GET["page"])? $_GET["page"]:1;
            $page = is_numeric($page)?$page : 1;
            $pagesize = 6;
            $from = ($page-1)*$pagesize;
            $ListProduct = $this->model->getProductListLimitedDeleted($from, $pagesize);
            $total = ceil($this->model->CountDeleted()/$pagesize); 
            include_once "../../Views/KhoiPhuc/xem.php";
        }
    }
?>