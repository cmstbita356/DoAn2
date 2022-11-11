<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e50213ec74.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../styles/header.css">
</head>
<body>
    <?php session_start(); ?>
    <div class='container'>
        <div class='header'>
            <div class='header-wrap'>
                <div class='header-left'>
                    <img class = 'logo-header' src="../../../images/car-logo.png" alt="logo" style="width: 100px">
                    <a class="ml-4" href="../Home">Sản phẩm</a>
                    <a class="ml-4" href="../PhanQuyen">Phân quyền</a>
                </div>
                <div class="header-right">
                    <img class="user rounded-circle" src="../../imgs/image-account.jpg" alt="">
                    <label for='ckb_tk' id='lb_tk'><?php echo $_SESSION['username'] ?></label><br>
                    <input type='checkbox' id='ckb_tk'>
                    <div id='tk'>
                        <a href='#'>Cài đặt tài khoản</a><br>
                        <a href='../DangXuat'>Đăng xuất</a>
                    </div>
                </div>
            </div>
        </div>
        <div class='content'>
            <nav aria-label="breadcrumb" style="font-size: 20px; margin-top: 20px">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="../Home" >Sản phẩm</a></li> 
                    <li class="breadcrumb-item active">Thêm sản phẩm</li> 
                </ol>
            </nav>
            <?php 
                include_once "../../Controllers/SanphamController.php";
                $controller = new SanphamController();
                $controller->HienthiSuaSP();
            ?>
        </div>
    </div>
</body>
<style>
    #suasp
    {
        margin: 50px auto;
        margin-left: 20%;
        margin-right: 30%;
        font-size: 20px;
        border-radius: 20px;
    }
    .form-group input
    {
        border: none;
        background-color: lightgrey;
        width: 90%;
        padding: 12px 20px;
    }
    .form-group
    {
        margin-left: 20px;
        margin-top: 30px;
    }
    .form-group input:focus
    {
        background-color: #E8B972;
    }
    #submit-sua
    {
        background-color: #D5A01C ;
        width: 50% ;
        margin-left: 20%;
    }

    .header-left
{
    font-size: 25px;  
    display: inline-block;
}
    .user
    {
        width:80px;
    }
@media screen and (max-width: 999px) {
    .header-left
    {
        font-size: 15px;  
        display: inline-block;
    }
    #lb_tk
    {
    font-size: 15px;
    }
    .user
    {
        width:40px;
    }
    
}

</style>
</html>