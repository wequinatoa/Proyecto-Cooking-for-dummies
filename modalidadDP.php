<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class modalidadDP extends Controller
{
    public function seleccionarModalidad($mod)
    {
        if($mod=='cena')
        {
            //devuelve la vista de cena romantica
        }
        elseif ($mod =='bocaditos')
        {
            //devuelve la vista de bocaditos
        }
    }
}
