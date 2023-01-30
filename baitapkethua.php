<?php
//định nghĩa 1 class ConNguoi gồm thuộc tính hoten,namsinh,diachi,email,sdt
//tạo phương thức tính tuổi (Có trả về) = năm hiện tại - năm sinh
//tạo phương thức set cho các thuộc tính trên
//định nghĩa 1 class SinhVien kế thừa từ class ConNguoi và có thêm các
// thuộc tính Điểm Toán,Điểm Lý,Điểm Hóa
// tạo phương thức tinhdiemTB(Có trả về) = (toán + lý + hóa)/3
// tạo phương thức xếp loại biết nếu điểmTB >=5 là đạt ,điểmTB < 5 là không đạt
//tạo phương thức hiển thị thông tin sv gồm:
// hoten,namsinh,diachi,email,sdt,điểmTB,xếp loại
//định nghĩa 1 class GiangVien kế thừa từ class ConNguoi và có thêm các thuộc
//tính  lươngcb,số giờ dạy
//tạo phương thức tổng lương  = lương cb * số giờ dạy  (Có trả về)
// tạo phương thức hiển thị thông tin Giảng viên gồm:
//hoten,namsinh,diachi,email,sdt,tổng lương

class Connguoi{
    public $Hoten;
    public $namsinh;
    public $diachi;
    public $sdt;
    public $email;


    public function tinhTuoi()
    {
        return date("Y") - $this->namsinh;

    }
    public function setHoten($Hoten){
        $this->Hoten = $Hoten;
    }
    public function setnamsinh($namsinh){
        $this->namsinh = $namsinh;
    }
    public function setdiachi($diachi){
        $this->diachi = $diachi;
    }
    public function setsdt($sdt){
        $this ->sdt = $sdt;
    }
    public function setemail($email)
    {
        $this->email = $email;
    }

}
class Sinhvien extends Connguoi{
    public function __construct($Hoten,$namsinh,$diachi,$sdt,$email)
    {
        $this ->Hoten = $Hoten;
        $this ->namsinh = $namsinh;
        $this ->diachi = $diachi;
        $this->sdt = $sdt;
        $this ->email = $email;
    }
//    public function hienThiThongTin(){
//        echo "họ tên " .$this->Hoten."</br>". "địa chỉ".$this->diachi."</br>" . "Năm sinh ".$this->namsinh ."</br>" ."Tuổi".$this->tinhTuoi(). "số điện thoại".$this->sdt."</br>" . "email".$this->email."</br>" ;
//    }

    public function ĐiemTB(){

    }
    public function Đientoan(){
      
   }
    public function Điemly(){

   }
   public function Điemhoa(){

   }
}
class Giangvien extends Connguoi {
    public function Luongcb(){

}
public function Sogioday(){

}
}
$vietnam = new Connguoi( );
//$vietnam->hienThiThongTin();
$vietnam->setHoten("Hoa");
$vietnam->setnamsinh(2003);
$vietnam->setdiachi("phương canh");
$vietnam->setsdt("0964535519");
$vietnam->setemail("hoa1233@gmail.com");
?>
