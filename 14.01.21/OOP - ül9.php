<?php
class auto{
    var $varv;
    var $tootja;
    var $kiirus = "0";

    function kiirendus(){
        for($this->kiirus; $this->kiirus <= 100; $this->kiirus+=10)
            echo "Kiirus: ".$this->kiirus."<br>";
    }
    function uus_auto() {
        echo "Minu uus ".$this->tootja." on ".$this->varv;
    }

}
$auto1 = new auto;
        /*echo*/ $auto1 ->varv="Nitrous Blue".'<br>';
        /*echo*/ $auto1 ->tootja="Ford"."<br>";
        /*echo*/ $auto1 ->kiirus="0"."<br>";
        echo "<br>";
        $auto1->kiirus=10;
        $auto1->uus_auto();
        $auto1->kiirendus();

$auto2 = new auto;
       /* echo */ $auto2 ->varv="Emerald Green".'<br>';
        /*echo*/ $auto2 ->tootja="Datsun".'<br>';
        /*echo*/ $auto2 ->kiirus="0".'<br>';
        echo "<br>";
        $auto2->kiirus=0;
        $auto2->uus_auto();
        $auto2->kiirendus()

?>