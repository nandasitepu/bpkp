<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Pegawai;

class PegawaiController extends Controller
{

   public function index ()
    {
      return view('pegawai.index');
    }

}
