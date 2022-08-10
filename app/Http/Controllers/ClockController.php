<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ClockController extends Controller
{
    public function clock_in()
    {
        // Session::put('clock_in', date('H:m:s'));

        // return redirect()->route('login');
    }
}
