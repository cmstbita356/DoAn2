<?php
include_once "../../Models/UserModel.php";

    class UserController
    {
        public $model;
        function __construct()
        {
            $this->model = new UserModel();
        }
        function PhanQuyen()
        {
            if(isset($_GET['action']))
            {
                $link = null;
                ConnectDatabase($link);
                $id = $_GET['id'];
                $id_quyen = $_GET['id_quyen'];
                $this->model->phanquyen($link, $id, $id_quyen);
                header("Location: ../../Views/PhanQuyen/index.php?msg=done");
            }
        }
        function DangXuat()
        {
            $this->model->dangxuat();
            header("Location: ../../../Views/Home");
        }
    }
?>