<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../styles/Sidebar.css">
    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/banner.css">
    <link rel="stylesheet" href="..././styles/section.css">
    <link rel="stylesheet" href="../../styles/article.css">
    <link rel="stylesheet" href="../../styles/footer.css">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e50213ec74.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php session_start(); ?>
    <div id="container">
        <div id="header" style="position: relative ;width: 100%">
                <div class="header-top-wrap">
                    <div class="header-top-left">
                        <p>
                            <i class="fa-solid fa-envelope"></i>cmstbita356@gmail.com | 
                            <i class="fa-solid fa-clock"></i>7:00AM to 5:00PM</p>
                    </div>
                    <div class="header-top-right">
                        <div>
                            <a href="https://www.facebook.com/nam.thang.7121" target="_blank">
                                <i class="media-header fa-brands fa-facebook"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCPk5dOJ5jQGp70cFfB6hbXQ" target="_blank">
                                <i class="media-header fa-brands fa-youtube"></i>
                            </a>
                            <a href="https://discord.gg/AXK2TuV8" target="_blank">
                                <i class="media-header fa-brands fa-discord"></i>
                            </a>
                            <i class="fa-solid fa-user"></i>
                            <?php
                                if (isset($_SESSION['username']))
                                {
                                    echo
                                    "
                                        <label for='ckb_tk' id='lb_tk'>".$_SESSION['username']."</label><br>
                                        <input type='checkbox' id='ckb_tk'>
                                        <div id='tk'>
                                            <a href='#'>C??i ?????t t??i kho???n</a><br>
                                            <a href='../DangXuat'>????ng xu???t</a>
                                        </div>
                                        
                                        
                                    ";
                                }
                                else
                                {
                                    echo "<a href='../DangNhap'>????ng nh???p</a> | <a href='../DangKy'>????ng k??</a>";
                                }
                            ?>
                            
                            </div>
                        
                        
                    </div>
                </div> 
                <div class="header-main-wrap" >
                    <div class="header-main-action">
                        <input type="checkbox" id="check">
                        <label for="check" id="lb">
                            <i class="fa-solid fa-bars" id="hamburger"></i>
                            <span id="cancel">&times;</span>
                        </label>  
                        <div id="sidebar">
                            <div class="sidebar-header">
                                <img src="../../images/car-logo.png" alt="car-logo">
                            </div>
                            <ul>
                                <li class="active"><a href="../Home" >Trang ch???</a></li>
                                <li>
                                    <a href="#pagesubmenu" class="dropdown-toggle" data-toggle="collapse" aria-expanded="false">
                                        Trang kh??c
                                    </a>
                                    <ul class="collapse" id="pagesubmenu">
                                        <li class="pl-4"><a href="#">V??? ch??ng t??i</a></li>
                                        <li class="pl-4"><a href="#">Trang ????ng nh???p</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#blogsubmenu" class="dropdown-toggle" data-toggle="collapse" aria-expanded="false">Blog</a>
                                    <ul class="collapse" id="blogsubmenu">
                                        <li class="ml-4"><a href="#">Blog c???a ch??ng t??i</a></li>
                                        <li class="ml-4"><a href="#">Chi ti???t blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" target="_blank">Li??n h???</a></li>
                                <li><a href="#" target="_blank">Feedback</a></li>
                            </ul>
                        </div>
                        <div class="searchBar">
                            <form action="../TimKiem/" id="searchBox">
                                <input type="text" id="searchText" placeholder="Nh???p t??? kho??" name="keyword">
                                <button type="submit" id="searchBtn"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="cart-wrap">
                            <div class="cart"><i class="fa-solid fa-cart-shopping"></i></div>          
                            <div class="cart-show">
                                <?php
                                    if(isset($_SESSION['giohang']))
                                    {
                                        $giohang = $_SESSION["giohang"];
                                        foreach($giohang as $k=>$v)
                                        {
                                            echo
                                            "
                                                <div>
                                                    <div style='float:left'>
                                                        <img id='img-cart-bar' src='".$v['img']."'>
                                                    </div>
                                                    <div style='float:left'>
                                                        ".$v['ten']." <br>
                                                        ".number_format($v['gia'])." VND <br>
                                                    </div>
                                                    <br style='clear:both'>
                                                </div>
                                            ";
                                        }
                                        echo 
                                        "   
                                            <a href='./' style='color: #EE3B0B'>
                                                <button style='width:100%; background-color: #3D3838'>
                                                    Xem chi ti???t
                                                </button>
                                            </a>
                                        ";
                                    }
                                ?>
                            </div>
                        </div>
                        <nav id='header-content' class="navbar navbar-expand-sm" aria-label="navbar" style='float: right'>
                        <ul class="navbar-nav" style="font-size: 25px; display: inline-block;">
                            <li class="nav-item active">
                                <a id='header-content-home' class="nav-link mr-5 ml-5" href="../Home/index.php" >Trang ch???</a>
                            </li>
                            <li class="nav-item">
                                <a id='header-content-feedback' class="nav-link mr-5 ml-5" href="#" >Feedback</a>
                             </li>
                        </ul>
                        </nav>
                    </div>
                </div>
                
            </div> 
    
        <div class="section">
            <nav aria-label="breadcrumb" style="font-size: 20px; margin-top: 20px">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="../Home" >Trang ch???</a></li> 
                    <li class="breadcrumb-item active">Gi??? h??ng</li> 
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-8 col-8">
                <?php
                    include_once "../../Controllers/CartController.php";
                    $controller = new CartController();
                    if(isset($_SESSION['giohang']))
                    {
                        $giohang = $_SESSION["giohang"];
                        foreach($giohang as $v)
                        {
                            echo
                            "
                                <div class='product-cart border shadow'>
                                    <div class='img-cart-product' style='float:left'>
                                        <img src='".$v['img']."' style='width: 300px;'>
                                    </div>
                                    <div class='info-cart-product' style='float:left'>
                                        Id s???n ph???m: ".$v['id']." <br>
                                        T??n s???n ph???m: ".$v['ten']." <br>
                                        Gi?? s???n ph???m: ".number_format($v['gia'])." VND <br>
                                        S??? l?????ng mua: ".$v['soluong']."
                                    </div>
                                    <br style='clear:both'>
                                    <div class='button-cart'>
                                        <form id='form-xoa' method='get' action='xulygiohang.php?id=1'>
                                            <input value='".$v['id']."' name='id' style='display:none'>
                                            <input id='xoa-cart' type='submit' value='X??a' name='action'><br>
                                        </form>
                                        <form method='get' action='xulygiohang.php'>
                                            <input value='".$v['id']."' name='id' style='display:none'>
                                            <input id='sl-cart' type='text' placeholder='Nh???p s??? l?????ng' name='sl'>
                                            <input id='capnhat-cart' type='submit' value='C???p nh???t' name='action'>
                                        </form>
                                    </div>
                                    <br style='clear:both'>
                                </div>
                                <br style='clear:both'>

                                
                            ";
                        }
                    }
                ?>
                </div>
                <div class="col-md-4 col-4" style='background-color: #ECB99F'>
                    <p style='font-size: 40px; text-align: center'>Th??ng tin gi??? h??ng</p>
                    <p style='font-size: 20px;'>S??? l?????ng s???n ph???m: <?php echo $controller->TinhSLSP(); ?></p>
                    <p style='font-size: 20px; color: red;'> T???ng s??? ti???n: <?php echo number_format($controller->TinhTien())." VND"; ?></p>

                    <p style='font-size: 40px; text-align: center'>Thanh to??n</p>
                    <button type="button" style="font-size: 20px; margin-left: 30%; width: 40%; height: 100px" data-toggle='modal' data-target='#mymodal'>Thanh to??n</button>
                    <div id="mymodal" class="modal" style='margin-top: 10%'>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                        <h3>B???n c?? ch???c l?? mu???n thanh to??n kh??ng ?</h3>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>  
                                
                                <div style='padding-bottom: 20px; padding-top: 20px;'>
                                    <a href='../DonHang/index.php' type="button" id='thanhtoan' class="btn-primary" style='margin-left: 10%; font-size: 20px; width: 30%; text-align: center'>C??</a>
                                    <button type="button" class="btn-primary" data-dismiss="modal" style='margin-left: 20%; font-size: 20px; width: 30%'>Kh??ng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
                <div class="row" id="footer-logoall">
                    <div class="col-md-4 col-12" id="footer-car-logo">
                        <img src="../../images/car-logo.png" alt="logo" style="width: 200px;">
                    </div>
                    <div class="col-md-8 col-12" id="footer-otherlogo">
                        <img class="footer-logo" src="../../images/car-logo-2.png" alt="" >
                        <img class="footer-logo" src="../../images/car-logo-3.png" alt="">
                        <img class="footer-logo" src="../../images/car-logo-4.png" alt="">
                        <img class="footer-logo" src="../../images/car-logo-5.png" alt="">
                    </div>
                </div>
                <div class="footer-main">
                    <div class="row">
                        <div class="footer-wrap-1 col-md-4 col-12" style="background-color: black">
                            <div class="media" id="phone-contact">
                                <i class="fa-solid fa-phone" id="footer-icon"></i>
                                <div class="media-body p-3">
                                    <p>??i???n tho???i:</p>
                                    <p>0767653961</p>
                                </div>
                            </div>
                            <div class="media" id="email-contact">
                                <i class="fa-solid fa-envelope" id="footer-icon"></i>
                                <div class="media-body p-3">
                                    <p>Email:</p>
                                    <p>cmstbita356@gmail.com</p>
                                </div>
                            </div>
                            <div class="media" id="address-contact">
                                <i class="fa-solid fa-location-dot" id="footer-icon"></i>
                                <div class="media-body p-3">
                                    <p>?????a ch???:</p>
                                    <p>17/18/15/22/30/1 Li??n Khu 5-6</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer-wrap-2 col-md-4 col-12" style="background-color: darkgray">
                            <div id="footer-main2">
                                <p>Th??ng tin chung</p>
                                <a href="#"><p>V??? ch??ng t??i</p></a>
                                <a href="#"><p>Tuy???n d???ng</p></a>
                                <a href="#"><p>Li??n h???</p></a>
                                <a href="#"><p>Tr??? gi??p</p></a>
                            </div>
                        </div>
                        <div class="footer-wrap-3 col-md-4 col-12" style="background-color: darkgray">
                            <div id="footer-main3">
                                <p>C???n mua xe</p>
                                <a href="#"><p>Tin b??n xe m???i</p></a>
                                <a href="#"><p>Tin b??n xe c??</p></a>
                                <a href="#"><p>Vay mua xe</p></a>
                                <a href="#"><p>Ph??? ki???n</p></a>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
        </div>
    </div>
    
</body>
<style>
    #yesno
    {
        position: absolute;
        left: 30%;
        top: 30%;
        width: 40%;
        height: 40%;
        background-color: white;
    }
    .product-cart
    {
        background-color: #D6D4D3;
    }
    .info-cart-product
    {
        font-size: 20px;
        line-height: 40px;          
    }
    .button-cart input
    {
        margin: 20px;
        font-size: 20px;
    }
    #xoa-cart
    {
        padding-left: 20px;
        padding-right: 20px;
        background-color: #EC7A41;
    }
    #capnhat-cart
    {
        padding-left: 20px;
        padding-right: 20px;
        background-color: #EC7A41;
    }
    #sl-cart
    {
        width: 150px;
    }
    #sl-cart:focus
    {
        background-color: #E8B972;
    }
</style>
<script>
    
</script>
</html>