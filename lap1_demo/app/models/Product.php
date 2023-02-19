<?php
namespace App\Models;
class Product extends BaseModel {
    protected $table = "sanpham";
    public function getProduct(){
        $sql= "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function addProduct($id,$name,$image,$price,$description){
        $sql = "insert into $this->table values (null,'$name','img/$image','$price','$description')";
        $this ->setQuery($sql);
        return $this->execute();

    }
    public function getDetailProduct($id)-Q
        $sql = "select * from $this->table where id='$id'";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function updateProduct($id,$name,$image,$price,$description){
        $sql ="UPDATE $this->table SET name='$name',image='img/$image',price ='$price',description='$description' WHERE id = '$id'";
        $this->setQuery($sql);
        return $this->execute();
    }
    public function deleteProduct($id){
        $sql = "DELETE FROM $this->table WHERE id = '$id'";
        $this->setQuery($sql);
        return $this->execute();
    }
}
?>
