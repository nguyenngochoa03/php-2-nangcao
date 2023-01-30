<?php
// class SinhVien{
//     // khai báo thuộc tính hay được gọi là khai báo biến 
//     public $tenSv;
//     public $masv;
//     public $namsinh;
//     // hàm khỏi tạo 
//     public function __construct($tenSv,$masv,$namsinh){
//         $this->tenSv = $tenSv;
//         $this->masv = $masv;
//         $this->namsinh = $namsinh;
//     }
//     // tạo phương thức tính tuổi 
//     public function tinhTuoi()
//     {
//         return date("Y") - $this->namsinh;

//     }
//     // khai báo phương thức set giá trị cho tên sinh viên 
//     public function setTenSV($tenSv){
//         $this->tenSv = $tenSv;
//     }
//     public function setmasv($masv)
//     {
//        $this->masv = $masv;
//     }
//     public function setnamsinh($namsinh)
//     {
//         $this->namsinh = $namsinh;
//     }

//     // khai báo phương thức hay còn gọi là khai báo hàm
//     public function hienThiThongTin(){
//         echo "tên sv " .$this->tenSv."</br>". "Mã sv".$this->masv."</br>" . "Năm sinh ".$this->namsinh ."</br>" ."Tuổi".$this->tinhTuoi();
//     }
// }
// // khởi tạo đối tượng Phát
// $hoa = new SinhVien("Hoa","ph22258","2003");
// $hoa->hienThiThongTin();
// echo "</br>";
// $hoa ->setTenSV("hoa xinh đẹp");
// $hoa->hienThiThongTin();

// tạo class giảng viên gồm các thuộc tính : maGV,tenGV,namGiangDay,LuongCB
// tạo hàm khỏi tạo cho các thuộc tính trên 
// tạo hàm tính thâm niên có trả về : Thâm nien =(namhientai-nambatdau)
// tạo hàm tính tổng lương = luong cơ ban * số giờ day (có trả về)
// tạo hàm xếp loại kiểm tra nếu:
//tongluong>=5000 đạt
//tongluong<= 5000 k đạt 
// tạo hàm hièn thị thông tin gồm maGV -tenGV-Thâm nien- tổng lương- xep loai

    class GiangVien{
        public $maGV;
        public $tenGV;
        public $namGiangDay;
        public $LuongCB;

        // hàm khỏi tạo 
        public function __construct($maGV,$tenGV,$namGiangDay,$LuongCB){
            $this->maGV = $maGV;
            $this->tenGV = $tenGV;
            $this->namGiangDay = $namGiangDay;
            $this->LuongCB = $LuongCB;
        }

      // hàm setmaGV  
    public function setmaGV(maGV){
        $this->maGV = $maGV;
    }
    public function settenGV(tenGV){
        $this->tenGV = $tenGV;
    }
    public function setnamGiangDay(namGiangDay){
        $this->namGiangDay = $namGiangDay;
    }
    public function setLuongCB(LuongCB){
        $this->LuongCB = $LuongCB;
    }

        public function hienthithongtin(){
            echo "maGV: ".$this->maGV."<br>"."tên GV".$this->tenGV."<br>"."namGiangday".$this->namGiangDay."<br>".
                "LuongCB: ".$this->LuongCB."<br>";
        }
        

    }
$ngochoa = new GiangVien("PH23455", "Thắng", "2000", "5000");
$ngochoa->hienthithongtin();
echo "</br>";
$ngochoa ->setTenSV("hoa xinh đẹp");
$ngochoa->hienThiThongTin();
?>
