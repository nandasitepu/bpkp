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

    // Show
      public function spip_show($id)
      {
        $obrik = Obrik::find($id);

        $condition1 = ['obrik_id' => $id, 'unsur_spip_id' => '1'];
        $condition2 = ['obrik_id' => $id, 'unsur_spip_id' => '2'];
        $condition3 = ['obrik_id' => $id, 'unsur_spip_id' => '3'];
        $condition4 = ['obrik_id' => $id, 'unsur_spip_id' => '4'];
        $condition5 = ['obrik_id' => $id, 'unsur_spip_id' => '5'];

        $spip1 = SPIP::where($condition1)->get();
        $spip2 = SPIP::where($condition2)->get();
        $spip3 = SPIP::where($condition3)->get();
        $spip4 = SPIP::where($condition4)->get();
        $spip5 = SPIP::where($condition5)->get();

        return view('app.spip.show')->with('obrik', $obrik)
                                    ->with('spip1', $spip1)
                                    ->with('spip2', $spip2)
                                    ->with('spip3', $spip3)
                                    ->with('spip4', $spip4)
                                    ->with('spip5', $spip5);
      }
    // EDIT
      public function spip_edit($id)
      {
        $condition = ['obrik_id' => $id];
        $obrik = Obrik::find($id);
        $spip = SPIP::where($condition)->get();

        return view('app.spip.edit')->with('obrik', $obrik)->with('spip' , $spip );
      }
    // UPDATE
      public function spip_update(Request $request, $id)
      {
        $obrik= Obrik::find($id);
        $spip = SPIP::find($id)->where('obrik_id', $id);

        foreach ($spip as $s ) {
          $s->dokumen = $request->dokumen;
          $s->catatan = $request->catatan;
          // Save
          $s->save();
        }

        return redirect()->route('spip.show', $obrik->id, $obrik->short);


      }


      // Other Apps
      public function apip()      {return view('app.apip.index');}
      public function simda()     {return view('app.simda.index');}
      public function siskeudes() {return view('app.siskeudes.index');}
      public function sia()       {return view('app.sia.index');}
      public function fcp()       {return view('app.fcp.index');}

}
