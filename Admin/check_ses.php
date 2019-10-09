<?php  
	if($_SESSION['login']==""||$_SESSION['login']!="admin"){
		header('Location: ad_login.php');
	}
?>
