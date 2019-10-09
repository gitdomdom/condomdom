<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <form class="box" action="" method="post">

      <h1>Login</h1>
      <div id="name">
        <input type="text" name="name" placeholder="Username">
      </div>
      <div id="pass">
        <input type="password" name="pass" placeholder="Password">
      </div>
      <div id="lgsubmit">
        <input type="submit" name="submit" value="Login">
      </div>
        <div id="home">
          <a href="../index.php">Trang chủ</a>
        </div>      
      
    </form>
    <!--xu ly dang nhap-->
  <?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
      include("../process/connectDB.php");
      $name = $_POST['name'];
      $pass = $_POST['pass'];
      $sql  = "SELECT * FROM account WHERE name='$name' AND pass='$pass'";
      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);
      if( $count > 0){
        $_SESSION['login']=$name;
        header('Location: index.php');
      }else
        echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác !')</script>";
    }
  ?>

</body>
</html>