<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use DB;

class PageController extends Controller

{
    /* All Apps*/
    public function data()      {return view('pages.data');}
    public function spip()      {return view('pages.app.spip');}
    public function apip()      {return view('pages.app.apip');}
    public function simda()     {return view('pages.app.simda');}
    public function siskeudes() {return view('pages.app.siskeudes');}
    public function sia()       {return view('pages.app.sia');}
    public function fcp()       {return view('pages.app.fcp');}


    /* Data*/
    public function dataspip () {return view('data.spip');}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // List of All Pages

        $pages = Page::all() ;

        return view ('page.index')->compact('pages');
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
    public function show($id)
    {
        //
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
