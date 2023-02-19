<?php
namespace abc;
class  SinhVien{

    public $ten;
    public $tuoi;
    public function __construct($ten,$tuoi)
    {
        $this->ten =$ten;
        $this->tuoi =$tuoi;
    }
    public function HienthithongtinSV(){
        echo "Tên".$this->ten."br";
        echo "Tuôi". $this->tuoi;
    }
}
?>
