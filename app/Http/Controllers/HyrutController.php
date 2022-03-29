<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HyrutController extends Controller
{

    public function __invoke(Request $request)
    {
        return view('/hyrut');
    }
}
