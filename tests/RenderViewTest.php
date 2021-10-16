<?php

namespace App\Tests;
use App\Src\Functions;

use PHPUnit\Framework\TestCase;

class RenderViewTest extends TestCase{
    public function test(){
        $view_name='index';
        $stringView= $_SERVER["DOCUMENT_ROOT"].'\udemy_cotizador\templates\views\\'.$view_name.'View.php';
        $this->assertEquals($stringView,Functions::get_view('index'));
    }

    
}