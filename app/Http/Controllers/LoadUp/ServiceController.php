<?php

namespace App\Http\Controllers\LoadUp;

use App\Http\Controllers\Controller;
use App\Models\LoadUp\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
    }
}
