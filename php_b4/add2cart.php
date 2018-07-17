<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 7/15/2018
 * Time: 6:10 PM
 */
require_once('products.php');
session_start();
 //b1: lay ma sp ma nguoi dung chon
$masp = $_GET['masp'];
 // b1.1 : kiem tra san pham nay co trong gio hang hay chua
if (isset($_SESSION['cash'][$masp]) == true) {
   $_SESSION['cash'][$masp]['soluong'] += 1;
} else {
    $product = $products[$masp];

    $product['soluong'] = 1;
    //them sp vao session
    $_SESSION['cash'][$masp] = $product;

}



//$product['soluong'] = 1;
header('Location: cash.php'); ?>