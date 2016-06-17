<?php 
	unset($_SESSION['useremail']);
	echo "<script>alert('退出成功!');history.back();</script>";
	exit;
?>