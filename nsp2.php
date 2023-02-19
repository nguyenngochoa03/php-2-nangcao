<?php
namespace cde;
class  SinhVien{

    public $ten;
    public $namsinh;

    public function __construct($ten,$namsinh)
    {
        $this->ten =$ten;
        $this->namsinh =$namsinh;

    }
    public function HienthithongtinSV(){
        echo "Tên".$this->ten."br";
        echo "Năm sinh". $this->namsinh;
    }
}
?>
