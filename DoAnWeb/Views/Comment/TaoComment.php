<?php
include_once "../../Controllers/CommentController.php";

session_start();
                if(isset($_SESSION['username']))
                {
                    $str = 
                    "
                        <button id='dang_binhluan' type='button' onclick='Comment()' class='btn-binhluan btn btn-success ml-5' style='font-size: 20px; border-radius: 10px;'>
                            Đăng
                        </button>
                    ";
                }
                else
                {
                    $str = 
                    "
                        <button id='dang_binhluan' type='button' onclick='Comment()' class='btn-binhluan btn btn-success ml-5' style='font-size: 20px; border-radius: 10px;' disabled>
                            Đăng
                            <span class='tooltiptext'>Vui lòng đăng nhập</span>
                        </button>
                    ";
                }
$controller = new CommentController();
$controller->TaoComment();
$controller->XemComment();

?>