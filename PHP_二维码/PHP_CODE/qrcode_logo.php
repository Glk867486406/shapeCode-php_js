<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/8/16
 * Time: 10:43
 */
include "./qrcode/phpqrcode.php";
$txt = "测试内容";
$picPathAndName = "./pic/ABC.jpg";//二维码保存路径和名称
$level = 'L';
$size = 5;
$is_logo = 1;//是否包含Logo 0否 1是
$margin = 2;//边距
$saveAndPrint = true;//是否保存，保存时，$picPathAndName设置为true

//生成二维码图片QRcode::png($txt, $picPathAndName, $level, $size, $margin,$saveAndPrint);

if($is_logo == 1){
    $QR = $picPathAndName; //已经生成的原始二维码图
    $Logo = './pic/logo.png';
    $Logo_re = './pic/test_logo.png';
    $QR = imagecreatefromstring(file_get_contents($QR));
    $Logo = imagecreatefromstring(file_get_contents($Logo));
    $QR_width = imagesx($QR); //二维码图片宽度
    $QR_height = imagesy($QR); //二维码图片高度
    $logo_width = imagesx($Logo); //logo图片宽度
    $logo_height = imagesy($Logo); //logo图片高度
    $logo_qr_width = $QR_width / 5;
    $scale = $logo_width / $logo_qr_width;
    $logo_qr_height = $logo_height / $scale;
    $from_width = ($QR_width - $logo_qr_width) / 2;
    imagecopyresampled($QR, $Logo, $from_width, $from_width, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
    //输出图片
    imagepng($QR, $Logo_re);
}