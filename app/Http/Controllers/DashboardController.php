<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Your dashboard logic goes here
        return view('profile.profile');
    }
}
