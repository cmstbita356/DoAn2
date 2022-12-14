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
    <link rel="stylesheet" href="../../styles/section.css">
    <link rel="stylesheet" href="../../styles/article.css">
    <link rel="stylesheet" href="../../styles/footer.css">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e50213ec74.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php session_start(); 
    ?>
        <div id="container">
            <div id="header">
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
                                <li class="active"><a href="./" >Trang ch???</a></li>
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
                                        foreach($giohang as $v)
                                        {
                                            echo
                                            "
                                                <div style='background-color: #D6D4D3'>
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
                                            <a href='../GioHang' style='color: #EE3B0B'>
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
            <div id="banner">
                <div class="col-md-12 col-12">
                    <div class="banner-content">
                        <img src="../../images/car-logo.png" alt="car-logo">
                        <p style="font-size: 50px;"><strong>T??m cho b???n m???t chi???c xe ho??n h???o</strong></p>
                        <strong><p>For life ??? V?? cu???c s???ng c???a b???n</p></strong>
                    </div>
                </div>
                <div class="adsearch-wrap">
                    <div class="adsearch mr-5 ml-5">
                        <form>
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <select id='time' name="time" class="form-control form-control-lg select" style="font-size: 17px; height: 50px;  margin-top: 5px">
                                        <option value="0">Kh??ng</option>
                                        <option value="C??">Xe c??</option>
                                        <option value="M???i">Xe m???i</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-12">
                                    <select id='maker' name="maker" class="form-control form-control-lg select" style="font-size: 17px; height: 50px; margin-top: 5px" >
                                        <option value="0">Kh??ng</option>
                                        <?php 
                                            include_once "../../Controllers/MakerController.php";
                                            $controller = new MakerController();
                                            $controller->invoke();
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-4 col-12">
                                    <select id='price' name="price" class="form-control form-control-lg select" style="font-size: 17px; height: 50px; margin-top: 5px">
                                        <option value="0">Kh??ng</option>
                                        <option value="500000000"> Gi?? nh??? h??n 500.000.000</option>
                                        <option value="1000000000"> Gi?? Nh??? h??n 1.000.000.000</option>
                                    </select>
                                </div>
                                <div class="col-md-12 col-12" id="col-select" style="align-items: center;">
                                    <input type="button" id="select-button-banner" value="T??m ki???m n??ng cao" style="background-color: #D5A116; color: white" onclick="TKNC(1)">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="section" style="color: black;">
                <nav aria-label="breadcrumb" style="font-size: 20px; margin-top: 20px">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a href="./" >Trang ch???</a></li> 
                        <li class="breadcrumb-item active">S???n ph???m</li> 
                    </ol>
                </nav>
                <p style="text-align: center; font-size: 50px; margin-top: 10px"><strong>S???n ph???m</strong></p>
                <div id='dssp'>
                    <?php 
                        include_once "../../Controllers/SanphamController.php"; 
                        $SanphamController = new SanphamController();
                        $SanphamController->invoke();
                    ?>
                </div>
            </div>
            
            <div class="article" style="color: black; margin-top: 10px;">
                <div>
                    <span style="font-size: 32px; float: left"><strong>Tin t???c</strong></span>
                    <nav class="navbar navbar-expand-sm bg-light" aria-label="navbar">
                        <ul class="navbar-nav" style="font-size: 30px; float: left;">
                            <li class="nav-item active">
                                <a class="nav-link mr-5 ml-5" href="#">N???i b???t</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mr-5 ml-5" href="#">T?? v???n</a>
                             </li>
                            <li class="nav-item">
                                <a class="nav-link mr-5 ml-5" href="#">????nh gi?? xe</a>
                            </li>          
                        </ul>
                    </nav>
                    <br style="clear:both;">
                </div>
                <div class="row">
                    <div class="col-md-6 col-12 shadow" >
                        <a href="#">
                            <img src="../../images/news1.jpg" alt="h??nh" style="width: 100%; height: 800px">
                            <h1>N??t b???m truy???n th???ng d??? thao t??c h??n m??n h??nh c???m ???ng tr??n ?? t??</h1>
                        </a>
                        
                    </div>
                    
                    <div class="col-md-6 col-12 shadow">
                        <div>
                            <a href="#">
                                <img src="../../images/news2.jpg" alt="h??nh" style="width: 100%; height: 400px">
                                <h1>Nh???ng l??u ?? khi thay l???p d??? ph??ng cho ?? t??</h1>
                            </a>
                            
                            <a href="#">
                                <img src="../../images/news3.jpg" alt="h??nh" style="width: 100%; height: 400px">
                                <h1>Kh??m ph?? Mercedes-AMG GT3 Edition 55: chi???c xe ??ua phi??n b???n gi???i h???n</h1>
                            </a>
                            
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
    <script>
        function TKNC(pageNumber) 
        {
            var time = document.getElementById("time").value;
            var maker = document.getElementById("maker").value;
            var price = document.getElementById("price").value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                // Typical action to be performed when the document is ready:
                document.getElementById("dssp").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "../TKNC/index.php?page="+pageNumber+"&time="+time+"&maker="+maker+"&price="+price, true);
            xhttp.send();
        }
    </script>
</html>