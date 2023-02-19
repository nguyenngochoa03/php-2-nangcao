<?php

namespace App\models;
class Book extends BaseModel
{
    protected $table = 'danhmuc';
    public function getBook(){
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
	?>
