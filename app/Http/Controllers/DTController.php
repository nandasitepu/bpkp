<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tugas;

class DTController extends Controller
{
    public function tugasDataTable() 
    {
    $tugas = Tugas::all();
    
    return Datatables::of($tugas)->addColumn('action', function($tugas)
        {
            return 
                '<a href="tugas/'.$tugas->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Show</a>'. '   ' .
                '<a href="tugas/'.$tugas->id.'/edit" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-edit"></i> Edit</a>'. '    ' .
                '<a href="tugas/'.$tugas->id.'/cetak" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-print"></i> Cetak</a>'
            ;
        })->make(true);
    }
}
