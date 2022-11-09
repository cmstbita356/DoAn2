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
                $id=$_GET['id'];
                $page = isset($_GET["page"])? $_GET["page"]:1;
                $page = is_numeric($page)?$page : 1;
                $pagesize = 3;
                $from = ($page-1)*$pagesize;
                $total = ceil($this->model->Count($id)/$pagesize);
                $ListComment = $this->model->GetListComments($_GET['id'], $from, $pagesize);
                if(isset($_GET['ajax']))
                {
                    include_once "../../Views/Comment/xemcommentAJAX.php";
                }
                else 
                {
                    include_once "../../Views/Comment/xemcomment.php";
                }
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