<?php
require_once 'models/pdo.php';
function getProduct() {
    $sql = "select * from product";
    return getData($sql);
}
