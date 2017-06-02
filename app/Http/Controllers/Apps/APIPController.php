<?php

namespace App\Http\Controllers\Apps;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\APIP\APIP;
use App\Models\APIP\APIP_Data;
use App\Models\APIP\APIP_Elemen;
use App\Models\APIP\APIP_Level;

class APIPController extends Controller
{

    public function lvup(){return view('app.apip.lvup');}
    public function index() {return view('app.apip.index');}

    public function show($id)
    {
        $apip = APIP::find($id);

        return view ('app.apip.show')->with('apip', $apip);
    }

    // SHOW DATA
    public function show_data($id)
    {
        $apip = APIP_Data::find($id);

        return view ('app.apip.data')->with('apip', $apip);
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
