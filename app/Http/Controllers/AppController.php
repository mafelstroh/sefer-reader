<?php

namespace SeferReader\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(Request $r) {
        return view('main.default');
    }
}
