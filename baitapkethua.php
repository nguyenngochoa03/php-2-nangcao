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
     public $diemtoan;
     public $diemhoa;
     public $diemly;

    public function __construct($diemtoan,$diemhoa,$diemly)
    {
        $this ->diemtoan= $diemtoan;
        $this ->diemhoa = $diemhoa;
        $this ->diemly = $diemly;

    }
    public function tinhDiemTB(){
        return($this->diemtoan + $this->diemhoa + $this->diemly)/3;
    }
    public function xepLoai($dtb) {
        if($dtb >=5) {
            return "đạt";
        }elseif($dtb < 5) {
            return "không đạt";
        }
    }
    public function hienThiThongTinsv(){
        echo "họ tên : " .$this->Hoten."</br>"."Tuổi :".$this->tinhTuoi($this->namsinh)."<br>". "địa chỉ:".$this->diachi."</br>"
 . "số điện thoại:".$this->sdt."</br>" . "email:".$this->email."</br>". " điểm trung bình : " .$this->tinhDiemTB()."</br>"
            ." xếp loại : " .$this->xepLoai($this->tinhDiemTB())."</br>"  ;
    }


}
class Giangvien extends Connguoi {
    public $Luongcb;
    public $Sogioday;
    public function __construct($Luongcb,$Sogioday){
     $this->Luongcb =$Luongcb;
     $this->Sogioday =$Sogioday;
    }
    public function tongLuong(){
        return $this->Luongcb * $this->Sogioday;
    }
    public function hienThiThongTingv(){
        echo "họ tên : " .$this->Hoten."</br>"."Tuổi :".$this->tinhTuoi($this->namsinh)."<br>". "địa chỉ:".$this->diachi."</br>"
            . "số điện thoại:".$this->sdt."</br>" . "email:".$this->email."</br>". "Tổng Lương : ".$this->tongLuong();
    }
}
$sv = new sinhvien(8,9,10);
$sv->setHoten("Hoa");
$sv->setnamsinh(2003);
$sv->setdiachi("phương canh");
$sv->setsdt("0964535519");
$sv->setemail("hoa1233@gmail.com");
$sv->hienThiThongTinsv();

$sv = new Giangvien(8,9);
$sv->setHoten(" Ngọc Hoa");
$sv->setnamsinh(1999);
$sv->setdiachi("hà nội ");
$sv->setsdt("09645300000");
$sv->setemail("ngochoa1233@gmail.com");
$sv->hienThiThongTingv();
?>
