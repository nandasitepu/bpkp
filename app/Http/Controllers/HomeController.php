<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class HomeController extends Controller
{

    public function home()
    {
      return view('home');
    }

    public function search(Request $request)
    {
        if($request->has('search')){
          $pegawai = Pegawai::search($request->get('search'))->get();	
        }else{
          $pegawai = Pegawai::get();
        }
  
        return view('search', compact('pegawai'));
    }

    public function index()
    {
      return view('dashboard');
    }

}
