<?php

namespace App\Http\Controllers\Data;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Obrik;
use Alert;

class ObrikController extends Controller
{
    // JSON Data Obrik
    Public function getObrik(Request $request)
     {
       $search = $request->search;

       $obrik = Obrik::where('nama', 'LIKE', "%$search%")->orderBy('id', 'Asc')->paginate(10);

       return response()->json([
         'obrik' => $obrik
       ]);
     }
    /*
    *
    *
         VUE SECTION
    *
    */

    public function vObrikUpdate(Request $request, Obrik $obrik)
    {

      $obrik->update( $request->all() );

      return "success";
    }


    /*
    *
    *
        LARAVEL SECTION
    *
    */
    // Index List Obrik
    public function index()
    {
      $obrik = Obrik::all();

      return view('obrik.index')->with('obrik', $obrik);
    }

    // Form Tambah Obrik
    public function create()
    {
       $obrik = Obrik::all();

       return view ('obrik.create')->with('obrik',$obrik);
    }

    // Tambah Obrik - Simpan Data
    public function store(Request $request)
    {
      // Validasi Form Tambah Obrik
      $this->validate($request,[

        'nama'            => 'required|max:255',
        'short'           => 'required',
        'foto'            => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'pimpinan'        => 'required',
        'anggaran'        => 'required',
        'lokasi'          => 'required',
        'kontak'          => 'required',
        'keterangan'      => 'required',
      ]);

      // Simpan Data Obrik
      $obrik = new Obrik;

      $obrik->nama          = $request->nama;
      $obrik->short         = $request->short;
      $obrik->foto          = $request->foto;
      $obrik->pimpinan      = $request->pimpinan;
      $obrik->anggaran      = $request->anggaran;
      $obrik->lokasi        = $request->lokasi;
      $obrik->kontak        = $request->kontak;
      $obrik->keterangan    = $request->keterangan;


      $obrik->save();

      // Alert Success Message
      Alert::success('Tambah Obrik Sukses!')->persistent("Tutup");

      // Back to The Index Page
      return redirect()->route('obrik.index');
    }

    // Tampilkan Obrik Single Page
    public function show($id)
    {
      $obrik = Obrik::find($id);

      return view ('obrik.show')->with('obrik', $obrik);
    }

    // Edit Obrik Page
    public function edit($id)
    {
        //
    }

    // Update Data Obrik
    public function update(Request $request, $id)
    {
        //
    }

    // Hapus Obrik
    public function destroy($id)
    {
        //
    }
}
