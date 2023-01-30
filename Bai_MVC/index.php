<?php
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        require_once 'controllers/ProductController.php';
        echo listNhanVien();
        break;
    case 'themnhanvien':
        require_once 'controllers/ProductController.php';
        echo addNhanVien();
        break;
    case 'suanhanvien':
        require_once "controllers/ProductController.php";
        echo edit_nhanvien();
        break;
    case 'xoanhanvien':
        require_once "controllers/ProductController.php";
        echo deleteNhanVien();
        break;
}
?>
