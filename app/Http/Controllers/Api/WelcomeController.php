<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        $name = 'Luciano';
        return view('welcome', ['n'=>$name]);
    }
}