<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountdownController extends Controller
{
    public function index()
    {
        $ramadan = config('countdown.ramadan');
        $eid     = config('countdown.eid');

        return view('countdown.index', compact('ramadan', 'eid'));
    }
}