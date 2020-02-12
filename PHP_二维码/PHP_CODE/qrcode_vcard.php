<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/8/15
 * Time: 23:00
 */
require_once "./qrcode/phpqrcode.php";

/**
 * 生成电子签名
 * PS;使用微信扫描二维码
 */
$content = 'BEGIN:VCARD' . "\n";//起始标志
$content .= 'VERSION:2.1' . "\n";//当前版本
$content .= 'N:周' . "\n";//姓
$content .= 'FN:勇' . "\n";//名
$content .= 'ORG:江苏东大集成电路系统有限公司' . "\n";//公司名称
$content .= 'TITLE:PHP研发程序员' . "\n";//职位
$content .= 'TEL;WORK;VOICE:0523-83623173' . "\n";//工作电话
$content .= 'ADR;WORK:;;高新区星火路#2;南京市;江苏省;225762;中国' . "\n";//工作地址
$content .= 'ADR;HOME:;;下圩镇王横村178号;兴化市;江苏省;225762;中国' . "\n";//家庭地址(街道,地级市,省,邮编,国家)
$content .= 'TEL;TYPE:18000001111' . "\n";//移动电话
$content .= 'EMAIL:123456@qq.com' . "\n";//邮箱
$content .= 'URL:www.baidu.com' . "\n";//个人主页
$content .= 'END:VCARD' . "\n";//结束标志
QRcode::png($content);