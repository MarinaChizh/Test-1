<?php

namespace App\Calc;

interface CalcInterface{
    public function plus(float $a, float $b): float;
    public function minus(float $a, float $b): float;
    
}