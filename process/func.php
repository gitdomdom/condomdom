<?php 
	include("connectDB.php");

	function get_so_luong($sp){
		global $conn;
		$sql="select * from sanpham where loaisp='".$sp."'";
    	$result = mysqli_query($conn,$sql);
   	 	return mysqli_num_rows($result);
		}

	function so_luong_kq($sp){
		global $conn;
		$sql="select id,tensp,image,gia from sanpham where tensp like '%$sp%'";
    	$result = mysqli_query($conn,$sql);
   	 	return mysqli_num_rows($result);
	}

	function set_loaisp($loai){
        return $loai;
    }
 ?>
