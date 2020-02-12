<?php
include_once "./qrcode/phpqrcode.php";

/**
 * 参数:p1:二维码包含的内容 p2:输出的文件名 p3:容错级别 p4:大小 p5:外边距margin p6:保存路径
 * 在浏览器上直接生成一个二维码(内容为abc)
 */
QRcode::png("abc");
QRcode::png("ABC",false,QR_ECLEVEL_L,10,5,false);

/**
 * 生成文件到本地
 * 参数:p1:二维码包含的内容 p2:输出的文件名 p3:容错级别 p4:大小 p5:外边距margin p6:是否保存并打印(false 直接生成 true 生成且打印)
 * PS:$saveandprint源码的p6参数做了修改
 */

QRcode::png("ABC","ABC.jpg",QR_ECLEVEL_H,10,2,false);
