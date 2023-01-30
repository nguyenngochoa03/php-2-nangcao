<?php
include "models/pdo.php";
function nhanvien_inset($name,$luong){
    $sql = "INSERT INTO `nhanvien`( `name`, `luong`) VALUES ('$name','$luong')";
    return getData($sql,false);
    // return $sql;
};
function nhanvien_loadall(){
    $sql = "SELECT * FROM `nhanvien` ";
    return getData($sql);

}
function nhanvien_loadone(){
    $id = $_GET["id"];
    $sql = "SELECT * FROM `nhanvien` WHERE id= $id";
    return getData($sql,false);
}
function nhanvien_delete(){
    $id = $_GET["id"];
    $sql = "DELETE FROM `nhanvien` WHERE id= $id";
    return getData($sql,false);
}

?>
