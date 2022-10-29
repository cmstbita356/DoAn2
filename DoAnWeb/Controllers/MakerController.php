<?php
include_once "../../Models/MakerModel.php";

    class MakerController
    {
        public $model;
        function __construct()
        {
            $this->model = new MakerModel();
        }
        function invoke()
        {
            $ListMaker = $this->model->GetAll();
            include_once "../../Views/SetMakerList/index.php";
        }
    }
?>