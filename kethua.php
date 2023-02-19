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
    public function __construct($chan,$tay,$mat,$mui)
    {
        $this ->chan= $chan;
        $this ->tay = $tay;
        $this ->mat = $mat;
        $this ->mui = $mui;
    }
}
class Nguoilon extends Connguoi{
     public $longnach;
    public function __construct($chan,$tay,$mat,$mui,$longnach){
        $this ->chan= $chan;
        $this ->tay = $tay;
        $this ->mat = $mat;
        $this ->mui = $mui;
        $this->longnach=$longnach;
    }

    public function di(){
    echo "đi bằng 2 chân ".$this->chan."chan".$this->tay."tay".$this->mat."mat".$this->mui."mũi";
    echo $this->longnach;
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
//$hoa = new Nguoilon();
//$hoa -> an();
//$hoa->setChan(2);
$hoa = new Nguoilon("2","2","2","1","nhiều");
$hoa -> di();
$tc = new Trecon();
$tc -> bo();
?>
