<?php

Class MachineACafe {
    private $marque;
    private $prix = 0.3;
    private $cafe = 0;  // 0 = aucune dosette - 1 = dosette chargée - 2 = café prêt
    private $enFonction = false;

    public function __construct($marque) {
        $this->marque = $marque;
    }

    public function powerSwitch() {
        if(!$this->enFonction){
            $this->enFonction = true;
            echo("La machine " . $this->marque . " est en fonction." . "<br>");
        }elseif($this->enFonction){
            $this->enFonction = false;
            echo("La machine ". $this->marque . " n'est plus en fonction." . "<br>");
        }
    }

    public function mettreUneDosette() {
        if($this->cafe === 1){
            echo "Une dosette est déjà chargée". "<br>";
        }else {
            $this->cafe = 1;
            echo "La dosette est chargée";
        }
    }

    public function faireDuCafe() {
if($this->enFonction === true AND $this->cafe ===1 ){
   echo "le café coule à flot";
     $this->cafe=2;
} else {

    echo "Pas de café";
}
    }
}

$machine = new MachineACafe("Senseo");
$machine->powerSwitch();
$machine->mettreUneDosette();
$machine->faireDuCafe();


?>