<?php
// định nghĩa 2q class động vật
// class trìu tượng được gọi là 1 class cho nên nó có đầy đủ thuộc tính và phương thức
// nhưng có thêm phương thức trìu tượng
// class trìu tượng thì không thể khỏi tạo đc
abstract class DongVat{
    // định nghĩa 1 phương thức trìu tượng
    abstract function chay();
}

class ConCho extends DongVat{
    public function chay()
    {
        echo "con chó chạy bằng 4 chân";
    }
}
class ConNguoi extends DongVat{
    public function chay()
    {
        echo "con người chạy bằng 2 chân"."<br>";
    }
}
// khỏi tạo con chó và trỏ đén phương thức chạy
$cn = new Connguoi();
$cn->chay();
$cc = new ConCho();
$cc->chay();

// xây dựng 1 class tính chu vi và diện tích hình chữ nhật
//xây dựng 1 class tính chu vi và dien tich hình vuông
// xây dựng 1 class tính chu vi và dien tich hinh tam giac
//xây dựng 1 class tính trìu tượng và xác định các phương thức trìu tượng cho 3 class trên

//abstract class HinhHoc{
//    abstract function tinhChuVi();
//    abstract function tinhDienTich();
//
//}
// class HinhChuNhat extends HinhHoc{
//     public $cd  ;
//     public $cr;
//
//    public function __construct($cd, $cr){
//      $this->cd = $cd;
//      $this->cr = $cr;
//    }
//    public function tinhChuVi(){
//        echo "Chu vi HCN là :" .($this->cd + $this->cr) * 2;
//    }
//    public function tinhDienTich(){
//        echo " Diện tích HCN là :".($this->cd * $this->cr);
//    }
//
// }
// class HinhVuong extends HinhHoc{
//    public $chieudai;
//    public function __construct($chieudai)
//    {
//        $this->chieudai = $chieudai;
//    }
//    public function tinhChuVi(){
//        echo $this->chieudai  * 4;
//
//    }
//    public function tinhDienTich(){
//        echo ($this->chieudai  * $this->chieudai);
//    }
// }
// class HinhTamGiac extends HinhHoc{
//     public $canh;
//     public $chieudai;
//     public $chieucao;
//     public function __construct($canh,$chieudai,$chieucao)
//     {
//         $this->canh = $canh;
//         $this->chieudai=$chieudai;
//         $this->chieucao=$chieucao;
//     }
//     public function tinhChuVi(){
//
//         echo $this->canh+$this->chieudai+$this->chieucao;
//     }
//     public function tinhDienTich(){
//         $s = ($this->canh + $this->chieudai + $this->chieucao)/2;
//         echo sqrt($s *($s-$this->canh)*($s-$this->chieudai)*($s-$this->chieucao));
//     }
// }
// $chunhat = new HinhChuNhat("5","8");
//$chunhat->tinhChuVi();
//echo "<br>";
//$chunhat->tinhDienTich();

?>
