<?php

namespace App;

class Calculator
{
    public function add($x, $y)
    {
        return $x + $y;
    }

    public function sub($x, $y)
    {
        return $x - $y;
    }

    /** @test */
    public function sum(array $items)
    {
        // Test
        $total = 0 ;

        foreach ($items as $key => $value) {
            $total += $value;
        }

        return $total;
    }
    
}
