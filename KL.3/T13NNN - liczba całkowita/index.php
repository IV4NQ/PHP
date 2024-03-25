<?php

class Liczba_Calkowita{
    private $calkowita;

    public function wyswietlLiczbe(){
        echo $this->calkowita;
    }
    public function pobierzLiczbe($licz){
        $this->calkowita = $licz;
    }
    public function zwracajLiczbe(){
        return $this->calkowita;
    }
    public function wartosc_bezwzgledna(){
        $calk = abs($this->calkowita);
        return $calk;
    }
}

$liczba = new Liczba_Calkowita();

