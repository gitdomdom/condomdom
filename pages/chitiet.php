<?php
	include("../process/connectDB.php");
    session_start();
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $sql = "SELECT * from sanpham where  id = '$id' ";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die('Lỗi'. mysqli_error($conn));}

?>
<html lang="en" class=" js cssanimations csstransforms js cssanimations csstransforms">

	<?php include("../assets/tmp/head.html") ?>
	<link rel="stylesheet" href="../assets/css/chitietsp.css">

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
                                                    <a class="dropdown-item" href="../Admin/index.php">Quản lý với Admin</a>
                                                    <a class="dropdown-item" href="../pages/login.php"> Đăng nhập</a>
                                                
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Yêu thích</a>
                                        </li>
                                        <li>
                                            <a href="../pages/cart.php">Giỏ hàng</a>
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
                                <a href="../index.php">
                                    <img src="../assets/img/logo/chayboteam.png" alt="brand logo">
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
                                <form action="../pages/kqtimkiem.php" method="POST" enctype="multipart/form-data">
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
                                            <li class="active"><a href="../index.php"><i class="fa fa-home"></i>Home <i class="fa fa-angle-down"></i></a>
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
                                                            <li><a href="../Admin/ad_login.php">tài khoản của tôi</a></li>
                                                            <li><a href="../pages/login.php">đăng nhập</a></li>
                                                            <li><a href="../pages/about-us.php">about us</a></li>
                                                            <li><a href="../pages/contact-us.php">contact us</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="../index.php">shop </a>
                                                
                                            </li>
                                            <li><a href="../pages/contact-us.php">contact us </a>
                                                
                                            </li>
                                            <li><a href="../pages/about-us.php">About us</a></li>
                                            
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
		 <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

		
		<!-- product details wrapper start -->
        <div class="product-details-wrapper">
            
            <div class="container">
                <?php
                     if (mysqli_num_rows($result) > 0) {
                     while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="row">
                        <div class="col-lg-9">
                            <!-- product details inner end -->
                            <div class="product-details-inner">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="product-large-slider mb-20 slick-arrow-style_2">
                                            <div class="pro-large-img img-zoom" id="img1">
                                                <img src="../assets/img/product/<?php echo $row['image']; ?>">
                                            </div>
                                         </div>
                                        </div>
                                     <div class="col-lg-6">
                                         <div class="product-details-des mt-md-34 mt-sm-34">
                                         <h3><a href="../pages/chitiet.php"><?php echo $row['tensp']; ?></a></h3>
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
                                        <div class="customer-rev">
                                            <a href="#">(1 customer review)</a>
                                        </div>
                                        <div class="availability mt-10">
                                            <h5>Availability:</h5>
                                            <span>1 in stock</span>
                                        </div>
                                        <div class="pricebox">
                                            <span class="regular-price"><?php echo $row['gia']; ?></span>
                                        </div>
                                        <strong><?php echo $row['chitiet'] ?></strong>
                                        <div class="quantity-cart-box d-flex align-items-center">
                                            <div class="quantity">
                                                <div class="pro-qty"><input type="number" name =" quantity" value="1" id="num" name="num"></div>
                                            </div>
                                            <div class="action_link">
                                                <a class="buy-btn" href="../pages/cart.php?them=<?php echo $row['id'];?>" >Mua ngay<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="useful-links mt-20">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i>compare</a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i>wishlist</a>
                                        </div>
                                        <div class="share-icon mt-20">
                                            <a class="facebook" href="#"><i class="fa fa-facebook"></i>like</a>
                                            <a class="twitter" href="#"><i class="fa fa-twitter"></i>tweet</a>
                                            <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>save</a>
                                            <a class="google" href="#"><i class="fa fa-google-plus"></i>share</a>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <!-- product details inner end -->          
                    </div>

                    <?php
            
                    }
                }
                ?>
                           	
            </div>
         </div>


        <?php 
        include("../assets/tmp/footer.html")
         ?>
 </div>

<script type="text/javascript">( function(){ window.SIG_EXT = {}; } )()</script><script type="text/javascript">( function(){ window.SIG_EXT = {}; } )()</script>
</body>
</html>