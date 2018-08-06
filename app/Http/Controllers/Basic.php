<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Basic extends Controller
{
    public function index()
    {
    	return view('pages/main');
    }

    public function auth()
    {
    	return view('pages/enter');
    }
}
