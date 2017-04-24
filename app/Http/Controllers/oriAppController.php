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
      public function spip()
      {
        return view('app.spip.index');
      }


    // Show
      public function spip_show($id)
      {
        $obrik = Obrik::find($id);
        $unsur= Unsur_Spip::all();
        $sub_unsur = Sub_Unsur_Spip::all();

        $spip_show = Spip::where('obrik_id', $id);

        return view('app.spip.show')->with('spip_show', $spip_show)
        ->with('obrik', $obrik)
        ->with('unsur_spip', $unsur)
        ->with('sub_unsur', $sub_unsur);
      }

    // Mamuju
      public function spip_mamuju()
      {
        $obrik = Obrik::find(5);
        $unsur= Unsur_Spip::all();
        $sub_unsur = Sub_Unsur_Spip::all();
    // Set
        $spip_mamuju = Spip::all()->where('obrik_id', 2)->filter()->all();

        return view('app.spip.mamuju')->with('spip_mamuju', $spip_mamuju)->with('obrik', $obrik);
      }


      public function apip()      {return view('app.apip.index');}
      public function simda()     {return view('app.simda.index');}
      public function siskeudes() {return view('app.siskeudes.index');}
      public function sia()       {return view('app.sia.index');}
      public function fcp()       {return view('app.fcp.index');}

}
