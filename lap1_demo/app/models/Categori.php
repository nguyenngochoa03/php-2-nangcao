<?php
namespace App\Models;
class Categori extends BaseModel{
    protected $table = "danhmuc";
    public function getCategori(){
        $sql= "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function addCategori($id,$name,$image,$description){
        $sql = "insert into $this->table values (null,'$name','img/$image','$description')";
        $this ->setQuery($sql);
        return $this->execute();
    }
    public function getDetailCategori($id){
        $sql = "select * from $this->table where id='$id'";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function updateCategori($id,$name,$image,$description){
        $sql ="UPDATE $this->table SET name='$name',image='img/$image',description='$description' WHERE id = '$id'";
        $this->setQuery($sql);
        return $this->execute();
    }
    public function deleteCategori($id){
        $sql = "DELETE FROM $this->table WHERE id = '$id'";
        $this->setQuery($sql);
        return $this->execute();
    }
}
