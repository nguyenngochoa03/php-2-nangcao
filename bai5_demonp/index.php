<?php
//require_once "controllers/CategoryController.php";
//require_once "controllers/CustemerController.php";
//require_once "controllers/ProductController.php";
require_once "vendor/autoload.php";
 use App\Controllers\CategoryController;
 use App\Controllers\ProductController;
 use App\models\Product;
 $cateController = new CategoryController();
 $productController = new ProductController();
 $product = new Product();
// $customerController = new CustemerController();
?>
