<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Spip;


class SpipController extends Controller
{
  public function index()
  {
      // List of All Pages

      $spip = Spip::all();

      return view('data.spip')->withSpip($spip);
  }
}
