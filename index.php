<?php 
namespace App;
use App\Src\Functions;
require_once 'app/config.php';

// Renderizado de la vista
Functions::get_view('index');

echo $_SERVER["DOCUMENT_ROOT"];