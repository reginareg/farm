<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimallController extends Controller
{
    public function barsukas ()
    {
        return 'Valio barsukams';
    }

    public function briedis(Request $request, $aidysas)
    {

        dump($aidysas);
        return 'Valio briedams';
    }
}
