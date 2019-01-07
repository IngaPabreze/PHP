<?php
class Asmuo{
        public $vardas;
        public $pavarde;
        public function labas(){
            return 'Labas! Tavo vardas '.$this->vardas.', o pavardė '.$this->pavarde.'.<br>';
        }
}
$asmuo1 = new Asmuo();
$asmuo2= new Asmuo();
$asmuo1-> vardas='Inga';
$asmuo1-> pavarde='Pabreze';
$asmuo2-> vardas='Dalia';
$asmuo2-> pavarde='Dalyte';
echo $asmuo1 -> labas();
echo $asmuo2 -> labas();
?>
