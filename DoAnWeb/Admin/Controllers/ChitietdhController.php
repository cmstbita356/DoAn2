<?php
include_once "../../Models/ChitietdhModel.php";

    class ChitietdhController
    {
        public $model;
        function __construct()
        {
            $this->model = new ChitietdhModel();
        }
        function XemChiTiet()
        {
            $page = isset($_GET["page"])? $_GET["page"]:1;
            $page = is_numeric($page)?$page : 1;
            $pagesize = 6;
            $from = ($page-1)*$pagesize;
            $Listdh = $this->model->GetList($_GET['id'] ,$from, $pagesize); 
            $total = ceil($this->model->Count($_GET['id'])/$pagesize);
            include_once "../../Views/ChitietDH/xemchitiet.php";
        }
    }
?>