<?php
    class Car{
        public $bakas;
        public function degaluKiekis($litrai){
            $this-> bakas += $litrai;
            return $this;
        }


public function atstumas($distancija){
    $km=$distancija;
    $litrai=$km*0.05;
    $this-> bakas -= $litrai;
    return $this;
    }
    }

$bmw= new Car();

$bakas=$bmw -> degaluKiekis(10)->atstumas(40)->bakas;
echo 'bake bus like'.$bakas.'L';

?>
<?php ini_set( '‘display_errors’', '‘1’'); ?>
