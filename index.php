<?php
	include("process/connectDB.php");
	include("process/func.php");
	session_start();
?>


<html lang="en" class=" js cssanimations csstransforms js cssanimations csstransforms">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>ChayBo Team</title>
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/skin-default.css" rel="stylesheet" id="uy-skin">
	<link rel="shortcut icon" href="assets/img/favicon.png" type="assets/image/x-icon">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/helper.min.css" rel="stylesheet">
	<link href="assets/css/plugins.css" rel="stylesheet">
</head>

<body>
    
	<div class="wrapper box-layout">

		 <!-- header area start -->
        <header>

            <!-- header top start -->
            <div class="header-top-area bg-gray text-center text-md-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="header-call-action">
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                    tranleuy.kma@gmail.com
                                </a>
                                <a href="#">
                                    <i class="fa fa-phone"></i>
                                    0962979942
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="header-top-right float-md-right float-none">
                                <nav>
                                    <ul>
                                        <li>
                                            <div class="dropdown header-top-dropdown">
                                                <a class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Tài khoản của tôi
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                                    <a class="dropdown-item" href="Admin/index.php">Quản lý với Admin</a>
                                                    <a class="dropdown-item" href="pages/login.php"> Đăng nhập</a>
                                                
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Yêu thích</a>
                                        </li>
                                        <li>
                                            <a href="pages/cart.php">Giỏ hàng</a>
                                        </li>
                                        <li>
                                            <a href="#">Kiểm tra</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top end -->

            <!-- header middle start -->
            <div class="header-middle-area header-middle-style-2 pt-20 pb-20 pb-md-0 pb-sm-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="brand-logo">
                                <a href="index.php">
                                    <img src="assets/img/logo/chayboteam.png" alt="brand logo">
                                </a>
                            </div>
                        </div> <!-- end logo area -->
                        <div class="col-lg-9">
                            <div class="header-middle-right">
                                <div class="header-middle-shipping mb-20">
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>Thời gian hoạt động</h5>
                                            <span>Thứ hai- Chủ nhật: 8.00 - 18.00</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>Miễn phí vận chuyển</h5>
                                            <span>Cho đơn hàng từ 1.999.000</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>Hoàn tiền 100%</h5>
                                            <span>Trước 30 ngày từ khi giao hàng</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                </div>
                                <form action="pages/kqtimkiem.php" method="POST" enctype="multipart/form-data">
                                <div class="header-middle-block mb-md-20" >
                                    <div class="header-middle-searchbox">
                                        <input type="text" placeholder="Search..." name="timkiem" class="form-control">
                                        <button class="search-btn" type="submit" value="Search"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header middle end -->
            <!-- main menu area start -->
            <div class="main-header-wrapper bdr-bottom1 header-style-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-header-inner header-2 header-4">
                                <div class="main-menu menu-style-4">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active"><a href="index.php"><i class="fa fa-home"></i>Home <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                  
                                                </ul>
                                            </li>
                                            <li class="static"><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                                <ul class="megamenu dropdown">
                                                    
                                                    <li class="mega-title"><a href="#">Khách hàng</a>
                                                        <ul>
                                                            <li><a href="#">Giỏ hàng</a></li>
                                                            <li><a href="#">Kiểm tra</a></li>
                                                            <li><a href="#">So sánh</a></li>
                                                            <li><a href="#">Yêu thích</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">Quản lý</a>
                                                        <ul>
                                                            <li><a href="Admin/ad_login.php">tài khoản của tôi</a></li>
                                                            <li><a href="pages/login.php">đăng nhập</a></li>
                                                            <li><a href="pages/about-us.php">about us</a></li>
                                                            <li><a href="pages/contact-us.php">contact us</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php">shop </a>
                                                
                                            </li>
                                            <li><a href="pages/contact-us.php">contact us </a>
                                                
                                            </li>
                                            <li><a href="pages/about-us.php">About us</a></li>
                                            
                                            <ul>
                                                <li class="switcher-icon" style="    color: #d8373e;font-size: 30px;line-height: 45px; cursor: pointer; text-align: center; padding-left:5em;"  > <i class="fa fa-cog fa-spin"></i>
                                            </li>
                                            </ul>
                                          
                                        </div>
                                    </nav>
                                    
                                </div>
                                <div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-block d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>

		</header>
		 <!-- header area end -->
         <div class="page-wrapper pt-20">
             <div class="container">
                <div class="row">
                    <!-- sidebar start -->
                    <div class="col-lg-3 order-2 order-lg-1">
                        <!-- category menu start -->
                        <div class="home-single-sidebar hm-4-cat mb-30 mb-sm-34">
                            <div class="main-header-inner">
                                <div class="category-toggle-wrap max-100">
                                    <div class="category-toggle">
                                        danh mục
                                        <div class="cat-icon">
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                    <nav class="category-menu static hm-1">
                                        <ul>
                                            <li><a href="pages/laptop.php"><i class="fa fa-desktop"></i> máy vi tính</a></li>
                                            <li class="menu-item-has-children"><a href="pages/camera.php"><i class="fa fa-camera"></i> camera</a>   
                                                <!--  Start -->
                                                <ul class="category-mega-menu">
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">camera nghiệp dư     </a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">1- 2 triệu</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">2- 3 triệu</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">3- 5 triệu</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">5-9 triệu</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">camera chuyên nghiệp</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">10-15 triệu</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">15-30 triệu</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">30-40 triệu</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">trên 40 triệu</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">camera hành trình</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">go pro</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">xiaomi</a></li>
                                                        </ul>
                                                    </li>
                                                
                                                </ul><!--  End --> 
                                            </li>
                                            <li class="menu-item-has-children"><a href="pages/smartphone.php"><i class="fa fa-mobile"></i> smart phones</a> 
                                                <!-- Start -->
                                                <ul class="category-mega-menu">
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">Smartphone</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">SamSung</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">LG</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Apple</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Bphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Xiaomi</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">Tai nghe</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">Tai nghe nghe nhạc</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Tai nghe chơi game</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Tai nghe không dây</a></li>
                                                        </ul>
                                                    </li>
                                                    
                                                </ul><!-- End -->
                                            </li>
                                            <li><a href="pages/watch.php"><i class="fa fa-clock-o"></i> đồng hồ</a></li>
                                            <li><a href="pages/phukien.php"><i class="fa fa-television"></i> đồ điện tử</a></li>
                                            <li><a href="pages/tablet.php"><i class="fa fa-tablet"></i> máy tính bảng</a></li>
                                            <li><a href="pages/moto.php"><i class="fa fa-motorcycle"></i> Môtô</a></li>
                                            <li><a href="pages/car.php"><i class="fa fa-car"></i> Ôtô</a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- category menu end -->
                        <!-- sidebar banner start -->
                     <div class="home-single-sidebar mb-30 mt-md-36">
                        <div class="img-container fix img-full">
                            <a href="#">
                                 <img src="assets/img/banner/banner_left2.jpg" alt="">
                            </a>
                        </div>
                     </div>
                        <!-- sidebar banner end -->
                    </div>
                    


                    <div class="col-lg-9 order-1 order-lg-2">
                        <!-- category tab area start -->
                        <div class="category-tab-area mb-30">
                            <div class="category-tab">
                                <ul class="nav">
                                    <li>
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                    <li>
                                        <a class="active">nổi bật</a>
                                    </li>
                                </ul>
                            </div>
                    </div>

                        <?php 
                        $rsoto = mysqli_query($conn,"select id,tensp,image,gia from sanpham where loaisp='oto' order by sldaban DESC LIMIT 2");
                        $rsmoto = mysqli_query($conn,"select id,tensp,image,gia from sanpham where loaisp='moto' order by sldaban DESC LIMIT 2");
                        $rswatch = mysqli_query($conn,"select id,tensp,image,gia from sanpham where loaisp='watch' order by sldaban DESC LIMIT 2");
                        $rssmartphone = mysqli_query($conn,"select id,tensp,image,gia from sanpham where loaisp='smartphone' order by sldaban DESC LIMIT 2");
                        $rscamera = mysqli_query($conn,"select id,tensp,image,gia from sanpham where loaisp='camera' order by sldaban DESC LIMIT 2");
                        $rslaptop = mysqli_query($conn,"select id,tensp,image,gia from sanpham where loaisp='laptop' order by sldaban DESC LIMIT 2");
                        $rstablet = mysqli_query($conn,"select id,tensp,image,gia from sanpham where loaisp='tablet' order by sldaban DESC LIMIT 2");
                        $rschuot = mysqli_query($conn,"select id,tensp,image,gia from sanpham where loaisp='chuot' order by sldaban DESC LIMIT 2");
                        $rstainghe = mysqli_query($conn,"select id,tensp,image,gia from sanpham where loaisp='tainghe' order by sldaban DESC LIMIT 2");
                        $rstv = mysqli_query($conn,"select id,tensp,image,gia from sanpham where loaisp='tv' order by sldaban DESC LIMIT 2");
                        $rsusb = mysqli_query($conn,"select id,tensp,image,gia from sanpham where loaisp='usb' order by sldaban DESC LIMIT 2");
                    
                        ?>


                        <div class="tab-content">
                            <div class="tab-pane fade show active" >
                                <div class="feature-category-carousel-wrapper">
                                    <div class="container">
                                        <div class="featured-carousel-active2 row arrow-space slick-arrow-style" data-row="2">
                                             <!-- product single item start -->
                                            <div class="col">
                                                <?php while($col = mysqli_fetch_assoc($rsoto))
                                                { ?>
                                                <div class="product-item fix mb-30" >
                                                    <div class="product-thumb" >
                                                        <a href="pages/chitiet.php?id=<?php echo $col['id']; ?>">
                                                            <img src="assets/img/product/<?php echo($col['image']); ?>" 
                                                            style = " width: 135px; height: 135px" class="img-pri" alt="">
                                                            <img src="assets/img/product/oto-10.jpg" 
                                                            style = " width: 135px; height: 135px" class="img-sec" alt="">
                                                        </a>
                                                        <div class="product-label">
                                                            <span>hot</span>
                                                        </div>
                                                        <div class="product-action-link">
                                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                            <a href="pages/cart.php?them=<?php echo col['id']; ?>" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#"><?php echo $col['tensp'] ?> </a></h4>
                                                        <div class="pricebox">
                                                            <span class="regular-price"><?php echo $col['gia'] ?> VNĐ</span>
                                                            <div class="ratings">
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <div class="pro-review">
                                                                    <span>1 review(s)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                 <?php
                                                 } ?>
                                            </div>
                                            <!-- product single item end -->
                                            <!-- product single item start -->
                                            <div class="col">
                                                <?php while($col = mysqli_fetch_assoc($rsmoto))
                                                { ?>
                                                <div class="product-item fix mb-30" >
                                                    <div class="product-thumb" >
                                                        <a href="pages/chitiet.php?id=<?php echo $col['id']; ?>">
                                                            <img src="assets/img/product/<?php echo($col['image']); ?>" style = " width: 135px; height: 135px" class="img-pri" alt="">
                                                            <img src="assets/img/product/moto-10.jpg" style = " width: 135px; height: 135px" class="img-sec" alt="">
                                                        </a>
                                                        <div class="product-label">
                                                            <span>hot</span>
                                                        </div>
                                                        <div class="product-action-link">
                                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                            <a href="pages/cart.php?them=<?php echo row['id']; ?>" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#"><?php echo $col['tensp'] ?> </a></h4>
                                                        <div class="pricebox">
                                                            <span class="regular-price"><?php echo $col['gia'] ?> VNĐ</span>
                                                            <div class="ratings">
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <div class="pro-review">
                                                                    <span>1 review(s)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                 <?php
                                                 } ?>
                                            </div>
                                            <!-- product single item end -->
                                            <!-- product single item start -->
                                            <div class="col">
                                                <?php while($col = mysqli_fetch_assoc($rslaptop))
                                                { ?>
                                                <div class="product-item fix mb-30" >
                                                    <div class="product-thumb" >
                                                        <a href="pages/chitiet.php?id=<?php echo $col['id']; ?>">
                                                            <img src="assets/img/product/<?php echo($col['image']); ?>" style = " width: 135px; height: 135px" class="img-pri" alt="">
                                                            <img src="assets/img/product/laptop-3.jpg" style = " width: 135px; height: 135px" class="img-sec" alt="">
                                                        </a>
                                                        <div class="product-label">
                                                            <span>hot</span>
                                                        </div>
                                                        <div class="product-action-link">
                                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                            <a href="pages/cart.php?them=<?php echo row['id']; ?>" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#"><?php echo $col['tensp'] ?> </a></h4>
                                                        <div class="pricebox">
                                                            <span class="regular-price"><?php echo $col['gia'] ?> VNĐ</span>
                                                            <div class="ratings">
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <div class="pro-review">
                                                                    <span>1 review(s)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                 <?php
                                                 } ?>
                                            </div>
                                            <!-- product single item end -->
                                            <!-- product single item start -->
                                            <div class="col">
                                                <?php while($col = mysqli_fetch_assoc($rssmartphone))
                                                { ?>
                                                <div class="product-item fix mb-30" >
                                                    <div class="product-thumb" >
                                                        <a href="pages/chitiet.php?id=<?php echo $col['id']; ?>">
                                                            <img src="assets/img/product/<?php echo($col['image']); ?>" style = " width: 135px; height: 135px" class="img-pri" alt="">
                                                            <img src="assets/img/product/dienthoai-13.jpg" style = " width: 135px; height: 135px" class="img-sec" alt="">
                                                        </a>
                                                        <div class="product-label">
                                                            <span>hot</span>
                                                        </div>
                                                        <div class="product-action-link">
                                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                            <a href="pages/cart.php?them=<?php echo row['id']; ?>" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#"><?php echo $col['tensp'] ?> </a></h4>
                                                        <div class="pricebox">
                                                            <span class="regular-price"><?php echo $col['gia'] ?> VNĐ</span>
                                                            <div class="ratings">
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <div class="pro-review">
                                                                    <span>1 review(s)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                 <?php
                                                 } ?>
                                            </div>
                                            <!-- product single item end -->
                                            <!-- product single item start -->
                                            <div class="col">
                                                <?php while($col = mysqli_fetch_assoc($rscamera))
                                                { ?>
                                                <div class="product-item fix mb-30" >
                                                    <div class="product-thumb" >
                                                        <a href="pages/chitiet.php?id=<?php echo $col['id']; ?>">
                                                            <img src="assets/img/product/<?php echo($col['image']); ?>" style = " width: 135px; height: 135px" class="img-pri" alt="">
                                                            <img src="assets/img/product/camera-12.jpg" style = " width: 135px; height: 135px" class="img-sec" alt="">
                                                        </a>
                                                        <div class="product-label">
                                                            <span>hot</span>
                                                        </div>
                                                        <div class="product-action-link">
                                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                            <a href="pages/cart.php?them=<?php echo row['id']; ?>" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#"><?php echo $col['tensp'] ?> </a></h4>
                                                        <div class="pricebox">
                                                            <span class="regular-price"><?php echo $col['gia'] ?> VNĐ</span>
                                                            <div class="ratings">
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <div class="pro-review">
                                                                    <span>1 review(s)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                 <?php
                                                 } ?>
                                            </div>
                                            <!-- product single item end -->

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        <!-- banner statistics start -->
                        <div class="banner-statistic banner-style-4 pb-36">
                            <div class="img-container fix img-full">
                                <a href="#">
                                    <img src="assets/img/banner/banner.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- banner statistics end -->

                        <div class="category-tab-area mb-30">
                            <div class="category-tab">
                                <ul class="nav">
                                    <li>
                                        <i class="fa fa-gift"></i>
                                    </li>
                                    <li>
                                        <a class="active">hàng mới về</a>
                                    </li>
                                </ul>
                            </div>
                        </div>



                        <!-- featured category area start -->
                    
                            <!-- featured category start -->
                             <div class="container">
                                <div class="featured-carousel-active2 row slick-arrow-style" data-row="2">

                                <!-- product single item start -->
                                            <div class="col">
                                                <?php while($col = mysqli_fetch_assoc($rswatch))
                                                { ?>
                                                <div class="product-item fix mb-30" >
                                                    <div class="product-thumb" >
                                                        <a href="pages/chitiet.php?id=<?php echo $col['id']; ?>">
                                                            <img src="assets/img/product/<?php echo($col['image']); ?>" 
                                                            style = " width: 135px; height: 135px" class="img-pri" alt="">
                                                            <img src="assets/img/product/dongho-114.jpg" 
                                                            style = " width: 135px; height: 135px" class="img-sec" alt="">
                                                        </a>
                                                        <div class="product-label">
                                                            <span>hot</span>
                                                        </div>
                                                        <div class="product-action-link">
                                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                            <a href="pages/cart.php?them=<?php echo row['id']; ?>" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#"><?php echo $col['tensp'] ?> </a></h4>
                                                        <div class="pricebox">
                                                            <span class="regular-price"><?php echo $col['gia'] ?> VNĐ</span>
                                                            <div class="ratings">
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <div class="pro-review">
                                                                    <span>1 review(s)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                 <?php
                                                 } ?>
                                            </div>
                                            <!-- product single item end -->
                                            <!-- product single item start -->
                                            <div class="col">
                                                <?php while($col = mysqli_fetch_assoc($rschuot))
                                                { ?>
                                                <div class="product-item fix mb-30" >
                                                    <div class="product-thumb" >
                                                        <a href="pages/chitiet.php?id=<?php echo $col['id']; ?>">
                                                            <img src="assets/img/product/<?php echo($col['image']); ?>" style = " width: 135px; height: 135px" class="img-pri" alt="">
                                                            <img src="assets/img/product/chuot-5.jpg" style = " width: 135px; height: 135px" class="img-sec" alt="">
                                                        </a>
                                                        <div class="product-label">
                                                            <span>hot</span>
                                                        </div>
                                                        <div class="product-action-link">
                                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                            <a href="pages/cart.php?them=<?php echo row['id']; ?>" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#"><?php echo $col['tensp'] ?> </a></h4>
                                                        <div class="pricebox">
                                                            <span class="regular-price"><?php echo $col['gia'] ?> VNĐ</span>
                                                            <div class="ratings">
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <div class="pro-review">
                                                                    <span>1 review(s)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                 <?php
                                                 } ?>
                                            </div>
                                            <!-- product single item end -->
                                            <!-- product single item start -->
                                            <div class="col">
                                                <?php while($col = mysqli_fetch_assoc($rstainghe))
                                                { ?>
                                                <div class="product-item fix mb-30" >
                                                    <div class="product-thumb" >
                                                        <a href="pages/chitiet.php?id=<?php echo $col['id']; ?>">
                                                            <img src="assets/img/product/<?php echo($col['image']); ?>" style = " width: 135px; height: 135px" class="img-pri" alt="">
                                                            <img src="assets/img/product/tainghe-4.jpg" style = " width: 135px; height: 135px" class="img-sec" alt="">
                                                        </a>
                                                        <div class="product-label">
                                                            <span>hot</span>
                                                        </div>
                                                        <div class="product-action-link">
                                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                            <a href="pages/cart.php?them=<?php echo row['id']; ?>" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#"><?php echo $col['tensp'] ?> </a></h4>
                                                        <div class="pricebox">
                                                            <span class="regular-price"><?php echo $col['gia'] ?> VNĐ</span>
                                                            <div class="ratings">
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <div class="pro-review">
                                                                    <span>1 review(s)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                 <?php
                                                 } ?>
                                            </div>
                                            <!-- product single item end -->
                                            <!-- product single item start -->
                                            <div class="col">
                                                <?php while($col = mysqli_fetch_assoc($rstablet))
                                                { ?>
                                                <div class="product-item fix mb-30" >
                                                    <div class="product-thumb" >
                                                        <a href="pages/chitiet.php?id=<?php echo $col['id']; ?>">
                                                            <img src="assets/img/product/<?php echo($col['image']); ?>" style = " width: 135px; height: 135px" class="img-pri" alt="">
                                                            <img src="assets/img/product/maytinhbang-4.jpg" style = " width: 135px; height: 135px" class="img-sec" alt="">
                                                        </a>
                                                        <div class="product-label">
                                                            <span>hot</span>
                                                        </div>
                                                        <div class="product-action-link">
                                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                            <a href="pages/cart.php?them=<?php echo row['id']; ?>" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#"><?php echo $col['tensp'] ?> </a></h4>
                                                        <div class="pricebox">
                                                            <span class="regular-price"><?php echo $col['gia'] ?> VNĐ</span>
                                                            <div class="ratings">
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <div class="pro-review">
                                                                    <span>1 review(s)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                 <?php
                                                 } ?>
                                            </div>
                                            <!-- product single item end -->
                                            <!-- product single item start -->
                                            <div class="col">
                                                <?php while($col = mysqli_fetch_assoc($rstv))
                                                { ?>
                                                <div class="product-item fix mb-30" >
                                                    <div class="product-thumb" >
                                                        <a href="pages/chitiet.php?id=<?php echo $col['id']; ?>">
                                                            <img src="assets/img/product/<?php echo($col['image']); ?>" style = " width: 135px; height: 135px" class="img-pri" alt="">
                                                            <img src="assets/img/product/tv-3.jpg" style = " width: 135px; height: 135px" class="img-sec" alt="">
                                                        </a>
                                                        <div class="product-label">
                                                            <span>hot</span>
                                                        </div>
                                                        <div class="product-action-link">
                                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                                            <a href="pages/cart.php?them=<?php echo row['id']; ?>" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="#"><?php echo $col['tensp'] ?> </a></h4>
                                                        <div class="pricebox">
                                                            <span class="regular-price"><?php echo $col['gia'] ?> VNĐ</span>
                                                            <div class="ratings">
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <div class="pro-review">
                                                                    <span>1 review(s)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                 <?php
                                                 } ?>
                                            </div>
                                            <!-- product single item end -->



                                </div>
                            </div>

                            <!-- start pagination area -->
                        <div class="paginatoin-area text-center pt-28">
                            <div class="row">
                                <div class="col-12">
                                    <ul class="pagination-box">
                                        <li><a class="Previous" href="#">Previous</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a class="Next" href="#"> Next </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end pagination area -->

                    </div>


                </div>
            </div>

         </div>

		  <footer>
            <!-- footer top start -->
            <div class="footer-top bg-black pt-14 pb-14">
                <div class="container">
                    <div class="footer-top-wrapper">
                        <div class="newsletter__wrap">
                            <div class="newsletter__title">
                                <div class="newsletter__icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="newsletter__content">
                                    <h3>Đăng ký để nhận thông tin</h3>
                                    
                                </div>
                            </div>
                            <div class="newsletter__box">
                                <form id="mc-form">
                                    <input type="email" id="mc-email" autocomplete="off" placeholder="Email">
                                    <button id="mc-submit">subscribe!</button>
                                </form>
                            </div>
                            
                        </div>
                        <div class="social-icons">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer top end -->

            <!-- footer main start -->
            <div class="footer-widget-area pt-40 pb-38 pb-sm-4 pt-sm-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-26">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>liên hệ chúng tôi</h4>
                                </div>
                                <div class="widget-body">
                                    <ul class="location">
                                        <li><i class="fa fa-envelope"></i>tranleuy.kma@gmail.com</li>
                                        <li><i class="fa fa-phone"></i>0962979942</li>
                                        <li><i class="fa fa-map-marker"></i>Địa chỉ: Hà Nội</li>
                                    </ul>
                                    <a class="map-btn" href="contact-us.html">open in google map</a>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-26">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>tài khoản của tôi</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="#">tài khoản của tôi</a></li>
                                        <li><a href="pages/cart.php">giỏ hàng</a></li>
                                        <li><a href="#">kiểm tra</a></li>
                                        <li><a href="#">yêu thích</a></li>
                                        <li><a href="#">đăng nhập</a></li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-26">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>các sản phẩm</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="pages/laptop.php">máy vi tính</a></li>
                                        <li><a href="pages/car.php">xe</a></li>
                                        <li><a href="pages/smartphone.php">smart phone</a></li>
                                        <li><a href="pages/watch.php">đồng hồ</a></li>
                                        <li><a href="pages/camera.php">camera</a></li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                    </div>
                </div>
            </div>
            <!-- footer main end -->
        </footer>
        <!-- footer area end -->

	</div>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>


    <!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- Jquery Min Js -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper Min Js -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap Min Js -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- Plugins Js-->
    <script src="assets/js/plugins.js"></script>
    <!-- Ajax Mail Js -->
    <script src="assets/js/ajax-mail.js"></script>
    <!-- Active Js -->
    <script src="assets/js/main.js"></script>
    <!-- Switcher JS [Please Remove this when Choose your Final Projct] -->
    <script src="assets/js/switcher.js"></script>
</body>


</html>

