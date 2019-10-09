<?php 
                    
                    $hang = null;
                    if(isset($_GET['hang'])){
                        $hang=$_GET['hang'];
                        if(isset($_GET['sx'])){
                            $sx = $_GET['sx'];
                            if($sx == 'hot'){
                                $result = mysqli_query($conn,"SELECT id,tensp,image,gia from sanpham where loaisp='$loaisp' and hangsx='$hang' group by sldaban desc");
                            }
                            else{
                                $result = mysqli_query($conn,"SELECT id,tensp,image,gia from sanpham where loaisp='$loaisp' and hangsx='$hang' group by gia $sx");
                            }     
                        }
                        else{
                            $result = mysqli_query($conn,"SELECT id,tensp,image,gia from sanpham where loaisp='$loaisp' and hangsx='$hang'");
                        }                 
                    }
                    else{
                        if(isset($_GET['sx'])){
                            $sx = $_GET['sx'];
                            if($sx == 'hot'){
                                $result = mysqli_query($conn,"SELECT id,tensp,image,gia from sanpham where loaisp='$loaisp' group by sldaban desc");
                            }
                            else{
                                $result = mysqli_query($conn,"SELECT id,tensp,image,gia from sanpham where loaisp='$loaisp' group by gia $sx");
                            }     
                        }
                        else{
                            $result = mysqli_query($conn,"SELECT id,tensp,image,gia from sanpham where loaisp='$loaisp'");
                        } 
                    }
 ?>