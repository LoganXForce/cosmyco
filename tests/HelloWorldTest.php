<?php

namespace App\Tests;
use App\Src\Functions;

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase{
    public function test(){
       
        $this->assertEquals(2,Functions::calculate());
    }

    
}