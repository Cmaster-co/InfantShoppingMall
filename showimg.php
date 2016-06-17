<?php 
	Vcode();
	function vCode() {
		header('Content-type: image/png');
		$im = imagecreate($x=60, $y=30);
		$bg = imagecolorallocate($im, rand(50,200), rand(0,155), rand(0,155));

		$fontColor = imagecolorallocate($im, 255, 255, 255);
		$fontstyle = 'c:\WINDOWS\Fonts\simsun.ttc';

		$str = "23456789abcdefghijkmnpqrstuvwxyz";
		$code = '';
		for ($i = 0; $i < 4; $i++) {
			$code .= $str[mt_rand(0, strlen($str)-1)];
		}

		$_SESSION['authcode'] = $$authcode;
		imagefttext($im, 20 , 0, 5, 25, $fontColor, 'c:\WINDOWS\Fonts\simsun.ttc', $code);
		for ($i=0; $i < 2; $i++) { 
			$lineColor = imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255));
			imageline($im, rand(0,$x), 0, rand(0,$x),$y,$lineColor);
		}

		for ($i=0; $i < 25; $i++) { 
			imagesetpixel($im, rand(0, $x), rand(0, $y), $fontColor);
		}
		imagepng($im);
		imagedestroy($im);
	}
 ?>