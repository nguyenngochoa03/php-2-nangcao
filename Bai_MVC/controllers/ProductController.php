<?php
require "models/nhanvien.php";
//function listProduct() {
//    $products = getProduct();
//    include_once 'views/list.php';
//}
//function addProduct() {
//    return "Day la chuc nang them san pham";
//}
function listNhanVien()
{
    $listnhanvien = nhanvien_loadall();
    include "views/list_nhanvien.php";
}
function addNhanVien()
{
    if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
        $name = $_POST["name"];
        $luong = $_POST["luong"];
        nhanvien_inset($name,$luong);
        header("location:?url=/");
        die();
    }

    include_once 'views/add_nhanvien.php';
}
function deleteNhanVien()
{
    nhanvien_delete();
    header("location:?url=/");
        die();
}

// tao fuction giong nhu tren
// tao bang nhan vien gom id,ten,luong
// lamf chuc nang danh sach,them,xoa bang mvc da hoc
?>