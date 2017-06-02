<?php

namespace App\Http\Controllers\Apps;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SIAController extends Controller
{
    public function index() {return view('app.sia.index');}
}
