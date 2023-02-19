<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});

// khu vực quan tâm
// bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function(){
    return "trang chủ";
});

$router->get('test', [App\Controllers\ProductController::class, 'index']);
$router->get('add-product',[App\Controllers\ProductController::class,'addProduct' ]);
$router->post('add-product-post',[App\Controllers\ProductController::class,'productPost' ]);
$router->get('edit-product/{id}',[App\Controllers\ProductController::class,'editProduct' ]);
$router->post('edit-product-post/{id}',[App\Controllers\ProductController::class,'editProductPost' ]);
$router->get('delete-product/{id}',[App\Controllers\ProductController::class,'Deletehoa' ]);

$router->get('listcategori', [App\Controllers\CategoriController::class, 'index']);
$router->get('add-categori',[App\Controllers\CategoriController::class,'addCategori' ]);
$router->post('add-categori-good',[App\Controllers\CategoriController::class,'categoriGood' ]);
$router->get('edit-categori/{id}',[App\Controllers\CategoriController::class,'editCategori' ]);
$router->post('edit-categori-post/{id}',[App\Controllers\CategoriController::class,'editCategoriPost' ]);
$router->get('delete-categori/{id}',[App\Controllers\ProductController::class,'DeleteCategori' ]);

$router->get('listservice', [App\Controllers\ServiceController::class, 'index']);
$router->get('add-service',[App\Controllers\ServiceController::class,'addService' ]);
$router->post('add-service-post',[App\Controllers\ServiceController::class,'servicePost' ]);
$router->get('edit-service/{id}',[App\Controllers\ServiceController::class,'editService' ]);
$router->post('edit-service-post/{id}',[App\Controllers\ServiceController::class,'editServicePost' ]);
$router->get('delete-service/{id}',[App\Controllers\ServiceController::class,'DeleteService' ]);
// định nghĩa 1 route add-peoduct và trỏ đến hàm add trong product controller

// khu vực cần quan tâm --- end--
# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>
