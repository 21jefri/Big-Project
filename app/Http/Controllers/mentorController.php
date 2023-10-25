<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mentorController extends Controller
{
    protected function dashboard()
    {
        return response()->view('mentor.dashboard');
    }
    protected function presentasi()
    {
        return response()->view('mentor.presentasi');
    }
}
