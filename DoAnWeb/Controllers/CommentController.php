<?php
include_once "../../Models/Comment.php";

    class CommentController
    {
        public $model;
        function __construct()
        {
            $this->model = new CommentModel();
        }
        function invoke()
        {
            if(isset($_GET['id']))
            {
                $ListComment = $this->model->GetListComments($_GET['id']);
                $id=$_GET['id'];
                include_once "../../Views/Comment/xemcomment.php";
            }
        }
    }
?>