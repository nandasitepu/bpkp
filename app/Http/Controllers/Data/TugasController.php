<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tugas;

class TugasController extends Controller
{

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

    public function tugas()
    {
        return view ('tugas.konsep');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('tugas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
