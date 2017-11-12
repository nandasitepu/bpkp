<?php

namespace App\Http\Controllers\Data\Penugasan;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
//
use App\Models\Pegawai;
use App\Models\Tugas\ST;
use App\Models\Tugas\KM;
//
use Excel;
use Alert;
use Carbon\Carbon;
use DB;

class STController extends Controller
{   
    // 
    public function DataTable_ST() 
        {
            $st  = ST::all();
            return Datatables::of($st)->addColumn('action', function($st)           
                {
                    return 
                        '<a href="st/'.$st->id.'" class="btn btn-xs btn-primary cool"><i class="fa fa-eye"></i> Show</a>'. '&nbsp; &nbsp; &nbsp;' .
                        '<a href="st/'.$st->id.'/edit" class="btn btn-xs btn-info cool"><i class="fa fa-edit"></i> Edit</a>'. '&nbsp; &nbsp; &nbsp;' .
                        '<a href="st/'.$st->id.'/cetak" class="btn btn-xs btn-default cool"><i class="fa fa-print"></i> Cetak</a>'
                        ;
                })->make(true);
        }
    
    public function filter(Request $request)
        {   
            // Date Filter
            $from    = date($request->input('s_tgl_awal'));
            $to      = date($request->input('s_tgl_akhir'));
            // Pegawai Filter
            $pegawai = Pegawai::where('keterangan', 'PFA')->orderBy('nama', 'Asc')->get();
            
            
            //Date Search
            $st  = ST::whereBetween('tanggal_st', [$from, $to])->get();
            //
            return view ('tugas.st.filter')->with('st', $st)->with('pegawai', $pegawai);
        }


    public function cetak($id)
        {
            $cetak = ST::find($id);
            $pegawai = Pegawai::all();

            return view ('tugas.st.cetak')->with('cetak', $cetak)->with('pegawai', $pegawai);
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::where('keterangan', 'PFA')->orderBy('nama', 'Asc')->get();
        $st = ST::paginate(10);
        return view('tugas.st.index')->with('st', $st)->with('pegawai', $pegawai);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            
            $st      = ST::all(); 

            return view ('tugas.st.new')->with('st', $st)
                                        ->with('pegawai', $pegawai)
                                        ->with('daltu', $daltu)
                                        ->with('dalnis', $dalnis)
                                        ->with('pj', $pj);
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        {
        
            $validator = $this->validate($request, [
        
                    'no_st'             => 'required',
                    'tujuan_st'         => 'required',
                    'tipe'              => 'required',
                    'bidang'            => 'required',
                    'uraian'            => 'required',
                    
                    // 'tanggal_st'        => 'required',
                    'tanggal_mulai'     => 'required',
                    'tanggal_selesai'   => 'required',
                    'hp'                => 'required',

                    'penanggung_jawab_id'    => 'required',
                    'pengendali_mutu_id'     => 'required',
                    'pengendali_teknis_id'   => 'required',
                    'ketua_tim_id'           => 'required',

                    'lokasi'             => 'required',
                    'biaya'              => 'required',
                ]);
        
    
            // Request Save
            $st = new ST;
            
            $st->no_st           = $request->no_st;
            $st->tipe            = $request->tipe;
            $st->bidang          = $request->bidang;
            $st->uraian          = $request->uraian;
            
            $st->tanggal_st      = $request->tanggal_st;
            $st->tanggal_mulai   = $request->tanggal_mulai;
            $st->tanggal_selesai = $request->tanggal_selesai;
            $st->hp              = $request->hp;
            
            $st->penanggung_jawab_id     = $request->penanggung_jawab_id;
            $st->pengendali_mutu_id      = $request->pengendali_mutu_id;
            $st->pengendali_teknis_id    = $request->pengendali_teknis_id;
            $st->ketua_tim_id            = $request->ketua_tim_id;
            
            // Anggota Tim / Narasumber / Fasilitator Menggunakan Intermediary Table

            $st->lokasi  = $request->lokasi;
            $st->biaya   = $request->biaya;
            
            $st->km_id           = $request->km_id;   
            $st->costsheet_id    = $request->costsheet_id;
            
            $st->save();
            
            $st->anggotaTim()->sync($request->anggotaTim,false);
            $st->narasumber()->sync($request->narasumber,false);
            $st->fasilitator()->sync($request->fasilitator,false);
    
        
            // Alert Success Message
            Alert::success('Buat ST Sukses! #ID $')->persistent("Tutup");
    
            // Back to Create Page
            //return redirect()->back()->withInput()->withErrors($validator);
            // Back to Show Page
            // return redirect()->route('st.show', $st->id);
            // Back to Edit Page
            return redirect()->route('st.edit', $st->id);
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tugas\ST  $sT
     * @return \Illuminate\Http\Response
     */
    public function show($id)
        {
            $penanggungjawab  = ['jabatan' => 'Kepala Perwakilan'];
            $auditormadya     = ['keterangan' => 'Korwas'];
            $auditormuda      = ['jabatan' => 'Auditor Muda'];
            
            $daltu      = Pegawai::where('keterangan', 'Korwas')->get();
            $dalnis     = Pegawai::where($auditormadya)->orWhere($auditormuda)->get();
            $pj         = Pegawai::where($auditormadya)->orWhere($penanggungjawab)->get();

            $pegawai    = Pegawai::all();
            $st         = ST::find($id);
            
            return view ('tugas.st.show')->with('st', $st)
                                        ->with('pegawai', $pegawai)
                                        ->with('daltu', $daltu)
                                        ->with('dalnis', $dalnis)
                                        ->with('pj', $pj);
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tugas\ST  $sT
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
        {
            $st = ST::find($id);
            
            $penanggungjawab      = ['jabatan' => 'Kepala Perwakilan'];
            $pengendalimutu       = ['keterangan' => 'Korwas'];
            $pengendaliteknis     = ['jabatan' => 'Auditor Madya'];
            $auditormuda          = ['jabatan' => 'Auditor Muda'];
            
            $pj         = Pegawai::where($penanggungjawab)->orWhere($pengendalimutu)->get();
            $daltu      = Pegawai::orderBy('nama')->where($pengendalimutu)->get();
            $dalnis     = Pegawai::orderBy('nama')->where($pengendaliteknis)->orWhere($auditormuda)->get();
            $pegawai    = Pegawai::all();
            
            return view ('tugas.st.edit')->with('st', $st)
                                        ->with('pegawai', $pegawai)
                                        ->with('daltu', $daltu)
                                        ->with('dalnis', $dalnis)
                                        ->with('pj', $pj);
        }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tugas\ST  $sT
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
        {
            // Request Update
            $st = ST::findOrFail($id);
            // Validasi Update Tugas
            $this->validate($request,[
                'no_st' => 'required'
            ]);

      
            
            $st->no_st           = $request->no_st;
            $st->tipe            = $request->tipe;
            $st->bidang          = $request->bidang;
            $st->uraian          = $request->uraian;
            
            $st->tanggal_st      = $request->tanggal_st;
            $st->tanggal_mulai   = $request->tanggal_mulai;
            $st->tanggal_selesai = $request->tanggal_selesai;
            $st->hp              = $request->hp;
            
            $st->penanggung_jawab_id     = $request->penanggung_jawab_id;
            $st->pengendali_mutu_id      = $request->pengendali_mutu_id;
            $st->pengendali_teknis_id    = $request->pengendali_teknis_id;
            $st->ketua_tim_id            = $request->ketua_tim_id;
            
            // Anggota Tim / Narasumber / Fasilitator Menggunakan Intermediary Table

            $st->lokasi  = $request->lokasi;
            $st->biaya   = $request->biaya;
            
            $st->km_id           = $request->km_id;   
            $st->costsheet_id    = $request->costsheet_id;
            
            $st->save();
            

            $st->anggotaTim()->sync($request->anggotaTim);
            $st->narasumber()->sync($request->narasumber);
            $st->fasilitator()->sync($request->fasilitator);

            // Alert Success Message
            Alert::success('Update Sukses!')->persistent("Tutup");

            // Back to The Index Page
            return redirect()->route('st.index');

        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tugas\ST  $sT
     * @return \Illuminate\Http\Response
     */
    public function destroy(ST $sT)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * EXPORT IMPORT
     */
    public function exportExcel() 
        {
            $st = ST::select(
                'no_st',
                'tanggal_st',
                'tujuan_st',
                'tipe', 
                'bidang',
                'uraian',
                
                'tanggal_mulai',
                'tanggal_selesai',
                'hp',
                'no_laporan',
                'tanggal_laporan',

                'penanggung_jawab_id',
                'pengendali_mutu_id',
                'pengendali_teknis_id',
                'ketua_tim_id', 
             
                'lokasi', 
                'biaya',
                'km_id',
                'costsheet_id'
              
            )->get();

        

            return Excel::create('data_tugas', function($excel) use  ($st){
                $excel->sheet('st_bpkp', function($sheet) use ($st) {
                $sheet->fromArray($st);
                });
            })->download('xls');

        }

    public function importExcel(Request $request) 
        {
        if($request->hasFile('file')) {
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path, function ($reader) {} )->get();
            if(!empty($data) && $data->count() ) 
            {
                foreach ($data as $key=>$value) 
                    {
                        $tugas = new ST();

                        $tugas->no_st = $value->no_st;
                        $tugas->tanggal_st = $value->tanggal_st;
                        $tugas->tujuan_st = $value->tujuan_st;
                        $tugas->tipe = $value->tipe;
                        $tugas->bidang = $value->bidang;
                        $tugas->uraian = $value->uraian;
                    
                        $tugas->tanggal_mulai   = $value->tanggal_mulai;
                        $tugas->tanggal_selesai = $value->tanggal_selesai;
                        
                        $tugas->hp                  = $value->hp;
                        $tugas->no_laporan          = $value->no_laporan;
                        $tugas->tanggal_laporan     = $value->tanggal_laporan;
        
                        $tugas->penanggung_jawab_id = $value->penanggung_jawab_id;
                        $tugas->pengendali_mutu_id  = $value->pengendali_mutu_id;
                        $tugas->pengendali_teknis_id = $value->pengendali_teknis_id;
                        $tugas->ketua_tim_id = $value->ketua_tim_id;

                    
                        $tugas->lokasi = $value->lokasi;
                        $tugas->biaya  = $value->biaya;
                        
                        $tugas->km_id           = $value->km_id;
                        $tugas->costsheet_id    = $value->costsheet_id;
                        
                        $tugas->save();
                    }
            }
        }
        return back();
        }
}
