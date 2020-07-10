<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //
    public function index(Request $request)
    {
        return view("back.layouts.master");
    }
}
