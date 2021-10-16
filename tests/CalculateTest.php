<?php

namespace App\Tests;
use App\Src\Functions;

use PHPUnit\Framework\TestCase;

class Calculate extends TestCase{
    public function test(){
       
        $this->assertEquals('hello',Functions::hello());
    }

    
}