<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AprilfriendsController extends Controller
{
    public function index()
    {
        return view('pages.friends');
    }
}