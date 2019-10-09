<html lang="en" class=" js cssanimations csstransforms js cssanimations csstransforms js cssanimations csstransforms">
    <?php include("../assets/tmp/head.html"); ?>
<body>
	
	<div>
		
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
                                    <li class="breadcrumb-item active" aria-current="page">contact us</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->


<!-- team area start -->
        <div class="team-area pt-28">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-box text-center mb-10">
                            <h3>our team</h3>
                        </div>
                    </div>
                </div> <!-- section title end -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-member mb-30">
                            <div class="team-thumb img-full">
                                <img src="../assets/img/team/team_member_1.jpg" alt="">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h3>Trần Lê Uy</h3>
                                <h6>leader & developer</h6>
                                
                            </div>
                        </div>
                    </div> <!-- end single team member -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-member mb-30">
                            <div class="team-thumb img-full">
                                <img src="../assets/img/team/team_member_2.jpg" alt="">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h3>Bạch Diệp Chi</h3>
                                <h6>designer</h6>
                                
                            </div>
                        </div>
                    </div> <!-- end single team member -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-member mb-30">
                            <div class="team-thumb img-full">
                                <img src="../assets/img/team/team_member_5.jpg" alt="">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h3>Lê Sỹ Nhiên</h3>
                                <h6>developer</h6>
                            </div>
                        </div>
                    </div> <!-- end single team member -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-member mb-30">
                            <div class="team-thumb img-full">
                                <img src="../assets/img/team/team_member_6.jpg" alt="">
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h3>Nguyễn Ngọc Ánh</h3>
                                <h6>creatory</h6>
                            
                            </div>
                        </div>
                    </div> <!-- end single team member -->
                </div>
            </div>
        </div>
        <!-- team area end -->
        

        



		 <?php 
         include("../assets/tmp/footer.html")
          ?>
        <!-- footer area end -->


	</div>

	<!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- Jquery Min Js -->
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper Min Js -->
    <script src="js/vendor/popper.min.js"></script>
    <!-- Bootstrap Min Js -->
    <script src="js/vendor/bootstrap.min.js"></script>
    <!-- Plugins Js-->
    <script src="js/plugins.js"></script>
    <!-- Ajax Mail Js -->
    <script src="js/ajax-mail.js"></script>
    <!-- Active Js -->
    <script src="js/main.js"></script>
    <!-- Switcher JS [Please Remove this when Choose your Final Projct] -->
    <script src="js/switcher.js"></script>
</body>
</html>