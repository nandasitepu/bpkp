<?php

namespace App\Http\Controllers\Data;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Pegawai;

class PegawaiController extends Controller
{

   public function getPegawai(Request $request)
    {
      $search = $request->search;

      $pegawai = Pegawai::where('nama', 'LIKE', "%$search%")->orderBy('id', 'Asc')->paginate(20);

      return response()->json(['pegawai' => $pegawai]);
    }

    public function index() {
      return view ('pegawai.index');
    }

}
