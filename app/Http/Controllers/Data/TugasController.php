<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Requests;
use App\Models\Tugas;
use App\Models\Pegawai;
use Excel;
use Alert;
use Carbon\Carbon;
use DB;

class TugasController extends Controller
{
    public function cetak($id)
        {
            $cetak = Tugas::find($id);
            $pegawai = Pegawai::all();

            return view ('tugas.cetak')->with('cetak', $cetak)->with('pegawai', $pegawai);
        }
    public function dataTableTugas () 
        {
    
 

        $tugas  = Tugas::all();
        
        return Datatables::of($tugas)->addColumn('action', function($tugas)           
           {
               return 
           
                  '<a href="tugas/'.$tugas->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Show</a>'. '   ' .
                   '<a href="tugas/'.$tugas->id.'/edit" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-edit"></i> Edit</a>'. '    ' .
                   '<a href="tugas/'.$tugas->id.'/cetak" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-print"></i> Cetak</a>'
                ;
           })->make(true);
        }
    public function dataTableFiltered(Request $request)
    {
  
    }
    public function indexTugas(Request $request)
        {
        $search = $request->search;

        $tugas = Tugas::where('uraian', 'LIKE', "%$search%")->orderBy('id', 'Asc')->paginate();

        $response = [
                'pagination' => [
                    'total' => $tugas->total(),
                    'per_page' => $tugas->perPage(),
                    'current_page' => $tugas->currentPage(),
                    'last_page' => $tugas->lastPage(),
                    'from' => $tugas->firstItem(),
                    'to' => $tugas->lastItem()
                ],
                'tugas' => $tugas,

            ];

        return response()->json($response);
        }

    public function index()
        {

            return view ('tugas.index');
        }

  
    
    public function filter(Request $request)
        {   
               
            $from   = date($request->input('s_tgl_awal'));
            $to     = date($request->input('s_tgl_akhir'));
            
            $tugas  = Tugas::whereBetween('tanggal_st_nd', [$from, $to])->get();
            
            return view ('tugas.filter')->with('tugas', $tugas);
        }

   
    public function create()
        {
            $penanggungjawab      = ['jabatan' => 'Kepala Perwakilan'];
            $pengendalimutu       = ['keterangan' => 'Korwas'];
            $pengendaliteknis     = ['jabatan' => 'Auditor Madya'];
            $auditormuda          = ['jabatan' => 'Auditor Muda'];
            
            
            $pj         = Pegawai::where($penanggungjawab)->orWhere($pengendalimutu)->get();
            $daltu      = Pegawai::orderBy('nama')->where($pengendalimutu)->get();
            $dalnis     = Pegawai::orderBy('nama')->where($pengendaliteknis)->orWhere($auditormuda)->get();
            $pegawai    = Pegawai::orderBy('nama')->get();
           

            return view ('tugas.new')->with('pegawai', $pegawai)
                                     ->with('daltu', $daltu)
                                     ->with('dalnis', $dalnis)
                                     ->with('pj', $pj);
        }

    public function show($id)
        {
            $penanggungjawab  = ['jabatan' => 'Kepala Perwakilan'];
            $auditormadya     = ['keterangan' => 'Korwas'];
            $auditormuda      = ['jabatan' => 'Auditor Muda'];
            
            $daltu      = Pegawai::where('keterangan', 'Korwas')->get();
            $dalnis     = Pegawai::where($auditormadya)->orWhere($auditormuda)->get();
            $pj         = Pegawai::where($auditormadya)->orWhere($penanggungjawab)->get();

            $pegawai    = Pegawai::all();
            $tugas      = Tugas::find($id);
            
            return view ('tugas.show')->with('tugas', $tugas)
                                      ->with('pegawai', $pegawai)
                                      ->with('daltu', $daltu)
                                      ->with('dalnis', $dalnis)
                                      ->with('pj', $pj);
        }
        
    public function store(Request $request)
        {
            //dd($request);
            $this->validate($request, [
                'no_st_nd' => 'required',
            ]);
      
            // Request Save
            $tugas = new Tugas;
            
            $tugas->no_st_nd = $request->no_st_nd;
            $tugas->tipe = $request->tipe;
            $tugas->bidang = $request->bidang;
            $tugas->uraian = $request->uraian;
            
            $tugas->tanggal_st_nd = $request->tanggal_st_nd;
            $tugas->tanggal_mulai = $request->tanggal_mulai;
            $tugas->tanggal_selesai = $request->tanggal_selesai;
            
            $tugas->penanggung_jawab_id = $request->penanggung_jawab_id;
            $tugas->pengendali_mutu_id = $request->pengendali_mutu_id;
            $tugas->pengendali_teknis_id = $request->pengendali_teknis_id ;
            $tugas->ketua_tim_id = $request->ketua_tim_id;
            
            $tugas->lokasi = $request->lokasi;
            $tugas->beban = $request->beban;
            $tugas->rencana_biaya = $request->rencana_biaya;
            
            $tugas->save();
            
            $tugas->anggotaTim()->sync($request->anggotaTim,false);
            $tugas->narasumber()->sync($request->narasumber,false);
            $tugas->fasilitator()->sync($request->fasilitator,false);
     
          
            // Alert Success Message
            Alert::success('Buat ST Sukses!')->persistent("Tutup");
      
            // Back to The Index Page
            return redirect()->route('tugas.index');
        }

    
    public function showTugas(Request $request)
        {
            $search = $request->search;

            $tugas = Tugas::where('uraian', 'LIKE', "%$search%")->orderBy('id', 'Asc')->paginate(1);

            $response = [
                    'pagination' => [
                        'total' => $tugas->total(),
                        'per_page' => $tugas->perPage(),
                        'current_page' => $tugas->currentPage(),
                        'last_page' => $tugas->lastPage(),
                        'from' => $tugas->firstItem(),
                        'to' => $tugas->lastItem()
                    ],
                    'tugas' => $tugas,

                ];

            return response()->json($response);
        }

   
    public function edit($id)
        {
            $tugas = Tugas::find($id);
            
            $penanggungjawab      = ['jabatan' => 'Kepala Perwakilan'];
            $pengendalimutu       = ['keterangan' => 'Korwas'];
            $pengendaliteknis     = ['jabatan' => 'Auditor Madya'];
            $auditormuda          = ['jabatan' => 'Auditor Muda'];
            
            $pj         = Pegawai::where($penanggungjawab)->orWhere($pengendalimutu)->get();
            $daltu      = Pegawai::orderBy('nama')->where($pengendalimutu)->get();
            $dalnis     = Pegawai::orderBy('nama')->where($pengendaliteknis)->orWhere($auditormuda)->get();
            $pegawai    = Pegawai::all();
            
            return view ('tugas.edit')->with('tugas', $tugas)
                                      ->with('pegawai', $pegawai)
                                      ->with('daltu', $daltu)
                                      ->with('dalnis', $dalnis)
                                      ->with('pj', $pj);
        }

   
    public function update(Request $request, $id)
        {
            // Validasi Update Tugas
            $this->validate($request,[
                'no_st_nd' => 'required'
            ]);

            // Request Save
            $tugas = Tugas::find($id);
            
            $tugas->no_st_nd = $request->no_st_nd;
            $tugas->tipe = $request->tipe;
            $tugas->bidang = $request->bidang;
            $tugas->uraian = $request->uraian;
            
            $tugas->tanggal_st_nd = $request->tanggal_st_nd;
            $tugas->tanggal_mulai = $request->tanggal_mulai;
            $tugas->tanggal_selesai = $request->tanggal_selesai;
            
            $tugas->penanggung_jawab_id = $request->penanggung_jawab_id;
            $tugas->pengendali_mutu_id = $request->pengendali_mutu_id;
            $tugas->pengendali_teknis_id = $request->pengendali_teknis_id ;
            $tugas->ketua_tim_id = $request->ketua_tim_id;
            
            $tugas->lokasi = $request->lokasi;
            $tugas->beban = $request->beban;
            $tugas->rencana_biaya = $request->rencana_biaya;
            
            $tugas->save();
            

            $tugas->anggotaTim()->sync($request->anggotaTim);
            $tugas->narasumber()->sync($request->narasumber);
            $tugas->fasilitator()->sync($request->fasilitator);

            // Alert Success Message
            Alert::success('Update Sukses!')->persistent("Tutup");

            // Back to The Index Page
            return redirect()->route('tugas.index');

        }

    
    public function destroy($id)
        {
            //
        }



    

    // EXPORT IMPORT
     
    public function exportExcel() 
        {
        $tugas = Tugas::select(
            'no_st_nd',
            'tipe', 
            'bidang', 
            'lokasi', 
            'uraian', 
            'ketua_tim_id', 
            'no_laporan', 
            'rencana_biaya'
        )->get();

     

        return Excel::create('data_tugas', function($excel) use  ($tugas){
            $excel->sheet('tugas_bpkp', function($sheet) use ($tugas) {
            $sheet->fromArray($tugas);
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
                $tugas = new Tugas();
                $tugas->no_st_nd = $value->no_st_nd;
                $tugas->tipe = $value->tipe;
                $tugas->bidang = $value->bidang;
                $tugas->lokasi = $value->beban;
                $tugas->total_biaya = $value->total_biaya;
                $tugas->tanggal_st_nd = $value->tanggal_st_nd;
                $tugas->tanggal_mulai = $value->tanggal_selesai;
                
                $tugas->penanggung_jawab_id = $value->penanggung_jawab_id;
                $tugas->pengendali_mutu_id  = $value->pengendali_mutu_id;
                $tugas->pengendali_teknis_id = $value->pengendali_teknis_id;
                $tugas->ketua_tim_id = $value->ketua_tim_id;

                $tugas->save();
            }
            }
        }
        return back();
        }
}
