<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Spip;
use App\Models\Obrik;
use App\Models\Unsur_Spip;
use App\Models\Sub_Unsur_Spip;

class AppController extends Controller
{
  // SPIP
    // The Index
      public function spip() {return view('app.spip.index');}
      public function spip_prov(){return view('app.spip.prov');}
      // Kabupaten
      public function spip_mamuju() {return view('app.spip.mamuju');}
      public function spip_matra()  {return view('app.spip.matra');}
      public function spip_majene() {return view('app.spip.majene');}
      public function spip_mamasa() {return view('app.spip.mamasa');}
      public function spip_mateng() {return view('app.spip.mateng');}
      public function spip_polman() {return view('app.spip.polman');}


    // Show
      public function spip_show($id)
      {
        $obrik = Obrik::find($id);

        $spip = SPIP::where('obrik_id', $obrik);

        $unsur1 = SPIP::where('unsur_spip', 1);
        $unsur2 = SPIP::where('unsur_spip', 2);
        $unsur3 = SPIP::where('unsur_spip', 3);
        $unsur4 = SPIP::where('unsur_spip', 4);
        $unsur5 = SPIP::where('unsur_spip', 5);


        return view('app.spip.show')->with('obrik', $obrik)->with('spip', $spip);
      }



      // OTHER APP
      public function apip()      {return view('app.apip.index');}
      public function simda()     {return view('app.simda.index');}
      public function siskeudes() {return view('app.siskeudes.index');}
      public function sia()       {return view('app.sia.index');}
      public function fcp()       {return view('app.fcp.index');}

}
