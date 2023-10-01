<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index()
    {
        // Your dashboard logic goes here
        return view('billing.billing');
    }
}
