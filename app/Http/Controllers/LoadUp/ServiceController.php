<?php

namespace App\Http\Controllers\LoadUp;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{


    public function create()
    {
        return view('loadUp/create');

    }
}
