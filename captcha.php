<?Php
session_start();
header ("Content-type: image/png");
if(isset($_SESSION['my_captcha']))
{
unset($_SESSION['my_captcha']);
}
$string1="abcdefghijklmnopqrstuvwxyz";
$string2="1234567890";
$string=$string1.$string2;
$string= str_shuffle($string);
$random_text= substr($string,0,8);
$_SESSION['my_captcha'] =$random_text;
$im = @ImageCreate (80, 20)
or die ("Cannot Initialize new GD image stream");
$background_color = ImageColorAllocate ($im, 204, 204, 204);
$text_color = ImageColorAllocate ($im, 51, 51, 255);
ImageString($im,5,5,2,$_SESSION['my_captcha'],$text_color);
ImagePng ($im); // image displayed
imagedestroy($im);
?>