<?php

namespace App\Http\Controllers\Data;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Pegawai;
use Excel;

class PegawaiController extends Controller
{

    public function getPegawai(Request $request)
      {
      $search = $request->search;

      $pegawai = Pegawai::where('nama', 'LIKE', "%$search%")->orderBy('id', 'Asc')->paginate(20);

      return response()->json(['pegawai' => $pegawai]);
      }

    public function index() 
      {
      return view ('pegawai.index');
      }

    public function dataTablePegawai () 
      {
        $pegawai = Pegawai::all();
        return Datatables::of($pegawai)->make(true);
      }

 
    public function exportExcel() 
      {
        $pegawai = Pegawai::select('nama','foto', 'nip', 'pangkat', 'jabatan', 'keterangan')->get();

        return Excel::create('data_pegawai', function($excel) use  ($pegawai){
          $excel->sheet('pegawai_bpkp', function($sheet) use ($pegawai) {
            $sheet->fromArray($pegawai);
          });
        })->download('xls');

      }

    public function importExcel(Request $request) 
      {
        if($request->hasFile('file')) {
          $path = $request->file('file')->getRealPath();
          $data = Excel::load($path, function ($reader) {} )->get();
          if(!empty($data) && $data->count() ) {
             foreach ($data as $key=>$value) {
               $pegawai = new Pegawai();
               $pegawai->nama = $value->nama;
               $pegawai->gelar = $value->gelar;
               $pegawai->foto = $value->foto;
               $pegawai->nip = $value->nip;
               $pegawai->pangkat = $value->pangkat;
               $pegawai->jabatan = $value->jabatan;
               $pegawai->keterangan = $value->keterangan;
               $pegawai->save();
             }
          }
        }
        return back();
      }
    //
    public function daltu() 
    {
      $auditormadya     = ['jabatan' => 'Auditor Madya'];
      $auditormuda      = ['jabatan' => 'Auditor Muda'];
      
      $dalnis   = Pegawai::where($auditormadya)->orWhere($auditormuda)->get();
      $daltu    = Pegawai::where($auditormadya)->get();
      
      return $daltu;
    }

   
   
}

