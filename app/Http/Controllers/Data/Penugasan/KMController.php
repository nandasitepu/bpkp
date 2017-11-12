<?php

namespace App\Http\Controllers\Data\Penugasan;

use App\Models\Tugas\KM;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\Models\Pegawai;
use App\Models\ST;

use Excel;
use Alert;
use Carbon\Carbon;
use DB;


class KMController extends Controller
{
    
    public function DataTable_KM() 
    {
        
        $km  = KM::with('st', 'kt')->select('km.*');
        

        return Datatables::of($km)->addColumn('action', function($km)           
            {
                return 
                    '<a href="km/'.$km->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Show</a>'. '   ' .
                    '<a href="km/'.$km->id.'/edit" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-edit"></i> Edit</a>'. '    ' .
                    '<a href="km/'.$km->id.'/cetak" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-print"></i> Cetak</a>'
                    ;
            })->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::where('keterangan', 'PFA')->orderBy('nama', 'Asc')->get();
        $km = KM::paginate(10);
        return view('tugas.km.index')->with('skm', $km)->with('pegawai', $pegawai);
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
        
        $km      = KM::all(); 

        return view ('tugas.km.new')->with('km', $km)
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tugas\KendaliMutu  $kendaliMutu
     * @return \Illuminate\Http\Response
     */
    public function show(KendaliMutu $kendaliMutu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tugas\KendaliMutu  $kendaliMutu
     * @return \Illuminate\Http\Response
     */
    public function edit(KendaliMutu $kendaliMutu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tugas\KendaliMutu  $kendaliMutu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KendaliMutu $kendaliMutu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tugas\KendaliMutu  $kendaliMutu
     * @return \Illuminate\Http\Response
     */
    public function destroy(KendaliMutu $kendaliMutu)
    {
        //
    }
}
