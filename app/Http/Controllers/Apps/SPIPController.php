<?php

namespace App\Http\Controllers\Apps;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SPIP\SPIP;
use App\Models\SPIP\SPIP_Data;
use App\Models\SPIP\SPIP_Unsur;
use App\Models\SPIP\SPIP_Sub_Unsur;
use App\Models\SPIP\SPIP_Level;
use App\Models\SPIP\SPIP_Dokumen;
use Excel;
use Session;
use Alert;

class SPIPController extends Controller
{

  public function getSPIP()
    {
      $spip = SPIP_Data::all();

      return response()->json($spip);
    }

    /* SPIP - Peningkatan Maturitas  */
    public function lvup()
    {
      return view('app.spip.lvup');
    }

    /* SPIP - Tentang SPIP */
    public function spip_about()
    {
      $spip_unsur = SPIP::where(['spip_level_id' => 1, 'spip_data_id' => 1])->get();

      return view('app.spip.tentang')->with('spip_unsur', $spip_unsur);
     }

    /* SPIP - Halaman Utama */
    public function index()
    {
      return view('app.spip.index');
    }
    /* SPIP -  Show - Obrik */
    public function spip_pemda($id)
    {
      $pemda        = SPIP_Data::find($id);
      $condition    = ['spip_data_id' => $id];
      $condition1   = ['spip_data_id' => $id, 'spip_unsur_id' => '1'];
      $condition2   = ['spip_data_id' => $id, 'spip_unsur_id' => '2'];
      $condition3   = ['spip_data_id' => $id, 'spip_unsur_id' => '3'];
      $condition4   = ['spip_data_id' => $id, 'spip_unsur_id' => '4'];
      $condition5   = ['spip_data_id' => $id, 'spip_unsur_id' => '5'];

      $spip         = SPIP::where($condition)->get();
      $spip1        = SPIP::where($condition1)->get();
      $spip2        = SPIP::where($condition2)->get();
      $spip3        = SPIP::where($condition3)->get();
      $spip4        = SPIP::where($condition4)->get();
      $spip5        = SPIP::where($condition5)->get();
      return view('app.spip.kab') ->with('pemda', $pemda)
                                  ->with('spip' , $spip)
                                  ->with('spip1', $spip1)
                                  ->with('spip2', $spip2)
                                  ->with('spip3', $spip3)
                                  ->with('spip4', $spip4)
                                  ->with('spip5', $spip5);
    }

    /* SPIP -  Show */
    public function show($id)
    {
      $spip  = SPIP::find($id);

      return view ('app.spip.show')->with('spip', $spip);
    }

    // update
    public function update(Request $request, $id)
    {
      $this->validate($request, [
          'status' => 'required',
          'catatan' => 'required',
      ]);

      $spip = SPIP::find($id)->update( $request->all() );

      // Alert Success Message
      Alert::success('Update Sukses!')->persistent("Tutup");

      // Back to The Index Page
      return back();

    }
}
