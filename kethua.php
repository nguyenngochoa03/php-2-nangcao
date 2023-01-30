<?php
class Connguoi{
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public function an(){
        echo "ăn bằng mồm";
    }
    
    public function setChan($chan)
    {
        $this->chan = $chan;
    }
    public  function setTay($tay){
        $this->tay = $tay;
    }
   
}
class Nguoilon extends Connguoi{
     public $longnach;
     

    public function di(){
    echo "đi bằng 2 chân ".$this->chan."chan";
    }
    
    public function an(){

    }
    public function noi()
    {
    }


}
class Trecon extends Connguoi{
    public function bo(){
        echo "<br>";
        echo "đi bằng 2  ".$this->chan."chan".$this->tay."2 tay";
    }
    public function an(){

    }

}
$hoa = new Nguoilon();
$hoa -> an();
$hoa->setChan(2);
$hoa -> di();
$tc = new Trecon();
$tc -> bo();
?>
