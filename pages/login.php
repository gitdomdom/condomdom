    <html lang="en" class=" js cssanimations csstransforms js cssanimations csstransforms js cssanimations csstransforms">
    <?php include("../assets/tmp/head.html"); ?>
    <body style="">
    <div align="center">
        <?php ob_start();
            include("../assets/tmp/header.html"); 
            include("../process/connectDB.php");
            if(isset($_POST['submit'])){
                $name =trim($_POST['name']) ;
                $pass = trim($_POST['pass']);
                $sql = "SELECT * from account where name='$name' and pass='$pass'";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    $_SESSION['login'] = $name;
                    header("location:../index.php");
                }else{
                    echo "<script>alert('username hoặc password không đúng')</script>";
                }
            } ?>

        	<!-- breadcrumb area start -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">login</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb area end -->

            <!-- login  wrapper start -->
            <div class="login-register-wrapper" >
                <div class="container">
                    <div class="member-area-from-wrap">
                        <div class="row">
                            <!-- Login Content Start -->
                            <div class="col-lg-12">
                                <div class="login-reg-form-wrap  pr-lg-50">
                                    <h2>Sign In</h2>
                                    <form action="#" method="post">
                                        <div class="single-input-item">
                                            <input input type="text" id="login-username" name="name" class="form-control" autocomplete="off" placeholder="Email or Username" style="width: 480px" required />
                                        </div>
                                        <div class="single-input-item">
                                            <input type="password" id="login-password" name="pass" class="form-control" autocomplete="off" placeholder="Enter your Password" style="width: 480px" required />
                                        </div>
                                        <div class="single-input-item">
                                            <div class="login-reg-form-meta d-flex align-items-center justify-content-between" style="width: 300px">
                                                <div class="remember-meta" >
                                                    <div class="custom-control custom-checkbox" >
                                                        <input type="checkbox" class="custom-control-input" id="rememberMe">
                                                        <label class="custom-control-label" for="rememberMe">Nhớ mật khẩu</label>
                                                    </div>
                                                </div>
                                                <a href="#" class="forget-pwd">Quên mật khẩu?</a>
                                            </div>
                                        </div>
                                        <div class="single-input-item">
                                            <button class="sqr-btn" type="submit" name="submit" value="login">Đăng nhập</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Login Content End -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- login wrapper end -->
            <?php include("../assets/tmp/footer.html") ?>
        </div>
    	
    	<!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
        <script src="../assets/js/vendor/modernizr-3.6.0.min.js"></script>
        <!-- Jquery Min Js -->
        <script src="../assets/js/vendor/jquery-3.3.1.min.js"></script>
        <!-- Popper Min Js -->
        <script src="../assets/js/vendor/popper.min.js"></script>
        <!-- Bootstrap Min Js -->
        <script src="../assets/js/vendor/bootstrap.min.js"></script>
        <!-- Plugins Js-->
        <script src="../assets/js/plugins.js"></script>
        <!-- Ajax Mail Js -->
        <script src="../assets/js/ajax-mail.js"></script>
        <!-- Active Js -->
        <script src="../assets/js/main.js"></script>
        <!-- Switcher JS [Please Remove this when Choose your Final Projct] -->
        <script src="../assets/js/switcher.js"></script>
    </body>
    <script type="text/javascript">( function(){ window.SIG_EXT = {}; } )()</script><script type="text/javascript">( function(){ window.SIG_EXT = {}; } )()</script></body></html>
