<?php
include_once "../../Models/DonHangModel.php";

    class DonHangController
    {
        public $model;
        function __construct()
        {
            $this->model = new DonHangModel();
        }
        function invoke()
        {
            $this->model->Create();
            $_SESSION['giohang'] = null;
            header("Location: ../Home/index.php");
        }
    }
?>