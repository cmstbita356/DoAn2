<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e50213ec74.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/content.css">
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
                    <a class="ml-4" href="../DonHang">Đơn hàng</a>
                </div>
                <div class="header-right">
                    <img class="rounded-circle" style='width:80px' src="../../imgs/image-account.jpg" alt="">
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
            <?php 
                include_once "../../Controllers/SanphamController.php";
                $controller = new SanphamController();
                $controller->ChiTietSP();
            ?>
        </div>
    </div>
</body>
<style>
    #content_ctsp
    {
        line-height: 60px;
    }
    #img_ctsp
    {
        height: 400px;
        max-width: 100%;
    }
    #name_ctsp
    {
        font-size: 40px;
    }
    #price_ctsp
    {
        font-size: 30px;
        color: red;
    }
    #nsx_ctsp
    {
        font-size: 25px;
    }
    #state_ctsp
    {
        font-size: 25px;
    }
    #mota_ctsp
    {
        font-size: 25px;
    }
    #btn_ctsp
    {
        background-color: orange;
        color: white;
        font-size: 25px;
        width: 200px;
    }
</style>
</html>