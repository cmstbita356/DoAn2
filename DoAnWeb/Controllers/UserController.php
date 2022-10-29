<?php
include_once "../../Models/UserModel.php";
include_once "../../Models/validate_module.php";

    class UserController
    {
        public $model;
        function __construct()
        {
            $this->model = new UserModel();
        }
        function DangNhap()
        {
            if(isset($_POST["username"]) && isset($_POST["password"]))
            {
                $link = null;
                ConnectDatabase($link);
                $username = $_POST["username"];
                $password = $_POST["password"];
                if($this->model->dangnhap($link, $username, $password))
                {
                    if($_SESSION['quyen'] == "user")
                    {
                        header("Location: ../../Views/DangNhap/index.php?msg=dn_done");
                    }
                    else
                    {
                        header("Location: ../../Admin/Views/Home");
                    }
                }
                else
                {
                    header("Location: ../../Views/DangNhap/index.php?msg=dn_notduplicate");
                }
            }
            else
            {
                header("Location: ../../Views/DangNhap/index.php?msg=dn_false");
            }
        }
        function DangKy()
        {
            if(isset($_POST['username']) && isset($_POST['password1']) && isset($_POST['password2']) && isset($_POST['email']))
            {
                $username = $_POST['username'];
                $password1 = $_POST['password1'];
                $password2 = $_POST['password2'];
                $email = $_POST['email'];
                $link = null;
                ConnectDatabase($link);
                if($password1 != $password2)
                {
                    header("Location: ../../Views/DangKy?msg=dk_notduplicate");
                }
                else if(!ValidateLenUp($username))
                {
                    header("Location: ../../Views/DangKy?msg=dk_validatelenup");
                }
                else if(!ValidateEmail($email))
                {
                    header("Location: ../../Views/DangKy?msg=dk_validateemail");
                }
                else if(!ValidateExistUsername($link, $username))
                {
                    $this->model->dangky($link, $username, $password1, $email, 2);
                    header("Location: ../../Views/DangNhap?msg=dk_done");
                }
                else
                {
                    header("Location: ../../Views/DangKy?msg=dk_existusername");
                }
            }
            else
            {
                header("Location: ../../Views/DangKy?msg=dk_false");
            }
        }
        function DangXuat()
        {
            $this->model->dangxuat();
            header("Location: ../../Views/Home");
        }
    }
?>