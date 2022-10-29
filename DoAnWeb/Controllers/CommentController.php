<?php
include_once "../../Models/CommentModel.php";

    class CommentController
    {
        public $model;
        function __construct()
        {
            $this->model = new CommentModel();
        }
        function XemComment()
        {
            if(isset($_GET['id']))
            {
                $ListComment = $this->model->GetListComments($_GET['id']);
                $id=$_GET['id'];
                include_once "../../Views/Comment/xemcomment.php";
            }
            
        }
        function TaoComment()
        {
            if(isset($_GET['comment']))
            {
                if($_GET["comment"] != "")
                {
                    $comment = new Comment($_SESSION['username'], $_GET['comment'], date("d/m/Y"));
                    $this->model->CreateComment($comment, $_GET['id']);
                }
            }
        }
    }
?>