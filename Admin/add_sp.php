<?php
    session_start();
    include("../process/connectDB.php");
    include("check_ses.php");
    $tensp = $gia = $hangsx = $chitiet = null;
    $error= array();

    var username = request.username; //tranleuy
    var password = request.password; //123456

    
    var sql = "SELECT * FROM Users WHERE Username = '" 
            + username +"' AND Password = '" + password + "'";
    // SELECT * FROM Users WHERE Username = 'tranleuy' AND Password = ' ' OR' ' = ''
    // câu SQL này luôn cho kết quả true
     



     var password = request.password; // ' OR' ' = ''
    
    //lay id
    if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $sql = "SELECT * from sanpham where id='$id'";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_assoc($result);
                }
    //
    if(isset($_POST['submit'])){
        //xu ly anh uploads
        //begin
        //
        $f = 0;
        $imgUpload=$_FILES['image'];
        if(!empty($imgUpload['name'])){
            $target_dir="../assets/img/product/";
            $image = basename($imgUpload['name']);
            $target_file=$target_dir.$image;
            $type_file=pathinfo($imgUpload['name'], PATHINFO_EXTENSION);
            $type_file_allow=array('jpg','jpeg','png','gif');
            if(!in_array(strtolower($type_file), $type_file_allow)){
                $error['imgUpload']="* Vui lòng chỉ chọn file ảnh";
            }
            $img_size=$imgUpload['size'];
            if($img_size>5242880)//5mb
                $error['imgUpload']="* Vui lòng chọn ảnh nhỏ hơn 5MB";
            
        }else{
            $f=0;
            $image = $row['image'];
        }
        
        //
        //end

        $loaisp=$_POST['loaisp'];
        //ten sp
        if(empty($_POST['tensp'])){
            $error['tensp']="* Vui lòng nhập tên sản phẩm";
        }else $tensp = $_POST['tensp'];
        //gia
        if(empty($_POST['gia'])){
            $gia = "null";
        }
        else $gia = $_POST['gia'];
        //chi tiet
        if(empty($_POST['chitiet'])){
            $error['chitiet']="* Vui lòng viết mô tả sản phẩm";
        }else $chitiet = $_POST['chitiet'];
        //hang sx
        if(empty($_POST['hangsx'])){
            $error['hangsx']="* Vui lòng nhập hãng sản xuất";
        }else $hangsx = $_POST['hangsx'];
        //insert
        if(empty($error)){
            if($f==1) move_uploaded_file($imgUpload['tmp_name'], $target_file);
            $sql="INSERT INTO sanpham VALUES('',N'$tensp',N'$image',$gia,N'$chitiet',N'$loaisp',N'$hangsx',0)";
            mysqli_query($conn,$sql);
            echo "<script>alert('Thêm thành công !');location='index.php';</script>";
        }
    }
?>
<style>
        td{
        margin-left: 50px;
        font-family: 'Open Sans', sans-serif;
        line-height: 24px;
    }
    tr{
        padding-top: 100px;
        padding-bottom: 100px;
    }
    textarea{
        border-radius: 15px;
    }
    #title{
        width: 600px;
        border-radius: 15px;
    }
    #submit{
        width: 100px;
        border-radius: 15px;
        color: white;
        background-color: #555555;
    }
</style>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Admin</title>
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/vendors/css/charts/chartist.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/pages/dashboard-ecommerce.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              
            </ul>
            <ul class="nav navbar-nav float-right">         
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-vn"></i><span class="selected-language"></span></a>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a>Mail</a></div>
                </div>
              </li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="theme-assets/images/portrait/small/avt.png" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="theme-assets/images/portrait/small/avt.png" alt="avatar"><span class="user-name text-bold-700 ml-1">Admin</span></span></a>
                    
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="ft-power"></i> Đăng xuất</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="theme-assets/images/logo/logo.png"/>
              <h3 class="brand-text">Quản lý</h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="nav-item"><a href="index.php"><i class="ft-list"></i><span class="menu-title" data-i18n="">Danh sách sản phẩm</span></a>
          </li>
          <li class=" active"><a href="add_sp.php"><i class="ft-file-plus"></i><span class="menu-title" data-i18n="">Thêm</span></a>
          </li>
          <li class=" nav-item"><a href="edit_sp.php"><i class="ft-edit"></i><span class="menu-title" data-i18n="">Chỉnh sửa</span></a>
          </li>
          
        </ul>
      </div>
      <div class="navigation-background"></div>
    </div>
    
    <script src="ckeditor/ckeditor.js"></script>
    <div class="app-content content">
        <div class="container-fluid">
                <div class="row">
                    <form action="" method='POST' enctype="multipart/form-data">
                        <table id="upload_news" cellpadding="4px" cellspacing="0">
                        <tr>
                            <td><strong>Tên Sản Phẩm:</strong></td>
                            <td><input type="text" name="tensp" placeholder="Tên SP..." id="title" value="<?php if(isset($_POST['submit'])) echo $tensp ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><?php if(isset($error['tensp'])){ ?>
                                    <span style="color: red"><?php echo $error['tensp'] ?></span>
                                <?php } ?>
                            </td>
                        </tr>
                        <!--  -->
                        <tr>
                            <td><strong>Loại SP:</strong></td>
                            <td><select name="loaisp">
                                    <option value="laptop">LapTop</option>
                                    <option value="camera">Camera</option>
                                    <option value="smartphone">Smartphone</option>
                                    <option value="moto">Xe moto</option>
                                    <option value="oto">Xe oto</option>
                                    <option value="chuot">Chuột máy tính</option>
                                    <option value="tv">Tivi</option>
                                    <option value="tablet">Máy tính bảng</option>
                                    <option value="usb">Usb</option>
                                    <option value="tainghe">Tai nghe</option>
                                    <option value="watch">Đồng hồ</option>
                                  </select></td>
                        </tr>
                        <!--  -->
                        <tr>
                            <td><strong>Hãng SX:</strong></td>
                            <td><input type="text" name="hangsx" placeholder="Hãng SX..." id="title" value="<?php if(isset($_POST['submit'])) echo $hangsx ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><?php if(isset($error['hangsx'])){ ?>
                                    <span style="color: red"><?php echo $error['hangsx'] ?></span>
                                <?php } ?>
                            </td>
                        </tr>
                        <!--  -->
                        <tr>
                            <td><strong>Giá:</strong></td>
                            <td><input type="text" name="gia" placeholder="Giá..." id="title" value="<?php if(isset($_POST['submit'])) echo $gia ?>"></td>
                        </tr>
                        <!--  -->
                        <tr>
                            <td><strong>Ảnh Đại Diện:</strong></td>
                            <td><input type="file" name="image"></td>
                        </tr>
                         <tr>
                            <td></td>
                            <td><?php if(isset($error['imgUpload'])){ ?>
                                    <span style="color: red"><?php echo $error['imgUpload'] ?></span>
                                <?php } ?>
                            </td>
                        </tr>
                        <!--  -->
                        <tr>
                            <td><strong>Chi tiết:</strong></td>
                            <td><textarea class="ckeditor" name="chitiet" id="ckeditor" value="<?php if(isset($_POST['submit'])) echo $chitiet ?>"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><?php if(isset($error['chitiet'])){ ?>
                                    <span style="color: red"><?php echo $error['chitiet'] ?></span>
                                <?php } ?>
                            </td>
                        </tr>
                        <!--  -->
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" id="submit" value="Thêm"></td>
                        </tr>
                        </table>
                    </form>
                </div>
            </div>
    </div>


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2019  &copy; Copyright </span>
      </div>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="theme-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="theme-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>