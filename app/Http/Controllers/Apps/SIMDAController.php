<?php

namespace App\Http\Controllers\Apps;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SIMDAController extends Controller
{
    public function index() {return view('app.simda.index');}
}
