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
 
      $pegawai = Pegawai::where('nama', 'LIKE', "%$search%")->orderBy('id', 'Asc')->paginate();
      $response = [
              'pagination' => [
                  'total' => $pegawai->total(),
                  'per_page' => $pegawai->perPage(),
                  'current_page' => $pegawai->currentPage(),
                  'last_page' => $pegawai->lastPage(),
                  'from' => $pegawai->firstItem(),
                  'to' => $pegawai->lastItem()
              ],
              'pegawai' => $pegawai
          ];
 
      return response()->json($response);
    }
    //
    
    public function dataTablePegawai () 
      {
        $pegawai = Pegawai::all();
        return Datatables::of($pegawai)->addColumn('action', function($pegawai)           
        {
            return 
                  '<span><a href="pegawai/'.$pegawai->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye fa-fw"></i>&nbsp; Show </a></span>' . ' ' .
                  '<span><a href="pegawai/'.$pegawai->id.'/edit" class="btn btn-xs btn-info"><i class="fa fa-edit fa-fw"></i>&nbsp; Edit </a></span>'
            ;
        })->make(true);
      }

    //
    public function index() 
      {
      return view ('pegawai.index');
      }
    //
    public function create() 
      {
        return view('pegawai.new');
      }
    //
    public function store (Request $request)
      {
    
      }
    //

    public function edit($id) 
      {
        $pegawai = Pegawai::find($id);
        return view ('pegawai.edit')->with('pegawai', $pegawai);
      }
    //
    public function show($id)
      {
        $pegawai = Pegawai::find($id);
        return view ('pegawai.show')->with('pegawai', $pegawai);
      }
    //
    public function exportExcel() 
      {
        $pegawai = Pegawai::select('nama','foto', 'nip', 'pangkat', 'jabatan', 'keterangan')->get();

        return Excel::create('data_pegawai', function($excel) use  ($pegawai){
          $excel->sheet('pegawai_bpkp', function($sheet) use ($pegawai) {
            $sheet->fromArray($pegawai);
          });
        })->download('xls');

      }
    //
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
   
}

