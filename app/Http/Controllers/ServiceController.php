<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ServiceController extends Controller
{
    public function index()
    {
        return view('service.index');
    }
}
