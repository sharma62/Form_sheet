<?php
session_start();//create session_start
$rand_num = rand(11111,99999);//Generate random number
$_SESSION['CODE'] = $rand_num; //store data in $_SESSION variable

$layer = imagecreatetruecolor(58,25);   //create colorless layer
$captcha_bg= imagecolorallocate($layer,255,160,120);// set background color on layer

imagefill($layer,0,0,$captcha_bg); // merge colorless layer with color layer

$captcha_text_color = imagecolorallocate($layer,0,0,0); // set captcha text color which is set in layer
imagestring($layer,5,5,5,$rand_num,$captcha_text_color);// merge all commponents (layer, size, x-coord, y-coord,captcha_text_color)
header("Content-Type: image/png");//redirect to image/jpeg format
imagejpeg($layer); // get the final image in jpeg format


?>