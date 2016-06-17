<?php 
	include("config.php");

	if (is_null($_SESSION['useremail'])) {
		echo "<script>alert('请先登录后购物!');history.back();</script>";
		exit;
	}
	if(isset($_GET['emptycart'])){
		$_SESSION['productlist'] = '';
		echo "<script>alert('清空成功!');history.back();</script>";
		exit;
	}
	$conn = mysqli_connect($HOST,$USER,$PASSWORD,$DB);
	$id = strval($_GET['id']);
	$sql = mysqli_query($conn, "select * from 31301105_product where id='".$id."'");  
	$info = mysqli_fetch_array($sql);
	$array = explode("@", $_SESSION['productlist']);
	for ($i=0; $i < count($array) - 1; $i++) { 
		if ($array[$i] == $id) {
			echo "<script>alert('该商品已经在您的购物车中!');history.back();</script>";
			exit;
		}
	}
	$_SESSION['productlist'] = $_SESSION['productlist'].$id."@";

	header("location:index.php","location:products.php");
?>