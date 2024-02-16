<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TallerController extends Controller
{
    public function esPrimo($numero)
    {
    $primo = $this->esPrimoFuncion($numero);
    return $primo ? "$numero Es un número primo" : "$numero No es un número primo";
    }
    private function esPrimoFuncion($numero)
    {
     if ($numero <= 1) {
    return false;
}
    for ($i = 2; $i <= sqrt($numero); $i++) {
    if ($numero % $i == 0) {
     return false;
    }
}

 return true;
}
}
