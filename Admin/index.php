<?php
	session_start();
	include("../process/connectDB.php");
	include("check_ses.php");
?>

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
    <link rel="stylesheet" type="text/css" href="theme-assets/css/components-lite.css">

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
          <li class="active"><a href="index.php"><i class="ft-list"></i><span class="menu-title" data-i18n="">Danh sách sản phẩm</span></a>
          </li>
          <li class=" nav-item"><a href="add_sp.php"><i class="ft-file-plus"></i><span class="menu-title" data-i18n="">Thêm</span></a>
          </li>
          <li class=" nav-item"><a href="edit_sp.php"><i class="ft-edit"></i><span class="menu-title" data-i18n="">Chỉnh sửa</span></a>
          </li>
          
        </ul>
      </div>
      <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
      
      <div class="container-fluid">
                <div class="row">

                    <div class="col-md-5">
                        <div class="btn-group" role="group" style="margin-top: 15px; color: white;">
                            <button type="button" class="btn btn-secondary" style="background-color: #647EDE; color: white">Loại Sản Phẩm</button>
                            <button type="button" class="btn btn-secondary"><a href="?xuli=phanloai&loai=laptop">Laptop</a></button>
                            <button type="button" class="btn btn-secondary"><a href="?xuli=phanloai&loai=camera">Camera</a></button>
                            <button type="button" class="btn btn-secondary" ><a href="?xuli=phanloai&loai=smartphone">Smartphone</a></button>
                            <button type="button" class="btn btn-secondary"><a href="?xuli=phanloai&loai=oto">Oto</a></button>
                            <button type="button" class="btn btn-secondary"><a href="?xuli=phanloai&loai=moto">Moto</a></button>
                            <button type="button" class="btn btn-secondary"><a href="?xuli=phanloai&loai=tablet">Tablet</a></button>
                            <button type="button" class="btn btn-secondary"><a href="?xuli=phanloai&loai=chuot">Chuột</a></button>
                            <button type="button" class="btn btn-secondary"><a href="?xuli=phanloai&loai=tv">Tivi</a></button>
                            <button type="button" class="btn btn-secondary"><a href="?xuli=phanloai&loai=tainghe">Tai nghe</a></button>
                            <button type="button" class="btn btn-secondary"><a href="?xuli=phanloai&loai=watch">Đồng hồ</a></button>
                        </div>
                    </div>
                    
                </div>
                <br>
                
                <div class="row page_float_up">
                    <table class="table ">
                          <thead>
                                <tr>
                                  <th >Id</th>
                                  <th >Ảnh</th>
                                  <th >Tên Sản Phẩm</th>
                                  <th >Giá</th>
                                  <th >Hãng SX</th>
                                  <th >Tùy Chọn</th>
                                </tr>
                          </thead>
                          <tbody>
                                
                                <!-- php xu li hien sp -->
                                            <?php 
                                                $result = null;
                                                if(isset($_GET['search'])){
                                                    $search = $_GET['search'];
                                                    $sql = "SELECT * from sanpham where tensp like '%$search%'";
                                                    $result = mysqli_query($conn,$sql);
                                                }
                                                if(isset($_GET['xuli'])){
                                                    if($_GET['xuli']=='phanloai'){
                                                        if(isset($_GET['loai'])){
                                                            $loaisp = $_GET['loai'];
                                                            $sql = "SELECT * from sanpham where loaisp='$loaisp'";
                                                            $result = mysqli_query($conn,$sql);
                                                        }
                                                    }
                                                    if($_GET['xuli']=='del'){
                                                        if(isset($_GET['id'])){
                                                            $id = $_GET['id'];
                                                            $sql = "DELETE from sanpham where id='$id'";
                                                            mysqli_query($conn,$sql);
                                                            echo "<script> history.back()</script>";
                                                        }
                                                    }
                                                }
                                                if(!isset($_GET['search'])&&!isset($_GET['xuli'])){
                                                    $sql = "SELECT * from sanpham ";
                                                    $result = mysqli_query($conn,$sql);
                                                }
                                                if($result != null){
                                                while($row = mysqli_fetch_assoc($result)){ ?>
                                <!-- php xu li hien sp -->
                                <tr style="text-align: left">
                                  <th scope="row"><?php echo $row['id']; ?></th>
                                  <td style="width: 150px">
                                    <img src="../assets/img/product/<?php echo $row['image']; ?>" style="width: 50px">
                                  </td>
                                  <td><?php echo $row['tensp']; ?></td>
                                  <td><?php if($row['gia']==null) echo "Liên hệ";
                                            else echo $row['gia']; ?></td>
                                  <td><?php echo $row['hangsx']; ?></td>
                                  <td>
                                    <a href="edit_sp.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                        <span><strong>Edit</strong></span>            
                                    </a>
                                    <a href="index.php?xuli=del&id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs">
                                       <span class="glyphicon glyphicon-remove" ></span>
                                       <span><strong>Delete</strong></span>            
                                    </a>
                                  </td>
                                </tr>
                                <?php }} ?>
                          </tbody>
                    </table>
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