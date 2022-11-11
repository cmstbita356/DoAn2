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
    <link rel="stylesheet" href="../../styles/content.css">
</head>
<body>
    <?php session_start(); ?>
    <div class='container'>
        <div class='header'>
            <div class='header-wrap'>
                <div class='header-left'>
                    <img class = 'logo-header' src="../../../images/car-logo.png" alt="logo" style='width: 100px;'>
                    <a class="ml-4" href="./">Sản phẩm</a>
                    <a class="ml-4" href="../PhanQuyen">Phân quyền</a>
                    <a class="ml-4" href="../DonHang">Đơn hàng</a>
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
            <div style='text-align: center'>
                <div class="searchBar">
                    <form action="../TimKiem/" id="searchBox">
                        <input type="text" id="searchText" placeholder="Nhập từ khoá" name="keyword">
                        <button type="submit" id="searchBtn"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
            <a href="../ThemSP/">
                <button class="btn btn-primary mt-5" style="font-size: 20px;">Thêm sản phẩm</button>
            </a>
            <a href="../KhoiPhuc">
                <button class="btn btn-primary mt-5" style="font-size: 20px;">Khôi phục</button>
            </a>
            <?php 
                include_once "../../Controllers/SanphamController.php";
                $controller = new SanphamController();
                $controller->XemSP();
            ?>
        </div>
    </div>
</body>
<style>
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