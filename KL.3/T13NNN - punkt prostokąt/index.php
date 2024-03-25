<?php

class Punkt{
    public $x,$y;
    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

class Prostokat extends Punkt{
    public $pkt1;
    public $pkt2;
    public $pkt3;
    public $pkt4;

    public function __construct($p1, $p2, $p3, $p4)
    {
        $this->pkt1 = $p1;
        $this->pkt2 = $p2;
        $this->pkt3 = $p3;
        $this->pkt4 = $p4;
    }
}

$pk1 = new Punkt(2,3);
$pk2 = new Punkt(5,7);
$pk3 = new Punkt(1,9);
$pk4 = new Punkt(9,14);

$pros = new Prostokat($pk1, $pk2, $pk3, $pk4);