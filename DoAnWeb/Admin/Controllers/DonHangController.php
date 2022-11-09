<?php
include_once "../../Models/DonHangModel.php";

    class DonHangController
    {
        public $model;
        function __construct()
        {
            $this->model = new DonHangModel();
        }
        function XemDH()
        {
            $page = isset($_GET["page"])? $_GET["page"]:1;
            $page = is_numeric($page)?$page : 1;
            $pagesize = 6;
            $from = ($page-1)*$pagesize;
            $Listdh = $this->model->GetList($from, $pagesize); 
            $total = ceil($this->model->CountAll()/$pagesize);
            include_once "../../Views/DonHang/xemdh.php";
        }
        function ChangeStatus()
        {
            if($_GET['id'])
            {
                $this->model->ChangeStatus($_GET['id']);
                header("Location: ../../Views/DonHang/index.php");
            }
        }
    }
?>