<?php
namespace App\Models;
class Service extends BaseModel
{
    protected $table = "dichvu";

    public function getService()
    {
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function addService($id,$name,$image,$price,$description){
        $sql = "insert into $this->table values (null,'$name','img/$image','$price','$description')";
        $this ->setQuery($sql);
        return $this->execute();

    }
    public function getDetailService($id){
        $sql = "select * from $this->table where id='$id'";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function updateService($id,$name,$image,$price,$description){
        $sql ="UPDATE $this->table SET name='$name',image='img/$image',price ='$price',description='$description' WHERE id = '$id'";
        $this->setQuery($sql);
        return $this->execute();
    }
    public function deleteService($id){
        $sql = "DELETE FROM $this->table WHERE id = '$id'";
        $this->setQuery($sql);
        return $this->execute();
    }
}
?>