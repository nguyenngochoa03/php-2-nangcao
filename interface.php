<?php
// interface không phải là class
// interface chỉ có phương thức trìu tượng
interface Dichuyen{
    // định nghĩa phương thức trìu tượng tromng interface
    function chay();

}
class Concho implements Dichuyen{
    public function chay()
    {
        echo " con chó chạy bằng 4 chân";
    }
}
class Oto implements Dichuyen{
    public function chay()
    {
       echo "ôt chạy bằng 4 bánh";
    }
}
// khác nhau giữa interfaca là bản thiết kế cho các class có chùng phương thức
// astracs : bản thiết kế có cùng tinhd chất với nhau
// cùng là bản thiết kế  phần mềm
 $cc = new ConCho();
$cc ->chay();
?>
