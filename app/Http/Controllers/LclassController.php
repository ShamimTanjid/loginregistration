<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lclass;
class LclassController extends Controller
{
    public function Index(){
        $sindx=Lclass::all();
            return response()->json($sindx);
    }
}
