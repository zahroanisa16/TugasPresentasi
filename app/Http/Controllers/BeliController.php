<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeliController extends Controller
{
    public function beli()
    {
        return view('posts.beli');
    }
}
