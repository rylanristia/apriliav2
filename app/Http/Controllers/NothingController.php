<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NothingController extends Controller
{
    public function index()
    {
        return view('pages.nothing');
    }
}